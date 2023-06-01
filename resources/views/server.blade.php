@extends('layouts.app')

@section('content')
    <h1>What the Server Sees with htmx</h1>
    <p>When an htmx request is made, the server receives a standard HTTP request with some additional headers and parameters.</p>
    <form>
        @csrf
        <button hx-post="/demos/server"
            hx-prompt="Enter a string"
            hx-confirm="Are you sure?"
            hx-include="_token"
            hx-target="#result">Click me</button>
    </form>
    <div id="result"></div>
@endsection

@section('links')
    <a class="previous" href="/triggers">Previous</a>
    <a class="next" href="/more">Next</a>
@endsection
