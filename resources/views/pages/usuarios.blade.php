@extends('layouts.app')

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Usuarios'])
@include('layouts.footers.auth.footer')
   <usuarios-component/>
   @include('layouts.footers.auth.footer')
@endsection
