@extends('layouts.www')

@section('content')

@php
    return redirect()->route('docs.show', ['project' =>'slate', 'slug' => '', 'version' => '1.x'])
@endphp

@endsection
