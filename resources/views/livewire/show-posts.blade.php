<div>
    {{-- <div>
        <div>
            @foreach ($posts as $post)
                <p style="display: block;">{{ $post->title }}</p>
            @endforeach
        </div>
    </div> --}}
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <x-table>


                <div>
                    <h2 class="text-2xl font-semibold leading-tight">Invoices</h2>
                </div>

                <div class="px-6 py-6">
                    {{-- <input type="text" wire:model="search"> --}}
                    <x-jet-input wire:model="search" class="w-full p-3" placeholder="ingrese la busqueda">

                    </x-input>
                </div>
                @if ($posts->count())

                <table class="min-w-full leading-normal">

                        <thead>
                            <tr>
                                <th
                                    wire:click="order('id', 'desc')" class="cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                    ID
                                    @if ($sort == 'id')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-regular fa-arrow-down-z-a float-right mt-1"></i>
                                        @else
                                            <i class="fas fa-solid fa-arrow-up-z-a float-right mt-1"></i>
                                        @endif

                                    @else
                                        <i class="fas fa-sort float-right mt-1"></i>
                                    @endif
                                </th>
                                <th
                                    wire:click="order('title','desc')" class="cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                    Title
                                    @if ($sort == 'title')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-regular fa-arrow-down-z-a float-right mt-1"></i>
                                        @else
                                            <i class="fas fa-solid fa-arrow-up-z-a float-right mt-1"></i>
                                        @endif

                                    @else
                                        <i class="fas fa-sort float-right mt-1"></i>
                                    @endif

                                </th>
                                <th
                                    wire:click="order('content','desc')" class="cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                    Content
                                    @if ($sort == 'content')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-regular fa-arrow-down-z-a float-right mt-1"></i>
                                        @else
                                            <i class="fas fa-solid fa-arrow-up-z-a float-right mt-1"></i>
                                        @endif

                                    @else
                                        <i class="fas fa-sort float-right mt-1"></i>
                                    @endif

                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)

                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$post->id}}
                                    </p>

                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$post->title}}
                                    </p>

                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$post->content}}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                    {{-- <button type="button" class="inline-block text-gray-500 hover:text-gray-700">
                                        <svg class="inline-block h-6 w-6 fill-current" viewBox="0 0 24 24">
                                            <path
                                                d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z" />
                                        </svg>
                                    </button> --}}
                                    <a href="#">edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="px-6 py-6">
                            No existe ningun registro
                    </div>
                @endif
            </x-table>
        </div>
    </div>
</div>

