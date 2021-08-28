<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'uuid',
        'user_id',
        'name',
        'slug',
        'icon',
        'parent_id',
        'order',
        'is_active',
    ];
    public static function booted()
    {

        static::creating(function (Model $model) {
            $model->uuid = Str::uuid();
            $model->slug = Str::random(5) . Str::slug(request('name'));
        });
    }
    protected $hidden = [
        'deleted_at',
    ];
    public function getRouteKeyName(): String
    {
        return 'slug';
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class, 'article_category')
            ->withTimestamps();
    }
}