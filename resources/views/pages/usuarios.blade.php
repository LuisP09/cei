@extends('layouts.app')

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Usuarios'])
   <usuarios-component/>
@endsection
