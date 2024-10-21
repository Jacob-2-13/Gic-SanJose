
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('producto_id') }}</label>
    <div>
        {{ Form::text('producto_id', $compra->producto_id, ['class' => 'form-control' .
        ($errors->has('producto_id') ? ' is-invalid' : ''), 'placeholder' => 'Producto Id']) }}
        {!! $errors->first('producto_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">compra <b>producto_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('proveedor_id') }}</label>
    <div>
        {{ Form::text('proveedor_id', $compra->proveedor_id, ['class' => 'form-control' .
        ($errors->has('proveedor_id') ? ' is-invalid' : ''), 'placeholder' => 'Proveedor Id']) }}
        {!! $errors->first('proveedor_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">compra <b>proveedor_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_compra') }}</label>
    <div>
        {{ Form::text('fecha_compra', $compra->fecha_compra, ['class' => 'form-control' .
        ($errors->has('fecha_compra') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Compra']) }}
        {!! $errors->first('fecha_compra', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">compra <b>fecha_compra</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('cantidad_comprada') }}</label>
    <div>
        {{ Form::text('cantidad_comprada', $compra->cantidad_comprada, ['class' => 'form-control' .
        ($errors->has('cantidad_comprada') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Comprada']) }}
        {!! $errors->first('cantidad_comprada', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">compra <b>cantidad_comprada</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('costo_unitario') }}</label>
    <div>
        {{ Form::text('costo_unitario', $compra->costo_unitario, ['class' => 'form-control' .
        ($errors->has('costo_unitario') ? ' is-invalid' : ''), 'placeholder' => 'Costo Unitario']) }}
        {!! $errors->first('costo_unitario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">compra <b>costo_unitario</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('total_compra') }}</label>
    <div>
        {{ Form::text('total_compra', $compra->total_compra, ['class' => 'form-control' .
        ($errors->has('total_compra') ? ' is-invalid' : ''), 'placeholder' => 'Total Compra']) }}
        {!! $errors->first('total_compra', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">compra <b>total_compra</b> instruction.</small>
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
