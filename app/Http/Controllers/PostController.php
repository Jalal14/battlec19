<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\PostDatatable;
use App\Models\Post;
use App\Models\DonationImage;
use DB;
use Session;
use Auth;

class PostController extends Controller
{
    public function index(PostDatatable $dataTable)
    {
    	$data['menu'] = 'post';
    	return $dataTable->with('row_per_page', 10)->render("admin.posts.list", $data);
    }

    public function create()
    {
    	$data['menu'] = 'post';
    	return view("admin.posts.create", $data);
    }

    public function store(Request $request)
    {
    	try {
            DB::beginTransaction();
	    	$post = new Post();
	    	$post->description = $request->description;
	    	$post->area = $request->area;
	    	$post->in_charge = $request->in_charge;
	    	$post->donation_date = $request->donation_date;
	    	if ($post->save()) {
	    		$imageName = md5(time()) .'_'. $post->id . "." . $request->cover->getClientOriginalExtension();
	    		$image = new DonationImage();
	    		$image->post_id = $post->id;
	    		$image->is_cover = 1;
	    		$image->photo = $imageName;
                $image->save();
	    		$request->cover->move(public_path('uploads/posts'), $imageName);
	    	}
	    	$post->save();
	    	if (!empty($request->attachments)) {
                $path = "public/uploads/posts";
                if (!file_exists($path)) {
	                mkdir($path, config('app.filePermission'), true);
	            }
                $postFiles = (new Post)->store($request->attachments, $path, $post->id, ['isUploaded' => true]);
            }
	    	DB::commit();
            Session::flash('success', "Successfully saved");
            return redirect("admin/post/list");
        } catch (Exception $e) {
            DB::rollback();
            Session::flash('danger', "Save failed");
            return redirect("admin/post/add");
        }
    }

    public function edit($id)
    {
        $data['menu'] = 'post';
        $data['post'] = Post::with(['donationImages'])->find($id);
        return view('admin.posts.edit', $data);
    }

    public function update(Request $request)
    {
        try {
            $post = Post::find($request->id);
            if ($post) {
                $post->description = $request->description;
                $post->area = $request->area;
                $post->in_charge = $request->in_charge;
                $post->donation_date = $request->donation_date;
                if ($post->save()) {
                    if ($request->cover) {
                        $imageName = md5(time()) .'_'. $post->id . "." . $request->cover->getClientOriginalExtension();
                        $image = DonationImage::where(['post_id' => $post->id, 'is_cover' => 1])->first();
                        if (file_exists("public/uploads/posts/".$image->photo)) {
                            $unlinked = (new Post)->unlinkFile("public/uploads/posts/".$image->photo);
                        }
                        $image->photo = $imageName;
                        $image->save();
                        $request->cover->move(public_path('uploads/posts'), $imageName);
                    }
                }
            }
            if (!empty($request->attachments)) {
                $path = "public/uploads/posts";
                if (!file_exists($path)) {
                    mkdir($path, config('app.filePermission'), true);
                }
                $postFiles = (new Post)->store($request->attachments, $path, $post->id, ['isUploaded' => true]);
            }
            DB::commit();
            Session::flash('success', "Successfully saved");
            return redirect("admin/post/list");
        } catch (Exception $e) {
            DB::rollback();
            Session::flash('danger', "Save failed");
            return redirect("admin/post/add");
        }
    }
}
