<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SupplierController extends Controller
{
/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $supplier = DB::table('supplier')->get();

        return view('supplier/index',compact('supplier'));
    }
        public function create(Request $request)
    {
        DB::table('supplier')->insert([
            'name' => $request->name,
            'nomor_telpon' => $request->nomor_telpon,
            'alamat' => $request -> alamat
        ]);

        return redirect()->back()->with('masuk','Data Berhasil Di Input');
    }
}
