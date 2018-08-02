@extends('layouts.app')
@section('content')

<h1>Home</h1>
    <p>Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with padding-top: 60px; on the body > .container.

        Back to the default sticky footer minus the navbar</p>
@endsection

@section('sidebar')
    @parent

    <p>Tis is appended too the sidebar</p>
    @endsection