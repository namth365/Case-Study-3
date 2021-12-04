<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class ShopController extends Controller
{
    public function index()
    {
      $products = Product::all();
      return view('website.carts.cart', compact('products'));
     }    
   public function erros(){
      $erros = Session::get('erros');
      return view('website.home.404',compact('erros'));
      }
   public function login(){
      return view('website.home.login');
   }

   public function postLogin(Request $request){
      $credentials = $request->only('email','password');
      if(Auth::guard('customer')->attempt($credentials))
      {   
         return redirect()->route('shop.my-account')->with('status','Đăng nhập thành công');
      }
         return redirect()->route('login')->with('status','Đăng nhập không thành công');
   }
   public function my_account(){
      $my_account = Session::get('my-account');
      return view('website.home.my-account',compact('my_account'));
}
   public function product_detail($id){
      $product_detail = Session::get('product_detail');
      return view('website.products.view', compact('product_detail'));
}
   public function products(){
      $products = Product::paginate(10);
      return view('website.products.index', compact('products'));
}
   public function questions(){
      return view('website.home.questions');
}
   public function category($slug){
      $category = Category::where('slug',$slug)->first(); 
      $id_category= $category->id;
      $products = Product::where('category_id',$id_category)->paginate();
      return view('website.products.index', compact('products'));
}
   public function register(){
      
    return view('website.home.register');
   }

   public function postRegister(Request $request){
     
      $request->validate( [ 
         'name' => 'required|max:255',
               'email' => 'required|unique:customers|max:255',
               'phone' => 'required|unique:customers|max:255',
               'address' => 'required|max:255',
               'password' => 'required|confirmed|max:255',
               'password_confirmation' => 'required',
         ],
         [
               'email.unique' => 'Email đã tồn tại',
               'email.required' => 'Phải có email',
               'name.required' => 'Phải có tên',
               'phone.unique' => 'Số điện thoại đã tồn tại',
               'phone.required' => 'Phải có số điện thoại',
               'address.required' => 'Phải có địa chỉ',
               'password.required' => 'Phải có mật khẩu',
               'password.confirmed' => 'Mật khẩu không khớp',
         ]
      );

      $customer = new Customer();
      $customer->name = $request->input('name');
      $customer->email = $request->input('email');
      $customer->phone = $request->input('phone');
      $customer->address = $request->input('address');
      $customer->password = Hash::make($request->input('password'));
      $customer->save();

      return redirect()->route('home')->with('status','Đăng ký thành công');
   }




}