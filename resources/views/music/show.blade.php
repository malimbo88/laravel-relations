<div class="single_album">
  <ul class="album_info">

    {{-- Title --}}
    <li class="title">
      <h3>Title: {{ $album->title }}</h3>
    </li>
    {{-- end Title --}}

    {{-- Cover --}}
    <li class="cover">
      <div class="cover_img">
        <img src="{{ $album->cover}}" alt="">
      </div>
    </li>
    {{-- end Cover --}}

    {{-- Artist --}}
    <li class="artist">
      <span>Title: {{ $album->artist }}</span>
    </li>
    {{-- end Artist --}}

    {{-- Year --}}
    <li class="year">
      <span>Title: {{ $album->year }}</span>
    </li>
    {{-- end Year --}}

    {{-- Description --}}
    <li class="description">
      <p>Title: {{ $album->description }}</p>
    </li>
    {{-- end Description --}}

    {{-- Description --}}
    <li class="show_album">
      <a href="{{ route("albums.index") }}">
        <span>Come Back</span>
      </a>
    </li>
    {{-- end Description --}}

  </ul>
</div>
{{-- end Single album --}}
