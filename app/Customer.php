<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    protected $fillable = ['name','phone','address','email','long','lat','activity_name','activity','profile_link','status'];
}
