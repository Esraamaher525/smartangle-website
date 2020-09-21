<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Marketing extends Model
{
    protected $table = 'marketing';
    use Translatable;
    protected $translatable = ['text'];
}
