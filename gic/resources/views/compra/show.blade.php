@extends('tablar::page')

@section('title', 'View Compra')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        View
                    </div>
                    <h2 class="page-title">
                        {{ __('Compra ') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('compras.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Compra List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    @if(config('tablar','display_alert'))
                        @include('tablar::common.alert')
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Compra Details</h3>
                        </div>
                        <div class="card-body">
                            
<div class="form-group">
<strong>Producto Id:</strong>
{{ $compra->producto_id }}
</div>
<div class="form-group">
<strong>Proveedor Id:</strong>
{{ $compra->proveedor_id }}
</div>
<div class="form-group">
<strong>Fecha Compra:</strong>
{{ $compra->fecha_compra }}
</div>
<div class="form-group">
<strong>Cantidad Comprada:</strong>
{{ $compra->cantidad_comprada }}
</div>
<div class="form-group">
<strong>Costo Unitario:</strong>
{{ $compra->costo_unitario }}
</div>
<div class="form-group">
<strong>Total Compra:</strong>
{{ $compra->total_compra }}
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


