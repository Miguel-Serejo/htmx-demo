@extends('layouts.app')

@section('content')
    <h1>More than just clicks</h1>
    <p>Triggers allow you to specify when an htmx request should be made.<br />
        Any event can be used as a trigger</p>
    <p>You can also use filters and modifiers to customize the trigger:
    <pre><code>&lt;button hx-get="/demos/triggers" 
        hx-target="#result" 
        hx-trigger="click[ctrlKey] delay:1s"
&gt;Click me&lt;/button&gt;</code></pre>
    <form>
        <button hx-get="/demos/triggers" hx-target="#result" hx-trigger="click[ctrlKey] delay:1s">Ctrl + Click me</button>
    </form>
    <div hx-get="/demos/triggers/result" hx-trigger="load, every 5s" id="result">I reset every 5 seconds</div>
    <p>Also, the result div resets itself every 5 seconds:</p>
    <pre><code>&lt;div hx-get="/demos/blank" hx-trigger="every 5s" id="result"&gt;This is the result div&lt;/div&gt;</code></pre>
@endsection

@section('links')
    <a class="previous" href="/targets">Previous</a>
    <a class="next" href="/swap">Next</a>
@endsection
