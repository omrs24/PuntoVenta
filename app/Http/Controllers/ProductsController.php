<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product as Prod;
use App\Lib\Libraries as Lib;

class ProductsController extends Controller
{
    //

    public function index(){
        return view('register.index');
    }

    //Get all products with vendor, brand and category information
    public function getAllProducts(){

        $products = Lib::querySQLMYSQL("SELECT t1.ID,t1.name,t1.detail,t1.reference,t1.inventory,t1.price1,t1.cost, vendor.name 'vname',
        marca.name 'mname', cat.catName 'cname', t1.image
        FROM product t1
        INNER JOIN vendor on t1.vendorID = vendor.ID
        INNER JOIN marca on t1.marca = marca.ID
        INNER JOIN cat on t1.catID = cat.ID");

        return $products;
    }
}
