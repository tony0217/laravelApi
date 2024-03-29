<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/*
|--------------------------------------------------------------------------
| Model Customer
|--------------------------------------------------------------------------|
|
*/
class CustomerModel extends Model
{
    protected $table = "customer";

    public $timestamps = false;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'created',
        'register_by',
        'modified',
        'modified_by'
    ];
}
