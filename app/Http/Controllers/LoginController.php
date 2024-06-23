<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function loginController(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $admins = Admin::where('email', $email)
            ->where('password',$password)->first();

        if ($email == "rubayetislam16@gmail.com" && $password == "123456") {
            $user = 'rubayetislam16@gmail.com';
            return redirect()->route('welcomePage',['id'=>$user]);
        }

        elseif($email == $admins->email && $password == $admins->password) {
            return redirect()->route('welcomePage',['id'=>$admins]);
        }
    }

    public function welcomePage()
    {
        $user = \request('id');
        $admin = Admin::where('id',$user)->first();
        $now = Carbon::now();
        $daily = DB::table('orders')->whereDate('created_at',$now)->where('order_status','Delivered')->sum('price');
        $month = DB::table('orders')->whereMonth('created_at',$now)->where('order_status','Delivered')->sum('price');
        $processing = DB::table('orders')->where('order_status','Processing')->count();
        $shipping = DB::table('orders')->where('order_status','Shipping')->count();
        $delivered = DB::table('orders')->where('order_status','Delivered')->count();
        $currentPeriodCount = DB::table('users')
            ->whereBetween('created_at', [now()->subDays(28), now()])
            ->where('roles','users')
            ->count();


        $previousPeriodCount = DB::table('users')
            ->whereBetween('created_at', [now()->subDays(56), now()->subDays(28)])
            ->where('roles','users')
            ->count();


        $change = $currentPeriodCount - $previousPeriodCount;
        $isIncrease = $change >= 0;

        $depocurrentPeriodCount = DB::table('users')
            ->whereBetween('created_at', [now()->subDays(28), now()])
            ->where('roles','depo')
            ->count();


        $depopreviousPeriodCount = DB::table('users')
            ->whereBetween('created_at', [now()->subDays(56), now()->subDays(28)])
            ->where('roles','depo')
            ->count();


        $depochange = $depocurrentPeriodCount - $depopreviousPeriodCount;
        $depoisIncrease = $depochange >= 0;
        return view('dashboard',['id'=>$user,'admin'=>$admin,'now'=>$now,'daily'=>$daily,'month'=>$month,
            'processing'=>$processing,'shipping'=>$shipping,'delivered'=>$delivered,'currentPeriodCount'=>$currentPeriodCount, 'change'=>$change, 'isIncrease'=>$isIncrease,
            'depocurrentPeriodCount'=>$depocurrentPeriodCount, 'depochange'=>$depochange, 'depoisIncrease'=>$depoisIncrease]);
    }
}
