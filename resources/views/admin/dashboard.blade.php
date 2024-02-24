@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-start">Welcome {{ Auth::user()->name }}, you're in the Dashboard Home</h1>
        </div>
    </div>
</div>
@endsection