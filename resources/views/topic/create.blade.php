@extends('layouts.main')

@section('content')
    {{ Form::model($certification, array('route' => 'certification.create', $cetification->id)) }}

    <!-- name -->
    {{ Form::label('title', 'Name') }}
    {{ Form::text('title') }}

    <!-- email -->
    {{ Form::label('description', 'Description') }}
    {{ Form::desctiption('desctiption') }}

    {{ Form::submit('Update Nerd!') }}

    {{ Form::close() }}

@endsection