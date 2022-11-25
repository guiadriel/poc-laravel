@extends('layouts.app')

@section('content')

    <div class="container">
        Posts Component

        <list-mix posts="{{json_encode($posts)}}" />
    </div>

@endsection
