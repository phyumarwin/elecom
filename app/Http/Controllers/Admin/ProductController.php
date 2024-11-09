<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.manage');
    }

    public function review_manage()
    {
        return view('admin.product.manage_product_review');
    }
}
