<?php

namespace App\Http\Controllers\Blog\Admin;

use App\Repositories\Admin\MainRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MetaTag;

class MainController extends Controller
{
    public function index (){


        $countOrders = MainRepository::getCountsOrders();
        $countUsers = MainRepository::getCountsUsers();
        $countProducts = MainRepository::getCountsProducts();
        $countCategories = MainRepository::getCountsCategories();


        MetaTag::setTags(['title' => 'Админ панель']);
        return view( 'blog.admin.main.index', compact('countOrders','countUsers',
            'countProducts', 'countCategories'));
    }
}
