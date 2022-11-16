<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marcas extends Model
{
    use HasFactory;

    protected $connection = 'tienda';

    protected $table;

    protected $fillable = [
        'ID',
        'name',
        'remarks',
    ];

    public function __construct() {
        $this->table = 'marca';
    }
}
