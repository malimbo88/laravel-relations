{{-- View edit.blade.php --}}

{{-- Error Validation --}}
@if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>Error: {{ $error }}</li>
 @endforeach
 </ul>
 </div>
@endif
{{-- end Error Validation --}}

{{-- Edit Album --}}
<div class="edit_album">
  <form class="edit" action="{{ route("albums.update", $album)}}" method="post">
    {{-- Cross-site request forgery --}}
    @csrf

    {{-- Request method --}}
    @method("PUT")

    {{-- Edit Title --}}
    <div class="edit_title">
      <label>Edit Title</label>
      <input type="text" name="title" value="{{ old("title") ? old("title") : $album->title }}">
    </div>
    {{-- end Edit Title --}}

    {{-- Edit Cover --}}
    <div class="edit_cover">
      <label>Edit Cover</label>
      <input type="text" name="cover" value="{{ old("cover") ? old("cover") : $album->cover }}">
    </div>
    {{-- end Edit Cover --}}

    {{-- Edit Artist --}}
    <div class="edit_artist">
      <label>Edit Artist</label>
      <input type="text" name="artist" value="{{ old("artist") ? old("artist") : $album->artist }}">
    </div>
    {{-- end Edit Artist --}}

    {{-- Edit Year --}}
    <div class="edit_year">
      <label>Edit Year</label>
      <input type="text" name="year" value="{{ old("year") ? old("year") : $album->year }}">
    </div>
    {{-- end Edit Year --}}

    {{-- Edit Description --}}
    <div class="edit_description">
      <label>Edit Description</label>
      <textarea name="description" rows="8" cols="80">{{ old("description") ? old("desccription") : $album->description }}</textarea>
    </div>
    {{-- end Edit Description --}}

    {{-- Edit Genres --}}
    <div class="edit_genres">
        @foreach ($genres as $genre)
          <div class="checkbox">
            <span>{{ $genre->musicgenre }}<span>
            <input type="checkbox" name="genres[]" value="{{ $genre->id }}" {{ ($album->genres->contains($genre)) ? "checked" : "" }}>
          </div>
        @endforeach
    </div>
    {{-- edit Edit Genres --}}

    {{-- Submit --}}
    <div class="edit_submit">
      <input type="submit" value="Update album">
    </div>
    {{-- end Submit --}}

  </form>
</div>
{{-- end Edit Album --}}
