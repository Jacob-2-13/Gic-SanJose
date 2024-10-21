
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre') }}</label>
    <div>
        {{ Form::text('nombre', $producto->nombre, ['class' => 'form-control' .
        ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">producto <b>nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('descripcion') }}</label>
    <div>
        {{ Form::text('descripcion', $producto->descripcion, ['class' => 'form-control' .
        ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
        {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">producto <b>descripcion</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('categoria_id') }}</label>
    <div>
        {{ Form::text('categoria_id', $producto->categoria_id, ['class' => 'form-control' .
        ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Id']) }}
        {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">producto <b>categoria_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('proveedor_id') }}</label>
    <div>
        {{ Form::text('proveedor_id', $producto->proveedor_id, ['class' => 'form-control' .
        ($errors->has('proveedor_id') ? ' is-invalid' : ''), 'placeholder' => 'Proveedor Id']) }}
        {!! $errors->first('proveedor_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">producto <b>proveedor_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('stock') }}</label>
    <div>
        {{ Form::text('stock', $producto->stock, ['class' => 'form-control' .
        ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
        {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">producto <b>stock</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('estado') }}</label>
    <div>
        {{ Form::text('estado', $producto->estado, ['class' => 'form-control' .
        ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
        {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">producto <b>estado</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('costo_unitario') }}</label>
    <div>
        {{ Form::text('costo_unitario', $producto->costo_unitario, ['class' => 'form-control' .
        ($errors->has('costo_unitario') ? ' is-invalid' : ''), 'placeholder' => 'Costo Unitario']) }}
        {!! $errors->first('costo_unitario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">producto <b>costo_unitario</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('precio') }}</label>
    <div>
        {{ Form::text('precio', $producto->precio, ['class' => 'form-control' .
        ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
        {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">producto <b>precio</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('codigo_barra') }}</label>
    <div>
        {{ Form::text('codigo_barra', $producto->codigo_barra, ['class' => 'form-control' .
        ($errors->has('codigo_barra') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Barra']) }}
        {!! $errors->first('codigo_barra', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">producto <b>codigo_barra</b> instruction.</small>
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
