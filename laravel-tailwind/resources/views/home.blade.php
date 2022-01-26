@extends('template.layout')

@section('content')

<div>
    <form action="/store" method="POST" enctype="multipart/form-data">
        @csrf
            @error('kategori')
                <p>{{$message}}</p>
            @enderror
        <input class="border-2" type="text" name="kategori">
        <input type="file" name="image">
        <input type="submit" name="btn" value="simpan">
    </form>
</div>
<h1>Home</h1>

@foreach ($kategoris as $isi)
<p>This is user {{ $isi->kategori }} -- <a href="/store/{{$isi->idkategori}}">Hapus</a></p>
@endforeach
@endsection