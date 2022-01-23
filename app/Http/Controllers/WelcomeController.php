<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;
use App\Products;
use App\Protypes;
use App\Manufactures;
use Illuminate\Database\Eloquent\Concerns\QueriesRelationships;

class WelcomeController extends Controller
{
    //
    public function index($id = 'index'){
        $user = Request::session()->get('user');
        $manufacture = DB::select('select * from Manufactures');
        $protypes = DB::select('select * from Protypes');
        $topsell = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID` ORDER BY `products`.`price` DESC LIMIT 3');
        $topsell2 = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID` ORDER BY `products`.`price` DESC');
        $productandtype = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID`');
        $cartByID = DB::select('select * from Cart where user_id = "'.$user.'"');
        $page = DB::table('products')->join('protypes','products.type_ID','=','protypes.type_ID')->orderBy('ID','DESC')->paginate(4);
        $pag = DB::table('products')->join('protypes','products.type_ID','=','protypes.type_ID')->join('manufactures','products.manu_ID','=','manufactures.manu_ID')->orderBy('ID','DESC')->paginate(6);
        
        return view($id,['pag' => $pag,'page' => $page,'cartByID'=>$cartByID,'topsell2'=>$topsell2,'topsell'=>$topsell,'products'=>$productandtype,'protypes'=>$protypes,'manufacture'=>$manufacture,]);
    }
    public function adminview($id = 'adminindex'){
        $user = Request::session()->get('user');
        $manufacture = DB::select('select * from Manufactures');
        $protypes = DB::select('select * from Protypes');
        $topsell = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID` ORDER BY `products`.`price` DESC LIMIT 3');
        $topsell2 = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID` ORDER BY `products`.`price` DESC');
        $productandtype = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID`');
        $cartByID = DB::select('select * from Cart where user_id = "'.$user.'"');
        $page = DB::table('products')->join('protypes','products.type_ID','=','protypes.type_ID')->paginate(4);
        $pag = DB::table('products')->join('protypes','products.type_ID','=','protypes.type_ID')->join('manufactures','products.manu_ID','=','manufactures.manu_ID')->orderBy('ID','DESC')->paginate(4);
        
        return view('mobileadmin/'.$id,['pag' => $pag,'page' => $page,'cartByID'=>$cartByID,'topsell2'=>$topsell2,'topsell'=>$topsell,'products'=>$productandtype,'protypes'=>$protypes,'manufacture'=>$manufacture,]);
    }
    public function product($id = 1){
        $user = Request::session()->get('user');
        $protypes = DB::select('select * from Protypes');
        $productsByID = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID` AND `products`.`ID` = '.$id);
        $productByType = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID` AND `protypes`.`type_name` = "Smartphone" ORDER BY `products`.`ID` DESC LIMIT 4');
        $cartByID = DB::select('select * from Cart where user_id = "'.$user.'"');
        return view('product',['cartByID'=>$cartByID,'productsByID'=>$productsByID,'productByType'=>$productByType,'protypes'=>$protypes]);
    }
    public function type($id){
        $user = Request::session()->get('user');
        $topsell = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID` ORDER BY `products`.`price` DESC LIMIT 3');
        $manufacture = DB::select('select * from Manufactures');
        $protypes = DB::select('select * from Protypes');
        $cartByID = DB::select('select * from Cart where user_id = "'.$user.'"');
        $products = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID` AND `products`.`type_ID` = '.$id);
        return view('producttype',['cartByID'=>$cartByID,'topsell'=>$topsell,'protypes'=>$protypes,'products'=>$products,'manufacture'=>$manufacture]);
    }
    public function register(){
        $manufacture = DB::select('select * from Manufactures');
        $protypes = DB::select('select * from Protypes');
        $topsell = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID` ORDER BY `products`.`price` DESC LIMIT 3');
        $topsell2 = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID` ORDER BY `products`.`price` DESC');
        $productandtype = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID`');
        $user = Request::input('user');
        $pass = Request::input('pass');
        $passconfirm = Request::input('passconfirm');
        if($user != NULL && $pass != NULL && $passconfirm != NULL){
            if($pass == $passconfirm){
                DB::table('user')->insert([
                    ['user_id'=>$user,'password'=>$pass,'permission'=>0]
                ]);
                return view('uslogin',['topsell2'=>$topsell2,'topsell'=>$topsell,'products'=>$productandtype,'protypes'=>$protypes,'manufacture'=>$manufacture]);
            }
            else{
                return view('usregister',['topsell2'=>$topsell2,'topsell'=>$topsell,'products'=>$productandtype,'protypes'=>$protypes,'manufacture'=>$manufacture]);
            }
        }
    }
    public function admin(){
        $user = Request::session()->get('user');
        $manufacture = DB::select('select * from Manufactures');
        $protypes = DB::select('select * from Protypes');
        $topsell = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID` ORDER BY `products`.`price` DESC LIMIT 3');
        $topsell2 = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID` ORDER BY `products`.`price` DESC');
        $productandtype = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID`');
        $cartByID = DB::select('select * from Cart where user_id = "'.$user.'"');
        $userData = DB::select('select * from User');
        $name = Request::input('user');
        $pass = Request::input('pass');
        $page = DB::table('products')->join('protypes','products.type_ID','=','protypes.type_ID')->join('manufactures','products.manu_ID','=','manufactures.manu_ID')->orderBy('ID','DESC')->paginate(6);
        
        $gu = 0;
        foreach($userData as $value) {
            if($name == $value->user_id && $pass == $value->password){
                if($value->permission == 0){
                    return view('userindex',['cartByID'=>$cartByID,'topsell2'=>$topsell2,'topsell'=>$topsell,'products'=>$productandtype,'protypes'=>$protypes,'manufacture'=>$manufacture]);
                    $gu++;
                }
            }
        }
        if($gu == 0){
            return view('uslogin',['cartByID'=>$cartByID,'topsell2'=>$topsell2,'topsell'=>$topsell,'products'=>$productandtype,'protypes'=>$protypes,'manufacture'=>$manufacture]);
        }
    }
    public function logout(){
        $user = Request::session()->get('user');
        $cartByID = DB::select('select * from Cart where user_id = "'.$user.'"');
        $manufacture = DB::select('select * from Manufactures');
        $protypes = DB::select('select * from Protypes');
        $topsell = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID` ORDER BY `products`.`price` DESC LIMIT 3');
        $topsell2 = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID` ORDER BY `products`.`price` DESC');
        $productandtype = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID`');
        Request::session()->flush();
        return view('index',['cartByID'=>$cartByID,'topsell2'=>$topsell2,'topsell'=>$topsell,'products'=>$productandtype,'protypes'=>$protypes,'manufacture'=>$manufacture]);
    }
    public function addcart($id){
        $sl = 1;
        $ic = 0;
        $user = Request::session()->get('user');
        $manufacture = DB::select('select * from Manufactures');
        $protypes = DB::select('select * from Protypes');
        $topsell = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID` ORDER BY `products`.`price` DESC LIMIT 3');
        $topsell2 = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID` ORDER BY `products`.`price` DESC');
        $productandtype = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID`');
        $productsByID = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID` AND `products`.`ID` = '.$id);
        $cart = DB::select('select * from Cart');
        $cartByID = DB::select('select * from Cart where user_id = "'.$user.'"');
        foreach($cart as $value){
            if($user == $value->user_id && $id == $value->sp_id){
                $sl += $value->sp_sl;
                foreach($productsByID as $value){
                    DB::table('cart')->where(['user_id' => $user, 'sp_id' => $id])->update([
                        'sp_price' => $value->price*$sl, 'sp_sl' => $sl
                    ]);
                    return view('userindex',['cartByID'=>$cartByID,'topsell2'=>$topsell2,'topsell'=>$topsell,'products'=>$productandtype,'protypes'=>$protypes,'manufacture'=>$manufacture]);
                }
                $ic++;
            }
        }
        if($ic == 0){
            foreach($productsByID as $value){
                DB::table('cart')->insert([
                    ['user_id' => $user, 'sp_id' => $value->ID, 'sp_image' => $value->image,'sp_name' => $value->name, 'sp_price' => $value->price, 'sp_sl' => $sl]
                ]);
                return view('userindex',['cartByID'=>$cartByID,'topsell2'=>$topsell2,'topsell'=>$topsell,'products'=>$productandtype,'protypes'=>$protypes,'manufacture'=>$manufacture]);
            }
        }
    }
    public function delete($id){
        $user = Request::session()->get('user');
        $manufacture = DB::select('select * from Manufactures');
        $protypes = DB::select('select * from Protypes');
        $topsell = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID` ORDER BY `products`.`price` DESC LIMIT 3');
        $topsell2 = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID` ORDER BY `products`.`price` DESC');
        $productandtype = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID`');
        $productsByID = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID` AND `products`.`ID` = '.$id);
        $cart = DB::select('select * from Cart');
        $cartByID = DB::select('select * from Cart where user_id = "'.$user.'"');
        DB::table('cart')->where(['user_id' => $user, 'sp_id' => $id])->delete();
        return view('userindex',['cartByID'=>$cartByID,'topsell2'=>$topsell2,'topsell'=>$topsell,'products'=>$productandtype,'protypes'=>$protypes,'manufacture'=>$manufacture]);
    }
    public function find(){
        $keyf = Request::input('keyf');
        $user = Request::session()->get('user');
        $manufacture = DB::select('select * from Manufactures');
        $protypes = DB::select('select * from Protypes');
        $topsell = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID` ORDER BY `products`.`price` DESC LIMIT 3');
        $topsell2 = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID` ORDER BY `products`.`price` DESC');
        $productandtype = DB::select('SELECT * FROM products,protypes WHERE `products`.`type_ID` = `protypes`.`type_ID`');
        $cartByID = DB::select('select * from Cart where user_id = "'.$user.'"');
        $keyfind = DB::table('products')->join('protypes','products.type_ID','=','protypes.type_ID')->where('products.name','like','%'.$keyf.'%')->get();
        return view('find',['keyfind' => $keyfind,'cartByID'=>$cartByID,'topsell2'=>$topsell2,'topsell'=>$topsell,'products'=>$productandtype,'protypes'=>$protypes,'manufacture'=>$manufacture]);
    }

    public function productAjax($id)
    {
        $product = Product::find($id);
        return $product;
    }
}
