{{-- View index.blade.php --}}

{{-- Albums --}}
<div class="albums">
  {{-- Album List --}}
  <ul class="album_list">

    @foreach ($albums as $single_album)
      {{-- Single album --}}
      <li class="single_album">
        <ul class="album_info">

          {{-- Title --}}
          <li class="title">
            <h3>Title: {{ $single_album->title }}</h3>
          </li>
          {{-- end Title --}}

          {{-- Cover --}}
          <li class="cover">
            <div class="cover_img">
              <img src="{{ $single_album->cover}}" alt="">
            </div>
          </li>
          {{-- end Cover --}}

          {{-- Artist --}}
          <li class="artist">
            <span>Title: {{ $single_album->artist }}</span>
          </li>
          {{-- end Artist --}}

          {{-- Year --}}
          <li class="year">
            <span>Title: {{ $single_album->year }}</span>
          </li>
          {{-- end Year --}}

          {{-- Route to Show --}}
          <li class="show_album">
            <a href="{{route("albums.show", $single_album)}}">
              <span>View album</span>
            </a>
          </li>
          {{-- end Route to Show --}}

          {{-- Route to Edit --}}
          <li class="show_album">
            <a href="{{route("albums.edit", $single_album)}}">
              <span>Update album</span>
            </a>
          </li>
          {{-- end Route to Edit --}}

        </ul>
      </li>
      {{-- end Single album --}}
    @endforeach

  </ul>
  {{-- end Album list --}}
</div>
{{-- end Albums --}}
