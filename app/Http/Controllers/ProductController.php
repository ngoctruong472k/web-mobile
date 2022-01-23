<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Products;
use App\Manufactures;
use App\Protypes;

class ProductController extends Controller
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
        $pag = DB::table('products')->join('protypes','products.type_ID','=','protypes.type_ID')->join('manufactures','products.manu_ID','=','manufactures.manu_ID')->orderBy('ID','DESC')->paginate(4);
        return view('mobileadmin/adminindex',['pag'=>$pag]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manufacture = DB::select('select * from Manufactures');
        $protypes = DB::select('select * from Protypes');
        return view('mobileadmin/form',['manufacture'=>$manufacture, 'protypes'=>$protypes]);   
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
        $image2 = $_FILES['fileUpload2']['name'];
        $image3 = $_FILES['fileUpload3']['name'];
        $image4 = $_FILES['fileUpload4']['name'];
        $description = $request->input('description');
        $price = $request->input('price');
        $manu_ID = $request->input('manu_id');
        $type_ID = $request->input('type_id');
        $target_dir = "../public/img/";
        $target_file = $target_dir . basename($_FILES['fileUpload']['name']);
        move_uploaded_file($_FILES['fileUpload']['tmp_name'], $target_file);
        $target_file = $target_dir . basename($_FILES['fileUpload2']['name']);
        move_uploaded_file($_FILES['fileUpload2']['tmp_name'], $target_file);
        $target_file = $target_dir . basename($_FILES['fileUpload3']['name']);
        move_uploaded_file($_FILES['fileUpload3']['tmp_name'], $target_file);
        $target_file = $target_dir . basename($_FILES['fileUpload4']['name']);
        move_uploaded_file($_FILES['fileUpload4']['tmp_name'], $target_file);
        if($image != NULL && $image2 != NULL && $image3 != NULL && $image4 != NULL && $price != NULL && $name != NULL && $description != NULL && $type_ID != NULL && $manu_ID != NULL){
            DB::table('products')->insert([
                ['name' => $name,'image'=>$image,'image2'=>$image2,'image3'=>$image3,'image4'=>$image4, 'description' => $description, 'price' => $price, 'manu_ID' => $manu_ID, 'type_ID' => $type_ID]
            ]);
        }
        $pag = DB::table('products')->join('protypes','products.type_ID','=','protypes.type_ID')->join('manufactures','products.manu_ID','=','manufactures.manu_ID')->orderBy('ID','DESC')->paginate(4);
        return view('mobileadmin/adminindex',['pag'=>$pag]);
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
        $productf = DB::table('products')->join('protypes','products.type_ID','=','protypes.type_ID')->join('manufactures','products.manu_ID','=','manufactures.manu_ID')->where('products.ID','=',$id)->get();
        $protypef = DB::table('protypes')->get();
        $manuf = DB::table('manufactures')->get();
        
        return view('mobileadmin/fixproduct',['productf'=>$productf,'protypef'=>$protypef,'manuf'=>$manuf]);
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
        $image2 = $_FILES['fileUpload2']['name'];
        $image3 = $_FILES['fileUpload3']['name'];
        $image4 = $_FILES['fileUpload4']['name'];
        $description = $request->input('description');
        $price = $request->input('price');
        $manu_ID = $request->input('manu_id');
        $type_ID = $request->input('type_id');
        $target_dir = "../public/img/";
        $target_file = $target_dir . basename($_FILES['fileUpload']['name']);
        $target_file2 = $target_dir . basename($_FILES['fileUpload2']['name']);
        $target_file3 = $target_dir . basename($_FILES['fileUpload3']['name']);
        $target_file4 = $target_dir . basename($_FILES['fileUpload4']['name']);
        move_uploaded_file($_FILES['fileUpload']['tmp_name'], $target_file);
        move_uploaded_file($_FILES['fileUpload2']['tmp_name'], $target_file2);
        move_uploaded_file($_FILES['fileUpload3']['tmp_name'], $target_file3);
        move_uploaded_file($_FILES['fileUpload4']['tmp_name'], $target_file4);
        if($image != NULL && $image2 != NULL && $image3 != NULL && $image4 != NULL){
            DB::table('products')->where('ID','=',$id)->update([
                'name' => $name,'image'=>$image,'image2'=>$image2,'image3'=>$image3,'image4'=>$image4, 'description' => $description, 'price' => $price, 'manu_ID' => $manu_ID, 'type_ID' => $type_ID
            ]);
        }
        else if($image == NULL && $image2 == NULL && $image3 == NULL && $image4 == NULL){
            DB::table('products')->where('ID','=',$id)->update([
                'name' => $name, 'description' => $description, 'price' => $price, 'manu_ID' => $manu_ID, 'type_ID' => $type_ID
            ]);
        }
        else if($image != NULL && $image2 == NULL && $image3 == NULL && $image4 == NULL){
            DB::table('products')->where('ID','=',$id)->update([
                'name' => $name,'image'=>$image, 'description' => $description, 'price' => $price, 'manu_ID' => $manu_ID, 'type_ID' => $type_ID
            ]);
        }
        else if($image == NULL && $image2 != NULL && $image3 == NULL && $image4 == NULL){
            DB::table('products')->where('ID','=',$id)->update([
                'name' => $name,'image2'=>$image2, 'description' => $description, 'price' => $price, 'manu_ID' => $manu_ID, 'type_ID' => $type_ID
            ]);
        }
        else if($image == NULL && $image2 == NULL && $image3 != NULL && $image4 == NULL){
            DB::table('products')->where('ID','=',$id)->update([
                'name' => $name,'image3'=>$image3, 'description' => $description, 'price' => $price, 'manu_ID' => $manu_ID, 'type_ID' => $type_ID
            ]);
        }
        else if($image == NULL && $image2 == NULL && $image3 == NULL && $image4 != NULL){
            DB::table('products')->where('ID','=',$id)->update([
                'name' => $name,'image4'=>$image4, 'description' => $description, 'price' => $price, 'manu_ID' => $manu_ID, 'type_ID' => $type_ID
            ]);
        }
        else if($image == NULL && $image2 != NULL && $image3 != NULL && $image4 != NULL){
            DB::table('products')->where('ID','=',$id)->update([
                'name' => $name,'image2'=>$image2,'image3'=>$image3,'image4'=>$image4, 'description' => $description, 'price' => $price, 'manu_ID' => $manu_ID, 'type_ID' => $type_ID
            ]);
        }
        else if($image != NULL && $image2 == NULL && $image3 != NULL && $image4 != NULL){
            DB::table('products')->where('ID','=',$id)->update([
                'name' => $name,'image'=>$image,'image3'=>$image3,'image4'=>$image4, 'description' => $description, 'price' => $price, 'manu_ID' => $manu_ID, 'type_ID' => $type_ID
            ]);
        }
        else if($image != NULL && $image2 != NULL && $image3 == NULL && $image4 != NULL){
            DB::table('products')->where('ID','=',$id)->update([
                'name' => $name,'image'=>$image,'image2'=>$image2,'image4'=>$image4, 'description' => $description, 'price' => $price, 'manu_ID' => $manu_ID, 'type_ID' => $type_ID
            ]);
        }
        else if($image != NULL && $image2 != NULL && $image3 != NULL && $image4 == NULL){
            DB::table('products')->where('ID','=',$id)->update([
                'name' => $name,'image'=>$image,'image2'=>$image2,'image3'=>$image3, 'description' => $description, 'price' => $price, 'manu_ID' => $manu_ID, 'type_ID' => $type_ID
            ]);
        }
        else if($image == NULL && $image2 == NULL && $image3 != NULL && $image4 != NULL){
            DB::table('products')->where('ID','=',$id)->update([
                'name' => $name,'image3'=>$image3,'image4'=>$image4, 'description' => $description, 'price' => $price, 'manu_ID' => $manu_ID, 'type_ID' => $type_ID
            ]);
        }
        else if($image == NULL && $image2 != NULL && $image3 == NULL && $image4 != NULL){
            DB::table('products')->where('ID','=',$id)->update([
                'name' => $name,'image2'=>$image2,'image4'=>$image4, 'description' => $description, 'price' => $price, 'manu_ID' => $manu_ID, 'type_ID' => $type_ID
            ]);
        }
        else if($image == NULL && $image2 != NULL && $image3 != NULL && $image4 == NULL){
            DB::table('products')->where('ID','=',$id)->update([
                'name' => $name,'image2'=>$image2,'image3'=>$image3, 'description' => $description, 'price' => $price, 'manu_ID' => $manu_ID, 'type_ID' => $type_ID
            ]);
        }
        else if($image != NULL && $image2 == NULL && $image3 == NULL && $image4 != NULL){
            DB::table('products')->where('ID','=',$id)->update([
                'name' => $name,'image'=>$image,'image4'=>$image4, 'description' => $description, 'price' => $price, 'manu_ID' => $manu_ID, 'type_ID' => $type_ID
            ]);
        }
        else if($image != NULL && $image2 == NULL && $image3 != NULL && $image4 == NULL){
            DB::table('products')->where('ID','=',$id)->update([
                'name' => $name,'image'=>$image,'image3'=>$image3, 'description' => $description, 'price' => $price, 'manu_ID' => $manu_ID, 'type_ID' => $type_ID
            ]);
        }
        else if($image != NULL && $image2 != NULL && $image3 == NULL && $image4 == NULL){
            DB::table('products')->where('ID','=',$id)->update([
                'name' => $name,'image'=>$image,'image2'=>$image2,'description' => $description, 'price' => $price, 'manu_ID' => $manu_ID, 'type_ID' => $type_ID
            ]);
        }
        $pag = DB::table('products')->join('protypes','products.type_ID','=','protypes.type_ID')->join('manufactures','products.manu_ID','=','manufactures.manu_ID')->paginate(6);
        header('location:/nhom3/public/admin/product');
	    exit;
        return view('mobileadmin/adminindex',['pag'=>$pag]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('products')->where('ID','=',$id)->delete();
        $pag = DB::table('products')->join('protypes','products.type_ID','=','protypes.type_ID')->join('manufactures','products.manu_ID','=','manufactures.manu_ID')->orderBy('ID','DESC')->paginate(6);
        header('location:/nhom3/public/admin/product');
	    exit;
        return view('mobileadmin/adminindex',['pag'=>$pag]);
    }
    
    public function productAjax($id)
    {
        $product = Product::find($id);
        return $product;
    }
}