{{-- @extends('adminlte::page') --}}
<div>
    <label for="select2">Select2 Demo</label>
    <select id="select2" wire:model="selectedItems" multiple="multiple">
        @foreach ($options as $option)
            <option value="{{ $option }}">{{ $option }}</option>
        @endforeach
    </select>
</div>


@section('js')
<script>
    $(document).ready(function () {
        $('#select2').select2();

        $('#select2').on('change', function (e) {
            @this.set('selectedItems', $(this).val());
        });
    });
</script>
@stop
{{-- @push('scripts')
    <script>
        $(document).ready(function () {
            $('#select2').select2();

            $('#select2').on('change', function (e) {
                @this.set('selectedItems', $(this).val());
            });
        });
    </script>
@endpush --}}
