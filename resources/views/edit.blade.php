@extends('layouts.layout')

@section('content')
    <edit-claim id="{{ app('request')->input('id') }}"></edit-claim>
@endsection
