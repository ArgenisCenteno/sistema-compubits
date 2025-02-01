<div class="row">
    <!-- Name Field -->
    <div class="form-group col-sm-6 col-md-6">
        {!! Form::label('nombre', 'Nombre:', ['class' => 'fw-bold']) !!}
        {!! Form::text('nombre', null, ['class' => 'form-control round']) !!}
    </div>
    <div class="form-group col-sm-6 col-md-6">
        {!! Form::label('status', 'Estado:', ['class' => 'fw-bold']) !!}
        {!! Form::select('status', [
           '1' => 'Activo',
           '0' => 'Inactivo',
            ], null, ['class' => 'form-control round']) !!}

    </div>
</div>

<!-- Submit Field -->
<div class="float-end">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary round']) !!}
   
</div>