<?php

namespace App\Http\Livewire;

use App\Models\CategoryGalerys;
use App\Models\Galerys;
use App\Models\User;
use Livewire\Component;

class GalerysName extends Component
{

    public Galerys $galerys;
    public User $user;
    public $name;
    public $category_id;

    public function render()
    {
        $this->categorys = CategoryGalerys::where('user_id', $this->user->id)->get();

        return view('livewire.galerys-name');
    }


    public function save()
    {
        $this->galerys = new Galerys();
        $this->galerys->name = $this->name;
        $this->galerys->user_id = $this->user->id;
        $this->galerys->category_id =$this->category_id;
        $this->galerys->save();


        $this->emitUp('updatePage');
    }
}
