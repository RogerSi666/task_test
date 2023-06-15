<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Shop;


class ShopController extends Controller
{
    public function index()
    {
    $shops = Area::find(1)->shops;
    $area = Shop::find(2)->area;
    }
}
