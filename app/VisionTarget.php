<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class VisionTarget extends Model
{
    use Translatable;
    protected $translatable = ['title','content'];
}
