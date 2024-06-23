<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\marqueetext;
use App\Models\Products;
use App\Models\ShippingCharges;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function add_category()
    {
        $user = \request('id');

        $admin = Admin::where('id',$user)->first();

//        dd($admin);
        $category = Category::get();

        return view('Category.addCategory',['id'=>$user,'admin'=>$admin,'category'=>$category]);
    }

    public function insert_category(Request $request)
    {
        $pic = $request->file('image');
        if ($pic) {
            $originalname = $pic->getClientOriginalName();
            $path = $pic->storeAs('public/category', $originalname);
            $path = str_replace('public/', '', $path);
            $path2 = $pic->storeAs('category', $originalname, 'shared');

            Category::create([
                'name' => $request->input('name'),
                'image' => $path,
                'status' => $request->input('age_select')
            ]);

            return redirect()->back();
        }
    }

    public function display_category()
    {
        $user = \request('id');

        $category = Category::get();

        $admin = Admin::where('id',$user)->first();

        return view('Category.displayCategory',['id'=>$user,'category'=>$category,'admin'=>$admin]);
    }

    public function update_category()
    {
        $user = \request('id');

        $updateCategory = \request('category');

        $category = Category::find($updateCategory);

        $admin = Admin::where('id',$user)->first();

        return view('Category.updateCategory',['id'=>$user,'category'=>$category,'admin'=>$admin]);
    }

    public function category_update(Request $request)
    {
        $pic = $request->file('image');
        $categoryId = $request->input('category_id');
        if ($pic) {
            $originalname = $pic->getClientOriginalName();

            $category = Category::find($categoryId);

            if ($category && $category->image) {
                Storage::delete('public/' . $category->image);
                Storage::disk('shared')->delete('public/' . $category->image);
            }

            $path = $pic->storeAs('public/category', $originalname);
            $path = str_replace('public/', '', $path);
            $path2 = $pic->storeAs('category', $originalname, 'shared');


            $category->update([
                'image' => $path,
            ]);

            return redirect()->back();
        }

        Category::where('id',$categoryId)->update([
            'name' => $request->input('name'),
            'status' => $request->input('age_select')
        ]);

        return redirect()->back();

    }

    public function delete_category(Request $request)
    {
        $category = $request->input('category');

        Category::where('id',$category)->delete();

        return redirect()->back();
    }

    public function add_product()
    {
        $user = \request('id');

        $category = Category::get();

        $admin = Admin::where('id',$user)->first();

        return view('Products.addProducts',['id'=>$user,'category'=>$category,'admin'=>$admin]);
    }

    public function insert_product(Request $request)
    {
        $pic = $request->file('image');

        if ($pic) {
            $originalname = $pic->getClientOriginalName();
            $path = $pic->storeAs('public/products', $originalname);
            $path = str_replace('public/', '', $path);
            $path2 = $pic->storeAs('products', $originalname, 'shared');

            Products::create([
                'name'=>$request->input('name'),
                'description'=>$request->input('description'),
                'price'=>$request->input('price'),
                'image'=>$path,
                'stock'=>$request->input('stock'),
                'category'=>$request->input('category'),
                'cartoonqty'=>$request->input('cartoonqty'),
                'cartoonprice'=>$request->input('catroonprice')
            ]);

            return redirect()->back();
        }
    }

    public function display_products()
    {
        $user = \request('id');

        $category = Products::get();

        $catagory = Category::get();

        $admin = Admin::where('id',$user)->first();

        return view('Products.displayProducts',['id'=>$user,'category'=>$category,'catagory'=>$catagory,'admin'=>$admin]);
    }

    public function apply_discount(Request $request)
    {
        Products::where('id',$request->input('category_id'))->update([
            'discount' => $request->input('discount'),
            'price'=> $request->input('new_price'),
            'previous_price' => $request->input('previous_price')
        ]);

        return redirect()->back();
    }

    public function update_products(Request $request)
    {
        Products::where('id',$request->input('prod_id'))->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
            'category' => $request->input('category'),
            'cartoonqty'=>$request->input('cartoonqty'),
            'cartoonprice'=>$request->input('catroonprice')

        ]);

        $pic = $request->file('image');

        $categoryId = $request->input('prod_id');
        if ($pic) {
            $originalname = $pic->getClientOriginalName();

            $category = Products::find($categoryId);

            if ($category && $category->image) {
                Storage::delete('public/' . $category->image);
                Storage::disk('shared')->delete('public/' . $category->image);
            }

            $path = $pic->storeAs('public/product', $originalname);
            $path = str_replace('public/', '', $path);
            $path2 = $pic->storeAs('product', $originalname, 'shared');


            $category->update([
                'image' => $path,
            ]);

            return redirect()->back();
        }

        return redirect()->back();
    }

    public function delete_product(Request $request)
    {
        $category = $request->input('category');

        Products::where('id',$category)->delete();

        return redirect()->back();
    }

    public function cutomer_info()
    {
        $user = \request('id');

        $customers = DB::table('users')
            ->join('customer__infos', 'users.id', '=', 'customer__infos.id')
            ->where('users.roles', 'users')
            ->select('customer__infos.*', 'users.id as user_id','users.*')
            ->get();

        $admin = Admin::where('id',$user)->first();

        return view('User.customer-info',['id'=>$user,'customer'=>$customers,'admin'=>$admin]);
    }

    public function depo_info()
    {
        $user = \request('id');

        $customers = DB::table('users')
            ->join('depo_infos', 'users.id', '=', 'depo_infos.id')
            ->where('users.roles', 'depo')
            ->select('depo_infos.*', 'users.id as user_id','users.*')
            ->get();

        $admin = Admin::where('id',$user)->first();

        return view('User.depo-info',['id'=>$user,'customer'=>$customers,'admin'=>$admin]);
    }

    public function depo_status_update(Request $request)
    {
        DB::table('depo_infos')->where('id',$request->input('prod_id'))->update([
            'action'=>$request->input('category_id')
        ]);

        return redirect()->back();
    }

    public function customer_shipping()
    {
        $user = \request('id');

        $customers = ShippingCharges::where('roles','users')->get();

        $admin = Admin::where('id',$user)->first();

        return view('Shipping.customer-shipping',['id'=>$user,'category'=>$customers,'admin'=>$admin]);
    }

    public function insert_shipping(Request $request)
    {
        if ($request->input('role')=='users'){
            ShippingCharges::create([
                'places'=>$request->input('category_id'),
                'price'=>$request->input('previous_price'),
                'roles'=>$request->input('role'),
            ]);
        }
        elseif ($request->input('role')=='depo'){
            ShippingCharges::create([
                'places'=>$request->input('category_id'),
                'price'=>$request->input('previous_price'),
                'roles'=>$request->input('role'),
            ]);
        }

        return redirect()->back();
    }

    public function update_shipping(Request $request)
    {

        ShippingCharges::where('id',$request->input('prod_id'))->update([
            'places'=>$request->input('category'),
            'price'=>$request->input('price'),

        ]);


        return redirect()->back();
    }

    public function depo_shipping()
    {
        $user = \request('id');

        $customers = ShippingCharges::where('roles','depo')->get();

        $admin = Admin::where('id',$user)->first();

        return view('Shipping.depo-shipping',['id'=>$user,'category'=>$customers,'admin'=>$admin]);
    }

    public function customer_order()
    {
        $user = \request('id');

        $order = DB::table('orders as o1')
            ->where('o1.order_status', 'Processing')

            ->where('o1.roles', 'users')
            ->join('customer__infos as ci', 'ci.id', '=', 'o1.user_id')
            ->distinct()
            ->get();


        $product = DB::table('orders as o1')->where('o1.order_status', 'Processing')

            ->join('products as p1','p1.id', '=', 'o1.product_id')
        ->get();

        $admin = Admin::where('id',$user)->first();

        return view('Order.customer-order',['id'=>$user,'category'=>$order,'products'=>$product,'admin'=>$admin]);
    }

    public function depo_order()
    {
        $user = \request('id');
        $depo = DB::table('users')->find($user);
        $order = DB::table('orders as o1')
            ->where('o1.order_status', 'Processing')
            ->where('o1.roles', 'depo')
            ->join('users as ci', 'ci.id', '=', 'o1.user_id')
            ->get();


        $product = DB::table('orders as o1')->where('o1.order_status', 'Processing')
            ->join('products as p1','p1.id', '=', 'o1.product_id')
            ->get();

        $admin = Admin::where('id',$user)->first();

        return view('Order.depo-order',['id'=>$user,'category'=>$order,'products'=>$product,'admin'=>$admin]);
    }

    public function update_delivary(Request $request)
    {
        DB::table('orders')->where('invoice_id',$request->input('prod_id'))->update([
            'delivery_date' => $request->input('delivery_date'),
            'order_status' =>'Shipping'
        ]);

        return redirect()->back();
    }

    public function invoice()
    {
        $invoice = \request('id');

        $now = Carbon::now('Asia/Dhaka');
        $role = DB::table('orders')->where('invoice_id',$invoice)->first();
        if ($role->roles == 'users') {
            $infos = DB::table('orders')->where('invoice_id', $invoice)
                ->join('products', 'orders.product_id', '=', 'products.id')
                ->select('orders.*', 'orders.price as total_price', 'products.*', 'products.price as price')
                ->get();
        }
        else{
            $infos = DB::table('orders')->where('invoice_id', $invoice)
                ->join('products', 'orders.product_id', '=', 'products.id')
                ->select('orders.*', 'orders.price as total_price', 'products.*', 'products.cartoonprice as price')
                ->get();
        }
        if ($role->roles == 'users') {
            $customer = DB::table('orders')->where('invoice_id', $invoice)
                ->join('customer__infos', 'orders.user_id', '=', 'customer__infos.id')
                ->select('orders.*', 'customer__infos.*')
                ->first();
        }
        else{
            $customer = DB::table('orders')->where('invoice_id', $invoice)

                ->join('depo_infos', 'orders.user_id', '=', 'depo_infos.id')
                ->select('orders.*','depo_infos.*')
                ->first();
        }
        $shippingDhaka = ShippingCharges::where('roles','users')->where('places','Dhaka')->first();
        $shippingOther = ShippingCharges::where('roles','users')->where('places','!=','Dhaka')->first();



        return view('Order.invoice',['infos'=>$infos,'customer'=>$customer,
            'shippingDhaka'=>$shippingDhaka,'shippingOther'=>$shippingOther,'date'=>$now,'roles'=>$role]);
    }

    public function customer_delivery()
    {
        $user = \request('id');

        $order = DB::table('orders as o1')
            ->whereIn('o1.order_status', ['Shipping','Delivered'])
            ->where('o1.roles', 'users')
            ->join('customer__infos as ci', 'ci.id', '=', 'o1.user_id')
            ->distinct()
            ->get();

        $product = DB::table('orders as o1')->whereIn('o1.order_status', ['Shipping','Delivered'])
            ->join('products as p1','p1.id', '=', 'o1.product_id')
            ->get();
        $admin = Admin::where('id',$user)->first();

        return view('Order.customer-delivery',['id'=>$user,'category'=>$order,'products'=>$product,'admin'=>$admin]);
    }

    public function depo_delivery()
    {
        $user = \request('id');

        $order = DB::table('orders as o1')
            ->whereIn('o1.order_status', ['Shipping','Delivered'])
            ->where('o1.roles', 'depo')
            ->join('users as ci', 'ci.id', '=', 'o1.user_id')
            ->distinct()
            ->get();

        $product = DB::table('orders as o1')->whereIn('o1.order_status', ['Shipping','Delivered'])
            ->join('products as p1','p1.id', '=', 'o1.product_id')
            ->get();
        $admin = Admin::where('id',$user)->first();

        return view('Order.depo-delivery',['id'=>$user,'category'=>$order,'products'=>$product,'admin'=>$admin]);
    }

    public function orderDelivery(Request $request)
    {
        DB::table('orders')->where('invoice_id',$request->input('invo_id'))->update([
            'order_status' => 'Delivered'
        ]);

        return redirect()->back();
    }

    public function marquee()
    {
        $user = \request('id');

        $admin = Admin::where('id',$user)->first();

        $mar = marqueetext::first();

        return view('website.marquee',['id'=>$user,'admin'=>$admin,'marquee'=>$mar]);
    }

    public function insertMarquee(Request $request)
    {
        $check = marqueetext::where('id',$request->input('id'))->first();
        if (!$check) {
            marqueetext::create([
                'text' => $request->input('name'),
                'color' => $request->input('color')
            ]);
        } else {
            marqueetext::where('id', $request->input('id'))->update([
                'text' => $request->input('name'),
                'color' => $request->input('color')
            ]);
        }

        return redirect()->back();
    }

    public function updateMarquee(Request $request)
    {
        marqueetext::where('id',$request->input('id'))->update([
            'text'=>$request->input('name')
        ]);

        return redirect()->back();
    }
}
