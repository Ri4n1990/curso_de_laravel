<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Cliente extends Model{

    protected $table = 'cliente';
    protected $keyType = 'string';
    protected $primariKey = 'id';

    public $incrementing = false;




};