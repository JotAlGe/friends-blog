<div>
    <style>
        .custom-file-upload input[type="file"] {
            display: none;
        }

        .custom-file-upload .custom-file-upload1 {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
        }

        .loader {
            width: 48px;
            height: 48px;
            border: 5px solid rgba(30, 122, 93, .8);
            border-bottom-color: transparent;
            border-radius: 50%;
            display: none;
            box-sizing: border-box;
            animation: rotation 1s linear infinite;
        }

        @keyframes rotation {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <div class="row justify-content-center">
        <div class="col-md-offset-3 col-md-7 col-xs-12">
            <div class="well well-sm well-social-post">
                <form wire:submit.prevent="store">
                    {{-- post --}}
                    <textarea wire:model="description" class="form-control" placeholder="Escribe algo..."></textarea>

                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    @error('photo')
                    <br>
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    @if($photo)
                    <div class="d-flex justify-content-center">
                        <img src="{{$photo->temporaryUrl()}}" alt="" width="100" height="100">
                    </div>
                    @endif
                    <ul class='list-inline post-actions d-flex justify-content-between'>
                        <li class="custom-file-upload">
                            <label for="file-upload" class="custom-file-upload1">
                                <i class="fa fa-cloud-upload"></i> Foto
                            </label>
                            <input id="file-upload" type="file" wire:model="photo" wire:loading.attr="disabled"
                                wire:target="photo, store" />
                            <select wire:model="category_id">
                                <option selected>Elige una categoría</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->description}}</option>

                                @endforeach
                            </select>
                        </li>

                        <li class='pull-right mb-3 mt-1'>
                            <x-form.input type="submit" class="btn btn-theme"
                                style="background-color: #1e7a5d; color: white;" value="Publicar" wire:click="store"
                                wire:loading.attr="disabled" wire:target="photo" />
                        </li>
                    </ul>
                </form>
                <span wire:loading.block wire:target="photo, store" class="loader mx-auto"></span>

            </div>
        </div>
    </div>
</div>
