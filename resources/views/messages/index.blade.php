@extends('app')

@section('content')
    <div class="cover-container">
        <h1>My Message Board</h1>
    </div>
    @include('messages.add')
    @include('messages.list')
@endsection