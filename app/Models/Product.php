<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'value',
    ];

    public function getProductsSearchIndex(string $search1 = '') {

        $product = $this->where(function($query) use ($search1) {
            if ($search1) {
                $query->where('name', $search1);
                $query->orWhere('name', 'LIKE', "%{$search1}%");
            }
        })->get();

        return $product;

    }
}
