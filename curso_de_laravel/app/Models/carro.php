<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Carro extends Model{

    protected $table = 'garagem_carro';
    protected $primaryKey = 'carro_chassi';

    public $incrementing = false;

    protected $keyType = 'string';




}
