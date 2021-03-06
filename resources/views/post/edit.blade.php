@extends('layouts.app')
@section('content')

<h1>Edit</h1>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


{!! Form::open(['route'=>'post.store']) !!}

@include('post._form')

{!! Form::close() !!}

@endsection