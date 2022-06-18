<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    
  // untuk menambahkan ke fillable di dalam model
    // protected $fillable = [
    //     'title', 'excerpt', 'body'
    // ];
    
    // untuk menambahkan ke guarded di dalam model
    protected $guarded = ['id'];
    protected $with = ['author', 'category'];
    
    public function category()
    {
      return $this->belongsTo(Category::class);
    }
    public function author()
    {
      return $this->belongsTo(User::class, 'user_id');
    }   
    
}
