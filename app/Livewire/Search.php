<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Search extends Component
{
    #[Validate('required')]
    public $userSearch = '';
    public $articles = [];

    public function updatedUserSearch($value)
    {
        $this->reset('articles');
        $this->articles = Article::where('title', 'LIKE', "%{$value}%")->limit(5)->get();
    }

    public function clear()
    {
        $this->reset('userSearch', 'articles');
    }

    public function render()
    {
        return view('livewire.search');
    }
}
