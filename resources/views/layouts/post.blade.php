@extends('layouts.app')
  @yield('content')
@section('layout-holder')


  @guest      
    @include('inc.login-banner')
  @endguest

@endsection