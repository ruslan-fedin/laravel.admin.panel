<?php


namespace App\Repositories\Admin;

use App\Repositories\CoreRepository;
use Db;
use Illuminate\Database\Eloquent\Model;


class MainRepository extends CoreRepository
{

    protected function getModelClass()
    {
        return Model::class;

    }


    /** Get count all orders */
    public static function getCountsOrders(){
        $count = \DB::table('orders')
            ->where('status', '0')
            ->get()
            ->count();
        return $count;
    }

    /** Get count all users */
    public static function getCountsUsers(){
        $users = \DB::table('users')
            ->get()
            ->count();
        return $users;
    }

    /** Get count all product */
    public static function getCountsProducts(){
        $prod = \DB::table('products')
            ->get()
            ->count();
        return $prod;
    }

    /** Get count all categories */
    public static function getCountsCategories(){
        $cat = \DB::table('categories')
            ->get()
            ->count();
        return $cat;
    }
}
