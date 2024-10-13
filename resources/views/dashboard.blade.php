<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>Gategories</h1>
                    @foreach ($categories as $category)
                        <h2>{{ $category->name }}</h2>
                    @endforeach
                    <h1>Trending Stories</h1>
                    @foreach ($stories as $story)

                        <a href="{{ route('story.show', $story->id) }}">
                            <img src="{{ asset('images/' . $story->image) }}" alt="" height="300px" width="300px"
                                style="display: inline;margin:10px">
                        </a>
                    @endforeach
                    <h1>Top Adventure Stories</h1>
                    @if ($adventureStories && $adventureStories->stories)
                        <ul>
                            @foreach ($adventureStories->stories as $story)

                                <a href="{{ route('story.show', $story->id) }}">
                                    <img src="{{ asset('images/' . $story->image) }}" alt="" height="300px"
                                        width="300px" style="display: inline;margin:10px">
                                </a>
                            @endforeach
                        </ul>
                    @endif
                    <br>
                    <h1>Top History Stories</h1>
                    @if ($historyStories && $historyStories->stories)
                        <ul>
                            @foreach ($historyStories->stories as $story)
                            
                                <a href="{{ route('story.show', $story->id) }}">
                                    <img src="{{ asset('images/' . $story->image) }}" alt="" height="300px"
                                        width="300px" style="display: inline;margin:10px">
                                </a>
                            @endforeach
                        </ul>
                    @endif
                    <br>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
