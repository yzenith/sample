<<<<<<< HEAD
@extends('layouts.default')
=======
@extends('layout.default')
>>>>>>> sign-up
@section('title',$user->name)
@section('content')
{{ $user->name }} - {{ $user->email }}
@stop
