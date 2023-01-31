{!! Form::model($model, ['url' => $form_url, 'method' => 'delete', 'class' => 'form-inline']) !!}
    <a title="Detail" class="btn btn-sm btn-primary detail" data-id="{{ $model->id }}">
        <i class="bi bi-file-text"></i> Detail
    </a>
    <a class="btn btn-sm btn-warning" href="{{ $edit_url }}">
        <i class="bi bi-pencil-square"></i> Ubah
    </a>  
    {!! 
        Form::submit('Hapus', [
            'class'=>'btn btn-sm btn-danger',
            'onclick'=>"return confirm('Anda yakin untuk menghapus?')"
        ]);  
    !!}    
{!! Form::close() !!}