<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Setting extends Model
{
    protected $table = 'settings';
    use Translatable;
}
