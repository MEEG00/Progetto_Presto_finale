<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;

class CreateForm extends Component
{
    public $title;
    public $price;
    public $body;
    public $category_id =[];

   public function create(){
    // $this->validate();
    $article = Article::create([
        'title'=> $this->title,
        'price'=> $this->price,
        'body'=> $this->body,
        // 'category_id'=> $this->category_id,
    ]);

    $article->categories()->attach($this->category_id);

    $this->reset();

   }



    public function render()
    {
        return view('livewire.create-form',['categories'=>Category::All()]);
    }
}
