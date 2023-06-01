@extends('layouts.app')

@section('content')
    <h1>Something useful</h1>
    <p>A simple live search example.</p>
    <pre><code>&lt;form&gt;
    &lt;input type="text" id="search" name="search" hx-get="/search" hx-target="#results"&gt;
&lt;/form&gt;
&lt;div id="results"&gt;&lt;/div&gt;</code></pre>
    <form>
        <label for="search">Search PHP Portugal speakers</label>
        <input type="text" id="search" name="search" hx-get="/demos/search" hx-target="#results" hx-trigger="keyup">
    </form>
    <div id="results"></div>
@endsection

@section('links')
    <a class="previous" href="/swap">Previous</a>
    <a class="next" href="/server">Next</a>
@endsection
