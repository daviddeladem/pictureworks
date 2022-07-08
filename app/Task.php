<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;

class Task extends Model
{
    use UUID;
    protected $guarded = [];
}
