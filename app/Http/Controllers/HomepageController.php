<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function showHomepage() {
        $obj_category = Category::where('status',1)->get();
        $obj = Product::where('status' ,1)
            ->whereRaw('CURRENT_DATE - DATE(created_at) < 7')
            ->get();
        return view('user.homepage')
            ->with('obj',$obj)
            ->with('obj_category',$obj_category);
    }


    public function showAbout() {
        $obj_category = Category::where('status',1)->get();
        return view('user.about')
            ->with('obj_category',$obj_category);
    }

    public function showContact() {
        $obj_category = Category::where('status',1)->get();
        return view('user.contact')
            ->with('obj_category',$obj_category);
    }

    public function showCategoryMasterLayout() {
        $obj_category = Category::where('status',1)->get();
        return view('layouts.user-master-layout')
            ->with('categories',$obj_category);
    }

    public function showFAQs() {
        $obj_category = Category::where('status',1)->get();
        return view ('user.faq')
            ->with('obj_category',$obj_category);
    }

    public function showReturn() {
        $obj_category = Category::where('status',1)->get();
        return view ('user.return')
            ->with('obj_category',$obj_category);
    }

    public function showBrands() {
        $obj_category = Category::where('status',1)->get();
        return view ('user.brands')
            ->with('obj_category',$obj_category);
    }
}
