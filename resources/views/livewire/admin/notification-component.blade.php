<div class="ml-3 relative">

    <x-jet-dropdown align="right" width="48">
        <x-slot name="trigger">
                <button wire:click="markAsRead()" class="flex items-center text-sm font-medium text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">

                    Notificaciones

                    @if ($count)
                        <span class="ml-2 inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">{{ $count }}</span>
                    @endif

                </button>
        </x-slot>

        <x-slot name="content">
            <div class="block px-4 py-2 text-xs text-gray-400">
                {{ __('Manage Team') }}
            </div>

            <ul class="divide-y-2">
                @foreach ($notifications as $notification)
                    <li wire:click="read('{{ $notification->id }}')" class="{{ ! $notification->read_at ?'bg-gray-200': '' }}" >
                        <x-jet-dropdown-link class="text-gray-700" href="{{ $notification->data['url']}}">
                                {{ $notification->data['message'] }}

                                <span class="text-xs font-bold">{{$notification->created_at->diffForHumans()}}</span>
                        </x-jet-dropdown-link>
                    </li>
                @endforeach
            </ul>

            <div class="border-t border-gray-100"></div>
        </x-slot>
    </x-jet-dropdown>
</div>
