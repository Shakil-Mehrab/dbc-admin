<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Topic;
use Illuminate\Support\Str;
use App\Traits\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use  HasFactory, Notifiable, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'display_name',
        'phone_number',
        'is_admin',
        'email',
        'password',
        'profile_photo_url',
        'bio',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'deleted_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'deactivated_at' => 'datetime'
    ];

    /**
     * appends
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    public static function booted()
    {
        static::creating(function (Model $model) {
            $model->uuid = Str::uuid();
        });
    }
    /**
     * articles
     *
     * @return HasMany
     */
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }
    public function topics(): HasMany
    {
        return $this->hasMany(Topic::class);
    }

    public function tags(): HasMany
    {
        return $this->hasMany(Tag::class);
    }
}