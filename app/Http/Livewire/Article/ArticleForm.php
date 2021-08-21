<?php

namespace App\Http\Livewire\Article;

use App\Models\Tag;
use Livewire\Component;

class ArticleForm extends Component
{
    public function tags()
    {
        return Tag::get();
    }

    public function render()
    {
        return view('livewire.article.article-form');
    }
}