<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
        'user_id',
        'kicker',
        'headline',
        'slug',
        'teaser',
        'content',
        'pinned',
        'highlighted',
        'publisher_id',
    ];

    /**
     * casts
     *
     * @var array
     */
    protected $casts = [
        'published_at' => 'datetime',
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
            $model->slug = Str::random(5) . Str::slug(request('headline'));
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
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'article_category')
            ->withTimestamps();
    }
    public function topics(): BelongsToMany
    {
        return $this->belongsToMany(Topic::class, 'article_topic')
            ->withTimestamps();
    }
}