<div>
    <button data-toggle="modal" data-target="#addCategory"
            class="btn btn-primary btn-sm mt-10">Добавить категорию
    </button>
    <div wire:ignore class="modal fade" id="addCategory" tabindex="-1" role="dialog"
         aria-labelledby="addCategory"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Новая категория</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form >

                        <div class="form-group">
                            <label for="name">Название категории :</label>
                            <input type="text" class="form-control" wire:model="name"
                                   id="name">
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" wire:click.prevent="save"
                            data-dismiss="modal">
                        Сохранить
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
