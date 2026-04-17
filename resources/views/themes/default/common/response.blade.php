@php
    $types = ['success', 'error', 'info', 'warning'];
@endphp

<script>
    document.addEventListener('DOMContentLoaded', function() {

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error(@json($error));
            @endforeach
        @endif

        @foreach ($types as $type)

            @if (session($type) === true && session()->has('message'))
                toastr.{{ $type }}(@json(session('message')));
            @endif

            @if (session()->has($type) && session($type) !== true)
                toastr.{{ $type }}(@json(session($type)));
            @endif
        @endforeach

    });
</script>
