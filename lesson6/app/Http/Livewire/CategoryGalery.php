<?php

namespace App\Http\Livewire;

use App\Models\CategoryGalerys;
use App\Models\User;
use Livewire\Component;

class CategoryGalery extends Component
{
    public CategoryGalerys $category;
    public User $user;
    public $name;



    public function render()
    {

        return view('livewire.category-galery');
    }


    public function save()
    {
        $this->category = new CategoryGalerys();
        $this->category->name = $this->name;
        $this->category->user_id = $this->user->id;
        $this->category->save();


        $this->emitUp('updatePage');
    }
}
