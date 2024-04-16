@extends('layouts.main')

@section('main-content')
<div class="main-content">
    <div id="map">
        <button class="close-btn" id="closeSidebar">X</button>
        <div></div>
    </div>

    <div class="sidebar" id="sidebar">
        <div class="col">
            <div id="tempo"></div>
            <form id="form">
                <div class="mb-3">
                    <label for="inputPlaceName" class="form-label">Nama tempat</label>
                    <input type="text" class="form-control" id="inputPlaceName" required>
                </div>
                <div class="mb-3">
                    <label for="inputDescription" class="form-label">Deskripsi tempat</label>
                    <input type="text" class="form-control" id="inputDescription" required>
                </div>
                <div class="mb-3">
                    <label for="kategoriTempat" style="margin-bottom: 6px;">Kategori Tempat</label>
                    <select class="form-control" id="inputCategory">
                        <option value="wisata">Wisata</option>
                        <option value="pura">Pura</option>
                        <option value="kuliner">Kuliner</option>
                        <option value="belanja">Belanja</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="inputLatitude" class="form-label">Latitude</label>
                            <input type="text" class="form-control" id="inputLatitude" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="inputLongitude" class="form-label">Longitude</label>
                            <input type="text" class="form-control" id="inputLongitude" required>
                        </div>
                    </div>
                </div>


                <div class="mb-3">
                    <label for="inputImgUrl" class="form-label">Image URL</label>
                    <input type="text" class="form-control" id="inputImgUrl" required>
                </div>
                <button type="submit" class="btn btn-primary" onclick="createData()">Tambah ke Peta</button>
            </form>


        </div>

    </div>
</div>


@endsection


@section('js')
<script src="js/app.js"></script>
@endsection
