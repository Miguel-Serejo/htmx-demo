@extends('layouts.app')

@section('content')
    <h1>Specifying a Target</h1>
    <p>The `hx-target` attribute allows you to specify where the response from an htmx request should be inserted into the DOM.</p>
    <p>In this example, the `hx-target` attribute specifies that the response from the htmx request should be inserted into the element with the ID of `result`.</p>
    <pre><code>&lt;button hx-get="/demos/targets" hx-target="#result"&gt;Click me&lt;/button&gt;</code></pre>
    <form>
        <button hx-get="/demos/targets" hx-target="#result">Click me</button>
    </form>
    <div id="result">This is the result div</div>
@endsection

@section('links')
    <a class="previous" href="/basics">Previous</a>
    <a class="next" href="/triggers">Next</a>
@endsection
