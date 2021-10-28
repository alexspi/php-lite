<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryGalerys extends Model
{
    use HasFactory;
    protected $table = 'category_galerys';
    protected $fillable = [
        'user_id', 'name'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function galerysItem(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Galerys::class);
    }

}
