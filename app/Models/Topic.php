<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Topic extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'uuid',
        'user_id',
        'name',
        'slug',
        'icon',
        'order',
        'is_active',
    ];
    protected $hidden = [
        'deleted_at',
    ];

    /**
     * getRouteKeyName
     *
     * @return String
     */
    public function getRouteKeyName(): String
    {
        return 'slug';
    }
    public static function booted()
    {
        static::creating(function (Model $model) {
            $model->uuid = Str::uuid();
            $model->slug = Str::random(5) . Str::slug(request('name'));
        });
    }

    /**
     * user
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class, 'article_topic')
            ->withTimestamps();
    }
}