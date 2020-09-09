{{-- View index.blade.php --}}
@php
  dd($albums);
@endphp
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
              <img src="{{ $single_album->img}}" alt="">
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

          {{-- Description --}}
          <li class="description">
            <p>Title: {{ $single_album->description }}</p>
          </li>
          {{-- end Description --}}

        </ul>
      </li>
      {{-- end Single album --}}
    @endforeach

  </ul>
  {{-- end Album list --}}
</div>
{{-- end Albums --}}
