<?php

namespace App\Http\Controllers\Blog\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Blog\BaseController as MainBaseController;

abstract class BaseController extends MainBaseController
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('status');

//        MetaTag::setTags([
//
//        ]);
    }

}
