@extends('layouts.main')

{{-- @dd($title) --}}

@section('main-content')
<div class="mx-5">
  <table id="dataTable" class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col" class="colNama">Nama</th>
            <th scope="col" class="colDeskripsi">Deskripsi</th>
            <th scope="col">Koordinat</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody id="contentPlaceTable">
    </tbody>
</table>
</div>


{{-- Dialog Modal Edit --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="editInputName" class="form-label">Name</label>
              <input type="text" class="form-control" id="editInputName" aria-describedby="nameHelp">
            </div>
            
            <div class="mb-3">
              <label for="editInputDescription" class="form-label">Description</label>
              <input type="text" class="form-control" id="editInputDescription" aria-describedby="nameHelp">
            </div>
            
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="editInputLatitude" class="form-label">Latitude</label>
                  <input type="text" class="form-control" id="editInputLatitude" aria-describedby="nameHelp">
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="editInputLongitude" class="form-label">Longitude</label>
                  <input type="text" class="form-control" id="editInputLongitude" aria-describedby="nameHelp">
                </div>
              </div>
            </div>
            
            <div class="mb-3">
              <label for="editInputImgUrl" class="form-label">Image Url</label>
              <input type="text" class="form-control" id="editInputImgUrl" aria-describedby="ImgUrlHelp">
            </div>
            
            
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="saveData">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  
@endsection

@section('js')
    <script src="js/data.js"></script>
@endsection