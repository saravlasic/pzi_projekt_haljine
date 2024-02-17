<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Order;



class AdminController extends Controller
{
    public function product(){
        if(Auth::id()){
            if(Auth::user()->usertype=='1'){
                return view('admin.product');
            }else{
                return redirect()->back();
            }
        }else{
            return redirect('login');
        }
        
    }

    public function uploadproduct(Request $request){
        // Provera postojanja datoteke
        if ($request->hasFile('file')) {
            $data = new Product;
    
            $image = $request->file('file');
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->move('productimage', $imagename);
    
            $data->image = $imagename;
            $data->title = $request->title;
            $data->price = $request->price;
            $data->description = $request->description;
    
            $data->save();
    
            return redirect()->back()->with('message', 'Uspješno dodan proizvod!');
        } else {
            return redirect()->back()->with('error', 'Molimo Vas da izaberete datoteku za upload.');
        }
    }

    public function showproduct(){

        $data=product::all();

        return view('admin.showproduct', compact('data'));
    }

    public function deleteproduct($id){
        $data=product::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Uspješno brisanje proizvoda!');
    }

    public function updateview($id){
        $data=product::find($id);
        return view('admin.updateview', compact('data'));
    }

    public function updateproduct(Request $request, $id){

        $data=product::find($id);

        $image = $request->file('file');

        if($image){

        $imagename = time().'.'.$image->getClientOriginalExtension();
        $image->move('productimage', $imagename);
    
        $data->image = $imagename;
        }
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
    
        $data->save();
    
        return redirect()->back()->with('message', 'Uspješno uređen proizvod!');
            

    }

    public function showorder(){

        $order=order::all();

        return view('admin.showorder', compact('order'));
    }

    public function updatestatus($id){

        $order=order::find($id);
        $order->status='Isporučeno';
        $order->save();

        return redirect()->back();

    }
    // u vašem kontroleru
    public function deleteOrder($id) {
        // pronađite narudžbu prema ID-u i obrišite je
        $order = Order::find($id);
        $order->delete();

        // redirectajte natrag na stranicu narudžbi ili gdje želite
        return redirect()->back()->with('success', 'Narudžba uspješno obrisana');
    }


}    
