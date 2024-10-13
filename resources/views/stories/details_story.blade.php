<h4>Authors:</h4>
<ul>
    @foreach ($story->authors as $author)
        <li>{{ $author->name }}</li>
    @endforeach
</ul>
<img src="{{ asset('images/' . $story->image) }}" alt="" height="300px" width="300px">
<h1>{{ $story->name }}</h1>
<p>{{ $story->summary }}</p>
<a href="{{ route('story.read', $story->id) }}"><button>Read</button></a>
<a href="{{ route('story.favorite', $story->id) }}"><button>Favorite</button></a>

<h2>View More</h2>
@foreach ($stories as $story)
    <a href="{{ route('story.show', $story->id) }}">
        <img src="{{ asset('images/' . $story->image) }}" alt="" height="300px" width="300px"
            style="display: inline;margin:10px">
    </a>
@endforeach
