<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\DonationDatatable;
use App\Models\Donation;
use DB;
use Session;

class DonationController extends Controller
{
    public function index(DonationDatatable $dataTable)
    {
    	$data['menu'] = 'donation';
    	return $dataTable->with('row_per_page', 10)->render("admin.donations.list", $data);
    }

    public function create()
    {
    	$data['menu'] = 'donation';
    	return view('admin.donations.create', $data);
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'mobile' => 'required',
            'amount' => 'required',
            'donation_date' => 'required',
        ]);
        try {
            DB::beginTransaction();
            $donation = new Donation();
            $donation->mobile = $request->mobile;
            $donation->amount = $request->amount;
            $donation->method = $request->method;
            $donation->trx = $request->trx;
            $donation->donation_date = $request->donation_date;
            $donation->save();
            DB::commit();
            Session::flash('success', "Successfully saved");
            return redirect("admin/donation/list");
        } catch (Exception $e) {
            DB::rollback();
            Session::flash('danger', "Save failed");
            return redirect("admin/donation/add");
        }
    }
}
