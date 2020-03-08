<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    
    protected $filtable = [
        'id',
        'user_id',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
        'currency',
        'note',
    ];
}
