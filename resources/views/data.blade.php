@extends('layouts.main')

{{-- @dd($title) --}}

@section('main-content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Koordinat</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody id="contentPlaceTable">
    </tbody>
</table>
@endsection

@section('js')
    <script src="js/data.js"></script>
@endsection