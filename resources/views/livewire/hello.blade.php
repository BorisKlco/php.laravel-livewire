<div>
    <form class="flex flex-col gap-2 w-[24rem] bg-black/10" wire:submit='change()'>
        <input class="border" type="text" wire:model='name' placeholder="Name">
        @error('name')
            {{ $message }}
        @enderror
        <input class="border" type="text" wire:model.fill='surname' placeholder="Surname">
        @error('surname')
            {{ $message }}
        @enderror
        <button>Change</button>
    </form>

    @if ($fullname)
        <p class="mt-5">{{ $fullname }}</p>
    @endif

</div>
