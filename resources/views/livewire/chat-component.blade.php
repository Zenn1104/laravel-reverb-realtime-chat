<div>
    <div class="py-4">
        @foreach ($convo as $convoItem)
            <div @class(['chat chat-start', 'chat-end' => Auth::user()->name == $convoItem['username']])>
                <div class="chat-image avatar">
                <div class="w-10 rounded-full">
                    <img alt="Tailwind CSS chat bubble component" src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                </div>
                </div>
                <div class="chat-header">
                {{ $convoItem['username'] }}
                </div>
                <div class="chat-bubble chat-bubble-secondary">{{ $convoItem['message'] }}</div>
            </div>
        @endforeach
    </div>
    <div class="form-control">
        <form wire:submit="submitMessage" class="flex items-center justify-between">
            <input wire:model="message" wire:key="{{ now() }}" class="input input-bordered w-full" type="text"/>
            <button type="submit" class="btn btn-primary btn-square">
                <x-tabler-send-2 class="size-5"/>
            </button>
        </form>
    </div>
</div>
