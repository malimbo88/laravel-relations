<ul>
@foreach ($albums as $album)
<li>
  <h2>Title: {{ $album->title }}</h2>
  <a href="{{ route("album.show, $album") }}">View more details</a>
@endforeach
</ul>
