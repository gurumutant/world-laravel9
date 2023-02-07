@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage Cities</div>
            <div class="card-body">
                <a href="{{ route("city.create") }}">
                    <button type="button" class="btn btn-primary float-right">
                        <i class="bi bi-database-add"></i> Add
                    </button>
                </a>
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>

    <!-- Modal -->
  <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Kelas</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
@endsection
 
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    <script type="module">
        $(function(){
            $('body').on('click', '.detail', function () {
            var id = $(this).attr('data-id');
            $.ajax({
                url: `city/${id}`,
                type: 'get',
                data: {id: id},
                success: function(response){ 
                    $('.modal-body').html(response);
                    $('#detailModal').show(); 
                }
            });
            });
        });
         
    </script>
@endpush