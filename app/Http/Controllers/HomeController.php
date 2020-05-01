<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	return view('home');
    }

    public function donationList()
    {
    	$data['donation'] = [];
    	return view('donation-list', $data);
    }
    
    public function donatedList()
    {
    	$data['donatedList'] = [
    		["19/04/2020", "Aether", "Ripon (5)", "019-243-26880", "Mirpur", "1530"],
			["20/04/2020","Piyash", "Suleman (6)", "017-188-51796", "Chowrasta, Gazipur", "1530"],
			["20/04/2020", "Nayem", "Mahbub(4)", "018-679-90817", "Barishal", "1530"],
			["25/04/2020", "Saleh", "Ismail Sheikh (7)", "019-045-44834", "Village: Batul Bazar,PO: Uttar Bedkashi,PS: Koyra,Dist: Khulna", "1264"],
			["25/04/2020", "Saleh", "Hazarat Gazi (4)", "No mobile", "Village: Batul Bazar,PO: Uttar Bedkashi,PS: Koyra,Dist: Khulna", "1264"],
			["25/04/2020", "Saleh", "Goffar Gazi (4)", "019-331-50605", "Village: Batul Bazar,PO: Uttar Bedkashi,PS: Koyra,Dist: Khulna", "1264"],
			["25/04/2020", "Saleh", "Kamruzzaman (4)", "019-034-60268", "Village: Batul Bazar,PO: Uttar Bedkashi,PS: Koyra,Dist: Khulna", "1264"],
			["25/04/2020", "Saleh", "Sohrab Gazi (6)", "019-859-78248", "Village: Batul Bazar,PO: Uttar Bedkashi,PS: Koyra,Dist: Khulna", "1264"],
			["25/04/2020", "Saleh", "Sattar Gazi(3)", "019-198-38166", "Village: Batul Bazar,PO: Uttar Bedkashi,PS: Koyra,Dist: Khulna", "1264"],
			["25/04/2020", "Saleh", "Easin Gazi(4)", "019-298-38166", "Village: Batul Bazar,PO: Uttar Bedkashi,PS: Koyra,Dist: Khulna", "1264"],
			["25/04/2020", "Saleh", "Abdus Salam (6)", "019-918-80109", "Village: Batul Bazar,PO: Uttar Bedkashi,PS: Koyra,Dist: Khulna", "1264"],
			["25/04/2020", "Saleh", "Selim Gazi (5)", "019-496-46116", "Village: Batul Bazar,PO: Uttar Bedkashi,PS: Koyra,Dist: Khulna", "1264"],
			["25/04/2020", "Saleh", "Khalek Par (4)", "019-308-85652", "Village: Batul Bazar,PO: Uttar Bedkashi,PS: Koyra,Dist: Khulna", "1264"],
			["25/04/2020", "Saleh", "Ibrahim Sheikh (3)", "019-869-13598", "Village: Batul Bazar,PO: Uttar Bedkashi,PS: Koyra,Dist: Khulna", "1264"],
			["25/04/2020", "Saleh", "Maruf Gazi (4)", "019-024-77183", "Village: Batul Bazar,PO: Uttar Bedkashi,PS: Koyra,Dist: Khulna", "1264"],
			["25/04/2020", "Saleh", "Abdullah Molla (3)", "019-386-14410", "Village: Batul Bazar,PO: Uttar Bedkashi,PS: Koyra,Dist: Khulna", "1264"],
			["25/04/2020", "Saleh", "Said Gazi (4)", "019-565-03970", "Village: Batul Bazar,PO: Uttar Bedkashi,PS: Koyra,Dist: Khulna", "1264"],
			["25/04/2020", "Saleh", "Amirul Islam (3)", "019-765-06809", "Village: Batul Bazar,PO: Uttar Bedkashi,PS: Koyra,Dist: Khulna", "1264"],
			["25/04/2020", "Saleh", "Rayhan (5)", "019-313-70372", "Village: Batul Bazar,PO: Uttar Bedkashi,PS: Koyra,Dist: Khulna", "1264"],
			["25/04/2020", "Saleh", "Shahida Khatun (2)", "No mobile", "Village: Batul Bazar,PO: Uttar Bedkashi,PS: Koyra,Dist: Khulna", "1264"],
			["25/04/2020", "Saleh", "Abdul Mazid (5)", "1988497749", "Village: Batul Bazar,PO: Uttar Bedkashi,PS: Koyra,Dist: Khulna", "1264"],
			["25/04/2020", "Saleh", "Nurul Islam (6)", "1910630606", "Village: Batul Bazar,PO: Uttar Bedkashi,PS: Koyra,Dist: Khulna", "1264"]
    	];
    	return view('donated-list', $data);
    }
}
