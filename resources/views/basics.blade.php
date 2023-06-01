@extends('layouts.app')

@section('content')
    <h1>Basic Usage of htmx</h1>
    <pre><code>&lt;button hx-get="/path/to/resource"&gt;Click me&lt;/button&gt;</code></pre>
    <p>In this example, the <code>hx-get</code> attribute specifies that the button should make an HTTP GET request to the specified URL when it is clicked.</p>
    <p>When the response is received, htmx will replace the contents of the button with the response body.</p>
    <form>
        <button hx-get="/demos/basic_button">Click me</button>
    </form>
@endsection

@section('links')
    <a class="previous" href="/begin">Previous</a>
    <a class="next" href="/targets">Next</a>
@endsection
