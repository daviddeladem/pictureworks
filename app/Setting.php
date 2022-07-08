<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;

class Setting extends Model
{
    use UUID;
    protected $guarded = [];
}
