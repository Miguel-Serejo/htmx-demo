@extends('layouts.app')

@section('content')
    <h1>Swap strategies</h1>
    <p>The `hx-swap` attribute allows you to specify different swap strategies:
    <ul id="strategies">
        <li hx-get="/demos/swap/innerHTML" hx-swap="innerHTML">innerHTML (default)</li>
        <li hx-get="/demos/swap/outerHTML" hx-swap="outerHTML">outerHTML</li>
        <li hx-get="/demos/swap/afterbegin" hx-swap="afterbegin">afterbegin</li>
        <li hx-get="/demos/swap/beforebegin" hx-swap="beforebegin">beforebegin</li>
        <li hx-get="/demos/swap/afterend" hx-swap="afterend">afterend</li>
        <li hx-get="/demos/swap/beforeend" hx-swap="beforeend">beforeend</li>
        <li hx-get="/demos/swap/delete" hx-swap="delete">delete</li>
    </ul>
    </p>
@endsection

@section('links')
    <a class="previous" href="/triggers">Previous</a>
    <a class="next" href="/search">Next</a>
@endsection
