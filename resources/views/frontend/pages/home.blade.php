@extends('frontend.layouts.master')
@section('title', 'Home Page')
@section('styles')
    <style>
        h1 {
            font-family: 'figtree', sans-serif;
            font-size: 3rem;
            color: #992525;
            text-align: center;
            margin-top: 100px;
        }
        p {
            font-family: 'figtree', sans-serif;
            font-size: 1.5rem;
            color: #992525;
            text-align: center;
            margin-top: 100px;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Home Page Content</h1>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        console.log('Home Page');
    </script>
@endsection
