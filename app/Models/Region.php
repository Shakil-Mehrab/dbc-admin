<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kalnoy\Nestedset\NodeTrait;

class Region extends Model
{
    use HasFactory, NodeTrait;
    protected $fillable = [
        'name',
        'uuid',
        'slug',
        'eng_name',
        'parent_id',
        'order',
        'lat',
        'lng'
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public static function booted()
    {
        static::creating(function (Model $model) {
            $model->uuid = Str::uuid();
        });
    }
}