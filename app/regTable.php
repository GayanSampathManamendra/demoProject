<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class regTable extends Model
{
    public $timestamps=false;
    protected $table='regTable';
    public $primarykey='name';
}
