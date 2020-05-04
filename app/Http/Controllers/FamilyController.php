<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\FamilyDatatable;
use App\Models\Family;
use DB;
use Session;

class FamilyController extends Controller
{
    public function index(FamilyDatatable $dataTable)
    {
    	$data['menu'] = 'family';
    	return $dataTable->with('row_per_page', 10)->render("admin.families.list", $data);
    }

    public function create()
    {
    	$data['menu'] = 'family';
    	return view('admin.families.create', $data);
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'name' => 'required',
    		'mobile' => 'required',
            'amount' => 'required',
            'donation_date' => 'required',
        ]);
    	try {
            DB::beginTransaction();
            $family = new Family();
            $family->name = $request->name;
            $family->mobile = $request->mobile;
            $family->member = $request->member;
            $family->area = $request->area;
            $family->amount = $request->amount;
            $family->donation_date = $request->donation_date;
            $family->in_charge = $request->in_charge;
            $family->status = $request->status;
            $family->save();
            DB::commit();
            Session::flash('success', "Successfully saved");
            return redirect("admin/family/list");
        } catch (Exception $e) {
            DB::rollback();
            Session::flash('danger', "Save failed");
            return redirect("admin/family/add");
        }
    }

    public function edit($id)
    {
    	$data['menu'] = 'family';
    	$data['family'] = Family::find($id);
    	return view('admin.families.edit', $data);
    }

    public function update(Request $request)
    {
    	$family = Family::find($request->id);
    	if (!empty($family)) {
    		$family->name = $request->name;
    		$family->mobile = $request->mobile;
    		$family->member = $request->member;
    		$family->area = $request->area;
    		$family->amount = $request->amount;
    		$family->donation_date = $request->donation_date;
    		$family->in_charge = $request->in_charge;
    		$family->status = $request->status;
    		$family->save();
    	}
    	Session::flash('success', "Successfully Updated");
        return redirect("admin/family/list");
    }

    public function insert()
    {
        $data['menu'] = "family";
        return view('admin.donations.insert', $data);
    }

    public function storeFamilies(Request $request)
    {
    	# code...
    }
}
