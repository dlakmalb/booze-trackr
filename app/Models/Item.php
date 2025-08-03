<?php

namespace App\Models;

use App\Models\Traits\LogsAllChangedAttributes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use LogsAllChangedAttributes, SoftDeletes;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
