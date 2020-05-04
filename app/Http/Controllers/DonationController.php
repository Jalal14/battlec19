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

    public function edit($id)
    {
        $data['menu'] = 'donation';
        $data['donation'] = Donation::find($id);
        return view('admin.donations.edit', $data);
    }

    public function update(Request $request)
    {
        $donation = Donation::find($request->id);
        if ($donation) {
            $donation->mobile = $request->mobile;
            $donation->amount = $request->amount;
            $donation->trx = $request->trx;
            $donation->method = $request->method;
            $donation->donation_date = $request->donation_date;
            $donation->save();
        }
        return redirect('admin/donation/list');
    }

    public function insert()
    {
        $data['menu'] = "donation";
        return view('admin.donations.insert', $data);
    }

    public function storeDonations(Request $request)
    {
        $file = $request->file('csv');
        if ($request->hasFile('csv')) { 
            try {
                DB::beginTransaction();
                $path = $request->file('csv')->getRealPath();
                $csv = array_map('str_getcsv', file($path));
                $unMatch = [];
                $data = [];
                foreach ($csv as $key => $value) {
                    if ($key != 0) {
                        $data[$key]['mobile'] = trim($value[0]);
                        $data[$key]['amount'] = trim($value[1]);
                    }
                }
                if (count($data) > 0) {
                    DB::table('donations')->insert($data);
                    DB::commit();
                    Session::flash("success", "Data successfully saved.");
                } else {
                    Session::flash("danger", "Please check data and try again.");
                }
            } catch (Exception $e) {
                DB::rollback();
                Session::flash("danger", "Save failed, Please reload and try again.");
            }
        }
        else {
            Session::flash("danger", "Please check data and try again.");
        }
        return redirect('admin/dashboard');
    }
}
