<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class DataDirectory extends Model
{
    protected $table = 'data_directory';
    use Translatable;
    protected $translatable = ['title','text'];
}
