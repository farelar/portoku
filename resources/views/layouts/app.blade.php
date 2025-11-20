@extends('layouts.base')

@section('body')
    @yield('content')
    
    @isset($slot)
        {{ $slot }}
        <h5>bisumllah</h5>
    @endisset
@endsection
