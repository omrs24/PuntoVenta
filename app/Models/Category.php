<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;
    
    protected $connection = 'tienda';

    protected $table;

    protected $fillable = [
        'ID',
        'catName',
        'remarks',
    ];

    public function __construct() {
        $this->table = 'cat';
    }
}
