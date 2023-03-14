@extends('dmc.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
<h1>DMC :Document Management Control</h1>
<hr />
</div>
</div>

<div class="row">
    <div class="col-5">
        <div class="row">

        <div class="card">
    <div class="card-header">
        My Inbox
    </div>
    <div class="card-body">
        <table class="table">
            <tr><td>Create Date</td><td>Title</td></tr>
            <tr><td>11-02-2566</td><td>Document Name</td></tr>
        </table>
        </div>
    </div>
</div>
<div class="row">
            <div class="card">
        <h5 class="card-header">Todo List</h5>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
</div>
<div class="col-7">
<div class="card">
        <h5 class="card-header">Todo List</h5>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
</div>
</div>
</div>
@endsection