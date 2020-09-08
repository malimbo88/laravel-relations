<h2>Album title: {{ $album->title }}</h2>
<p>Artist: {{ $album->artist }}</p>
<p>Year: {{ $album->year }}</p>

<h3>Songs list</h3>
<ul>
  @foreach ($album->songs as $song)
    <li>{{ $song->title }}</li>
  @endforeach
</ul>
