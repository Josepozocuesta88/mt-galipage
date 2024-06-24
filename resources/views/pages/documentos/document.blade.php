<!-- ============================================================== -->
<!-- CLIENTE: Para ver histórico de productos que ha comprado -->
<!-- ============================================================== -->
<!-- VER SI SE PUEDE MEZCLAR CON LA PAGINA DE PRODUCTOS DEL ADMINISTRADOR -->


@extends('layouts.app')

@section('content')
<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                        <li class="breadcrumb-item active">{{$doctip}}</li>
                    </ol>
                </div>
                <h4 class="page-title">{{$doctip}}</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    @if (session('error'))
    <div aria-live="polite" aria-atomic="true" style="position: fixed; top: 20px; right: 20px; z-index: 1050;">
        <div class="toast show bg-primary" data-bs-delay="5000">
            <div class="toast-header">
                <strong class="mr-auto text-primary">Alerta</strong>
                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Cerrar"></button>
            </div>
            <div class="toast-body text-white">
                {{ session('error') }}
            </div>
        </div>
    </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="tablaDocumentos" class="table table-centered w-100 dt-responsive nowrap"
                        data-doctip="{{ $doctip ?? '' }}">
                        <thead class="table-light">

                        </thead>
                        <tbody></tbody>
                    </table>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

</div> <!-- container -->
@endsection


@push('scripts')
<script src="{{ asset('js/Ajax/document.js') }}"></script>
@endpush