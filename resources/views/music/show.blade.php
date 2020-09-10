{{-- View show.blade.php --}}

{{-- Single Album --}}
<div class="single_album">
  <h2>Album:</h2>

  {{-- Album infos --}}
  <ul class="album_infos">

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
      <span>Artist: {{ $album->artist }}</span>
    </li>
    {{-- end Artist --}}

    {{-- Year --}}
    <li class="year">
      <span>Year: {{ $album->year }}</span>
    </li>
    {{-- end Year --}}

    {{-- Description --}}
    <li class="description">
      <p>Description: {{ $album->description }}</p>
    </li>
    {{-- end Description --}}

  </ul>
  {{-- end Album infos --}}

  {{-- Music Genre --}}
  @if (!$album->genres->isEmpty())
    <div class="musicgenre">
      <h2>Genre:</h2>

        {{-- All the genres related to this album --}}
        @foreach ($album->genres as $genre)
          <ul>
            <li>
              <h2>{{ $genre->musicgenre }}</h2>
            </li>
          </ul>
        @endforeach
        {{-- end All the genres related to this album --}}
        
      </div>
    @endif
    {{-- Music Genre --}}


  {{-- Songs list --}}
  <div class="songs">
    <h2>Songs:</h2>
    <ul class="songs_list">

      {{-- All the songs related to this album --}}
      @foreach ($album->songs as $single_song)
        <li>
          <h4>Song title: {{ $single_song->title }}</h4>
        </li>
        <li>
          <span>Song duration: {{ $single_song->duration }} minutes</span>
        </li>
      @endforeach
      {{-- end All the songs related to this album --}}

    </ul>
  </div>
  {{-- end Songs list --}}

</div>
{{-- end Single album --}}

{{-- Route to Index --}}
<div class="show_album">
  <a href="{{ route("albums.index") }}">
    <span>Show more albums</span>
  </a>
</div>
{{-- end Route to index --}}
