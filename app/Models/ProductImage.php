<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class ProductImage extends Model
{
    use HasFactory, HasUuids;

    // Specify the table name
    protected $table = 'product_image';

    // Define the primary key as a UUID
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    // Fields that are mass assignable
    protected $fillable = [
        'product_id',
        'image_path'
    ];

    // Relationship: A product image belongs to a product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
