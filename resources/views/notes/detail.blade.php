@extends('layout')

@section('content')
    <h2>Detail of Note {{ $note->id }} </h2>
    <p>
        <a href="{{ url('notes/create') }}">Add a note</a>
    </p>
    <ul class="list-group">

        <li class="list-group-item">
            @if ($note->category)
                <span class="label label-info">{{ $note->category->name }}</span>
            @else
                <span class="label label-info">Others</span>
            @endif
            {{ $note->note }}
        </li>
    
    </ul>
@endsection