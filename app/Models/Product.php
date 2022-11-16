<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $connection = 'tienda';

    protected $table;

    protected $fillable = [
        'ID',
        'code',
        'name',
        'reference',
        'detail',
        'vendorID',
        'marca',
        'catID',
        'cost',
        'price1',
        'price2',
        'price3',
        'lists',
        'inventory',
        'remarks',
        'active',
        'image',
        'listas',
    ];

    public function __construct() {
        $this->table = 'product';
    }
}
