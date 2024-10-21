
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('producto_id') }}</label>
    <div>
        {{ Form::text('producto_id', $venta->producto_id, ['class' => 'form-control' .
        ($errors->has('producto_id') ? ' is-invalid' : ''), 'placeholder' => 'Producto Id']) }}
        {!! $errors->first('producto_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">venta <b>producto_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('cliente_id') }}</label>
    <div>
        {{ Form::text('cliente_id', $venta->cliente_id, ['class' => 'form-control' .
        ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id']) }}
        {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">venta <b>cliente_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('precio') }}</label>
    <div>
        {{ Form::text('precio', $venta->precio, ['class' => 'form-control' .
        ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
        {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">venta <b>precio</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('cantidad') }}</label>
    <div>
        {{ Form::text('cantidad', $venta->cantidad, ['class' => 'form-control' .
        ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
        {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">venta <b>cantidad</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('total') }}</label>
    <div>
        {{ Form::text('total', $venta->total, ['class' => 'form-control' .
        ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
        {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">venta <b>total</b> instruction.</small>
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
