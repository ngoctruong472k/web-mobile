<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Products;
use App\Manufactures;
use App\Protypes;

class ManufactureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $product = DB::table('products')->join('protypes','products.type_ID','=','protypes.type_ID')->join('manufactures','products.manu_ID','=','manufactures.manu_ID')->paginate(6);
        $manu = Manufactures::all();
        return view('mobileadmin/manufactures',['manufactures'=>$manu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mobileadmin/addmanufacture');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $image = $_FILES['fileUpload']['name'];
        if($image != NULL && $name != NULL){
            $target_dir = "../public/img/";
            $target_file = $target_dir . basename($_FILES['fileUpload']['name']);
            move_uploaded_file($_FILES['fileUpload']['tmp_name'], $target_file);
            DB::table('manufactures')->insert([
                ['manu_name' => $name,'manu_img'=>$image]
            ]);
        }
        $manufacture = DB::table('manufactures')->get();
        return view('mobileadmin/manufactures',['manufactures'=>$manufacture]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $manuf = DB::table('manufactures')->where('manu_ID','=',$id)->get();
        return view('mobileadmin/fixmanufacture',['manuf'=>$manuf]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $image = $_FILES['fileUpload']['name'];
        if($image != NULL){
            $target_dir = "../public/img/";
            $target_file = $target_dir . basename($_FILES['fileUpload']['name']);
            move_uploaded_file($_FILES['fileUpload']['tmp_name'], $target_file);
            DB::table('manufactures')->where('manu_ID','=',$id)->update([
                'manu_name'=>$name,'manu_img'=>$image
            ]);
        }
        else{
            DB::table('manufactures')->where('manu_ID','=',$id)->update([
                'manu_name'=>$name
            ]);
        }
        $manufacture = DB::table('manufactures')->get();
        return view('mobileadmin/manufactures',['manufactures'=>$manufacture]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manufacture = DB::table('manufactures')->get();
        return view('mobileadmin/manufactures',['manufactures'=>$manufacture]);
    }
}
