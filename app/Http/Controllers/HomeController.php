<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\View;


class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1'){
            return view('admin.home');
        }

        else{

            $data = Product::paginate(6);

            $user=auth()->user();

            $count=cart::where('phone',$user->phone)->count();

            return view('user.home', compact('data', 'count'));
        }

    }

    public function index(){
        if(Auth::id()){
            return redirect('redirect');
        }else{

            $data = Product::paginate(6);

            return view('user.home', compact('data'));
        }
        
    }

    public function search(Request $request){
        $search = $request->search;
    
        if ($search == '') {
            $data = Product::paginate(6);
        } else {
            $data = Product::where('title', 'like', '%' . $search . '%')->get();
        }
    
        // Dodajte provjeru za prijavljenog korisnika
        $count = 0;
        if (auth()->check()) {
            $user = auth()->user();
            // Dohvati broj proizvoda u košarici ako je korisnik prijavljen
            $count = Cart::where('phone', $user->phone)->count();
        }
    
        return view('user.home', compact('data', 'count'));
    }
    

    public function addcart(Request $request, $id){

        if(Auth::id()){
            $user=auth()->user();
            $product=product::find($id);

            $cart=new cart;
            $cart->name=$user->name;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->product_title=$product->title;
            $cart->price=$product->price;

            $cart->save();
            

            return redirect()->back()->with('message', 'Uspješno dodan proizvod!');
        }else{
            return redirect('login');
        }

    }

    public function showcart(){
        $user=auth()->user();
        $cart=cart::where('phone',$user->phone)->get();
        $count=cart::where('phone',$user->phone)->count();
        return view('user.showcart',compact('count','cart'));
    }

    public function deletecart($id){

        $data=cart::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Uspješno uklonjen proizvod!');

    }

    public function confirmorder(Request $request){
        $user=auth()->user();

        $name=$user->name;
        $phone=$user->phone;
        $address=$user->address;

        foreach($request->productname as $key=>$productname){

            $order=new order;

            $order->product_name=$request->productname[$key];
            $order->price=$request->price[$key];

            $order->name=$name;
            $order->phone=$phone;
            $order->address=$address;

            $order->status='Nije isporučeno';

            $order->save();

        }
        DB::table('carts')->where('phone',$phone)->delete();
        return redirect()->back()->with('message', 'Narudžba uspješna!');
        
    }
    public function aboutUs()
    {

        return View::make('user.aboutus');
    }
    public function home()
    {

        return View::make('user.home');
    }
    public function contact()
    {

        return View::make('user.contact');
    }
    
}
