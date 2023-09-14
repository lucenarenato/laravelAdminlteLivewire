@extends('adminlte::page')
<!-- Substitua 'layout.app' pelo nome do seu layout principal -->

<head>
    <link rel="stylesheet" href="/css/table.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{-- <link href="{{ asset('css/select2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/select2-dark-adminlte-theme.css') }}" rel="stylesheet" type="text/css" /> --}}
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"/> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/i18n/pt-BR.js"></script>

    <link href="{{ asset('css/adminlte-clear-button.css') }}" rel="stylesheet" type="text/css" />

</head>
@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('js/table.js') }}"></script>
    <script src="{{ asset('js/adminlte-clear-button.js') }}"></script>

@endsection

@section('content')
    <div class="container">
        @livewire('select2-demo')
    </div>
@endsection

@section('js')
    <script>
        $( "#dropdown" ).select2({
            theme: "dark-adminlte"
        });
        $('#name').select2();
        $('#name + .select2-container').clearbutton();
    </script>
@stop
