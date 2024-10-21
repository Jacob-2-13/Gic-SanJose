
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre') }}</label>
    <div>
        {{ Form::text('nombre', $cliente->nombre, ['class' => 'form-control' .
        ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">cliente <b>nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('documento') }}</label>
    <div>
        {{ Form::text('documento', $cliente->documento, ['class' => 'form-control' .
        ($errors->has('documento') ? ' is-invalid' : ''), 'placeholder' => 'Documento']) }}
        {!! $errors->first('documento', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">cliente <b>documento</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('tipo_documento') }}</label>
    <div>
        {{ Form::text('tipo_documento', $cliente->tipo_documento, ['class' => 'form-control' .
        ($errors->has('tipo_documento') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Documento']) }}
        {!! $errors->first('tipo_documento', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">cliente <b>tipo_documento</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('telefono') }}</label>
    <div>
        {{ Form::text('telefono', $cliente->telefono, ['class' => 'form-control' .
        ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
        {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">cliente <b>telefono</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
