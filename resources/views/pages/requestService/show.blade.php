@extends('layout.master')
@section('title', 'View Tickets')
@section('content')
    <div class="container">
        <h2>Service Request</h2>
        <hr>
        <p>ID: {{ $ticket->id }}</p>
        <p>Work Area: {{ $ticket->workArea}}</p>
        <hr>
        <p>Service Area: {{ $ticket->serviceArea}}</p>
        <p>Hardware: {{ $ticket->hardwareType}}</p>
        <p>Software: {{ $ticket->softwareType}}</p>
        <hr>
        <p>Description: {{ $ticket->problemDescription}}</p>
        <p>Status: {{ $ticket->problemStatus }}</p>
        <p>Severity: {{ $ticket->problemSeverity }}</p>
        <p>Comments:<br> {{ $ticket->comments }}</p>
        <hr>
        <a href="{{ route('requestService.edit', $ticket->id) }}" class="btn btn-success">Update</a>
        <a href="{{ route('requestService.index') }}" class="btn btn-info">Back</a>
    </div>

@endsection