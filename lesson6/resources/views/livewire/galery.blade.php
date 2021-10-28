<div class="col-md-12">
    <div class="card sale-card">
        <div class="card-header row">
            {{--            <div class="row">--}}
            <div class="col-4">
                <p>Категории</p>
                @if(count($categorys) !== 0)
                    <select class="w-80" wire:model="catId">
                        <option value="0">Выберите категорию</option>
                        @foreach($categorys as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <livewire:category-galery :user="$user"/>
                @else
                    <livewire:category-galery :user="$user"/>
                @endif


            </div>

            <div class="col-4">
                <p>Галереи</p>
                @if(count($galerys) !== 0)
                    <select class="w-80" wire:model="galIdImg">
                        <option value="">Выберите галерею</option>
                        @foreach($galerys as $galery)
                            <option value="{{$galery->id}}">{{$galery->name}}</option>
                        @endforeach
                    </select>
                    <livewire:galerys-name :user="$user"/>
                @else
                    <livewire:galerys-name :user="$user"/>
                @endif


            </div>
            <div class="col-4">

                @if($galIdImg !== null)
                    <form>
                        <div class="form-group">
                            <label for="name">Выберите файлы :</label>
                            <input type="file" wire:model="photos" multiple>
                        </div>
                    </form>
                    <button type="submit" class="btn btn-primary" wire:click.prevent="save"
                            data-dismiss="modal">
                        Сохранить
                    </button>
                @endif
            </div>

        </div>
        <div class="card-block">

            <div class="row">
                @foreach($images as $image)
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a href="{{ asset($image->url_img)}}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                            <img  src="{{ asset($image->url_img)}}" class="img-fluid rounded">
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


</div>
