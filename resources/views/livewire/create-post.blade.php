<div>

    <x-jet-danger-button wire:click="$set('open', true)">
        crear nuevo Post
    </x-jet-danger-button>
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Crear un nuevo Post
        </x-slot>

        <x-slot name="content">
            <div wire:loading wire:target="image" class="bg-red-100 mb-4 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Imagen cargando</strong>
                <span class="block sm:inline">Espere un momento</span>
              </div>
            @if ($image)
                <img src="{{$image->temporaryUrl()}}" alt="">
            @endif
            <div class="mb-4">
                <x-jet-label value="Titulo del post"></x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model="title"></x-jet-input>

                <x-jet-input-error for="title"/>
            </div>

            <div class="mb-4">
                <x-jet-label value="Contenido del post"></x-jet-label>
                <textarea wire:model="content" id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>

                <x-jet-input-error for="content"/>

                {{-- <x-jet-input type="text" class="w-full"></x-jet-input> --}}
            </div>
            <div>
                <input type="file" wire:model="image"  id="{{$identificador}}">
                <x-jet-input-error for="image"/>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">
                cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="save" wire:loading.attr="disabled" wire:target="save, image">
                crear Post
            </x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>
</div>
