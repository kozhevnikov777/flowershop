<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FirstCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table ='first_categories';
    protected $guarded = false;

    public function posts()
    {
        return $this->hasMany(Post::class, 'first_category_id', 'id');
    }
}
