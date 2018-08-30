@extends('layouts/app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga atque tenetur impedit eveniet placeat repellendus similique obcaecati odio, totam omnis, eaque quae. Sunt provident doloribus reprehenderit necessitatibus recusandae! Eveniet, dolores.</p>   
@endsection

@section('sidebar')
    @parent {{--@parent means print whatever was in the sidebar section in the layouts/app file--}}
    <p>Special addition for home</p>
@endsection