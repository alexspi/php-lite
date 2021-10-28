<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use App\Models\CategoryGalerys;
use App\Models\Galerys;
use App\Models\Images;
use App\Models\User;
use Livewire\WithFileUploads;

class Galery extends Component
{
    use WithFileUploads;

    public $categorys;
    public $galerys;
    public $images;
    public User $user;
    public $galIdImg;
    public $catId;
    public $photos = [];

    protected $listeners = ['updatePage' => '$refresh'];

    public function mount($user)
    {
        $this->user = $user;

    }

    public function render()
    {

        $this->categorys = CategoryGalerys::where('user_id', $this->user->id)->get();
        $this->galerys = Galerys::where('user_id', $this->user->id)->where('category_id', $this->catId)->get();
        $this->images = Images::where('user_id', $this->user->id)->where('galerys_id', $this->galIdImg)->get();
        return view('livewire.galery');
    }

    public function save()
    {

        $this->validate([
            'photos.*' => 'image|max:1024', // 1MB Max
        ]);

        foreach ($this->photos as $photo) {
            $this->images = new Images();
            $this->images->galerys_id = $this->galIdImg;
            $this->images->user_id = $this->user->id;
            $this->images->url_img = Storage::url('photos/' . $photo->getClientOriginalName());
            $this->images->save();


            $photo->storeAs('public/photos', $photo->getClientOriginalName());
//            dd($photo->getClientOriginalName());
        }

    }
}
