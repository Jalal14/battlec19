<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\AdminDatatable;
use App\Models\Admin;
use Hash;
use DB;
use Session;

class MemberController extends Controller
{
    public function index(AdminDatatable $dataTable)
    {
    	$data['menu'] = 'member';
    	return $dataTable->with('row_per_page', 10)->render("admin.members.list", $data);
    }

    public function create()
    {
    	$data['menu'] = 'member';
    	return view('admin.members.create', $data);
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'name' => 'required',
            'email' => 'required|email|unique:admins,email',
            'phone' => 'required|unique:admins,phone',
        ]);
        try {
            DB::beginTransaction();
            if (!empty($request->email)) {
                $hasEmailAddress = Admin::where(['email' => $request->email])->first(['email']);
                if (!empty($hasEmailAddress)) {
                    Session::flash('danger', "Email already registered");
                    return redirect("admin/member/add");
                }
            }
            if (!empty($request->phone)) {
                $hasPhone = Admin::where(['phone' => $request->phone])->first(['phone']);
                if (!empty($hasPhone)) {
                    Session::flash('danger', "Phone already registered");
                    return redirect("admin/member/add");
                }
            }
            $newMember = new Admin();
            $newMember->name = $request->name;
            $newMember->phone = $request->phone;
            $newMember->email = $request->email;
            $newMember->password = Hash::make(trim($request->password));
            $newMember->save();
            DB::commit();
            Session::flash('success', "Successfully registered");
            return redirect("admin/member/list");
        } catch (Exception $e) {
            DB::rollback();
            Session::flash('danger', "Registration failed");
            return redirect("admin/member/add");
        }
    }
}
