<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mesa;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    // protected $table = 'categories';
    use HasFactory;
    protected $fillable = [
        'name_category',
        'photo',
    ];

    public function GetMesas(): BelongsToMany
    {
        return $this->belongsToMany(Mesa::class, 'mesas_categories', 'category_id', 'mesa_id');
    }
}
