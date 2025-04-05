@extends('layout.app')
@section('content')
    @include('component.MenuBar')
    @include('component.HomeConsultancy')
    @include('component.Footer')

    <script>
        (async () => {
            await Category();
            $(".preloader").delay(90).fadeOut(100).addClass('loaded');
        })()
    </script>
@endsection
