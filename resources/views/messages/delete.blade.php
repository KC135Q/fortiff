@extends('app')

@section('content')
    <div class="cover-container">
        <h1>Deleting... {{ $message->email }}</h1>
        <div class="footer">
            <a href="/list">Main Board</a>
        </div>
    </div>
@endsection