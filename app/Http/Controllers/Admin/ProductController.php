<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::paginate(10);
        $search = $request->search;
        $category_id = $request->category_id;

        $products = Product::select('*');

        if ($category_id ){
            $products = $products->where('category_id',$category_id); 
        }

        if ($search ){
            $products = $products->where('name','like','%'.$search.'%'); 
        }

        $products = $products->paginate(10);

        $categories = Category::All();
        return view ('admin.products.index', compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::orderBy('id', 'desc')->get();
        return view('admin.products.create',compact('category'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|unique:products|max:255',
                'sold' => 'required|max:255',
                'price' => 'required|max:255',
                'description' => 'required|max:255'
            ],
            [
                'name.unique' => 'Tên sản phẩm đã có ',
                'name.required' => 'Phải có tên sản phẩm',
                'sold.required' => 'Phải có số lượng',
                'price.required' => 'Phải có giá',
                'description.required' => 'Phải có tên mô tả',
            ]
        );
        $product = new Product();
        $product->name = $request->input('name');
        $product->slug = Str::slug($product->name,'-');
        $product->sold = $request->input('sold');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->image = $request->input('image');
        $product->status = $request->input('status');
        $product->category_id = $request->input('category_id');

        if ($request->hasFile('image'))
        {
            $get_image          = $request->image;
            $path               ='storage/app/public/images/';
            $get_name_image     = $get_image->getClientOriginalName();
            $name_image         = current(explode('.', $get_name_image));
            $new_image          = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $product->image       = $new_image;
        }

        $product->save();

        // Session::flash('success', 'Tạo mới thể loại thành công');
        return redirect()->route('products.index')->with('status','Tạo mới sản phẩm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo __METHOD__; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $product = Product::find($id);
        $category = Category::orderBy('id', 'DESC')->get();
        return view('admin.products.edit',compact('product','category'));
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
        $request->validate(
            [
                'name' => 'required|unique:products,name,'.$id.'|max:255',
                'sold' => 'required|max:255',
                'price' => 'required|max:255',
                'description' => 'required|max:255',
            ],
            [
                'name.unique' => 'Tên sản phẩm đã có ',
                'name.required' => 'Phải có tên sản phẩm',
                'sold.required' => 'Phải có số lượng',
                'price.required' => 'Phải có giá',
                'description.required' => 'Phải có tên mô tả',
            ]
        );
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->slug = Str::slug($product->name,'-');
        $product->sold = $request->input('sold');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
       
        $product->status = $request->input('status');
        $product->category_id = $request->input('category_id');

        $get_image = $request->image;
        if ($request->hasFile('image')) {
            $path ='storage/app/public/images/'.$product->image;
            $path ='storage/app/public/images/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
            $product->image = $new_image;
            $data['product_image'] =$new_image;
        }

        $product->save();

        Session::flash('success', 'Cập nhật thành công');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        Session::flash('success', 'Xóa thành công');
        return redirect()->route('products.index');
    }
}
