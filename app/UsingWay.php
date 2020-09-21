<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class UsingWay extends Model
{
    protected $table = 'using_way';
    use Translatable;
    protected $translatable = ['text'];
}
