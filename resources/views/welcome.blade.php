@extends('layouts.app')

@section('content')
<div class="my-5">
    @include('users/index')
    @include('users/foodshow')
    <footer class="footer">
        &#169 Toaso Albert Attila
    </footer>
</div>

@endsection