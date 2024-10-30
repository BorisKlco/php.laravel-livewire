<div>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div>
                <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Label</label>
                <div class="flex w-full items-center">
                    <div class="relative w-9/12 rounded-md shadow-sm flex-inline items-center">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <span class="text-gray-500 sm:text-sm">Search</span>
                        </div>
                        <input wire:model.live="userSearch" type="text"
                            class="block w-full rounded-md border-0 py-3 pl-16 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            placeholder="Article name">
                    </div>
                    <button wire:click='clear()' type="reset"
                        class="px-4 py-3 ml-2 border rounded-md bg-sky-500 text-white font-bold disabled:bg-sky-300"
                        {{ empty($userSearch) ? 'disabled' : '' }}>Clear</button>
                </div>
            </div>
            <ul>
                @foreach ($articles as $article)
                    <li class="py-2">
                        <a href="/articles/{{ $article->id }}">{{ str($article->title)->words(4) }}</a>
                        <p>{{ str($article->article)->words(12) }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
</div>
