<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table = "contacts";
    protected $fillable = [
    'first_name',
    'last_name',
    'phone',
    'city',
    'state',
    'zip',
    'details',
    ];
}
