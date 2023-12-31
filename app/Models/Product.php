<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    use HasFactory;
    protected $table = 'product';
    protected $primary = 'id';
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    protected $fillable = [
        'name', 'description','price','image','category_id'
    ];
}
