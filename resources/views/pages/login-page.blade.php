@extends('layout.app')
@section('content')
    @include('component.MenuBar')
    @include('component.Login')
    <script>
        (async () => {
            $(".preloader").delay(70).fadeOut(100).addClass('loaded');
        })()
    </script>
@endsection

