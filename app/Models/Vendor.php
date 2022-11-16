<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $connection = 'tienda';

    protected $table;

    protected $fillable = [
        'ID',
        'name',
        'email',
        'telefono',
        'address',
        'remarks',
    ];

    public function __construct() {
        $this->table = 'vendor';
    }  
}
