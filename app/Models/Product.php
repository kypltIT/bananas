<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    public $incrementing = false; // UUID làm primary key
    protected $keyType = 'string'; // Định dạng của khóa chính là string

    protected $fillable = [
        'id',
        'category_id',
        'code',
        'name',
        'price',
        'stock',
        'color',
        'size',
        'tags',
        'description',
        'image_path',
    ];

    protected static function boot()
    {
        parent::boot();

        // Gán UUID tự động khi tạo sản phẩm
        static::creating(function ($product) {
            if (empty($product->id)) {
                $product->id = (string) Str::uuid();
            }
        });
    }

    /**
     * Quan hệ với bảng Categories (Một sản phẩm thuộc một danh mục)
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * Quan hệ với bảng ProductImage (Một sản phẩm có nhiều ảnh)
     */
    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }
}
