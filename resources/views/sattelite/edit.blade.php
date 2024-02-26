@extends('layouts.satellites')

@section('title', 'Edit')
@section('content')
<div class="container mt-5">
    <h1>Edit a Satellite</h1>
    <hr>
    <form action="{{ route('satellites-update',['id'=>$sattelites->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="{{$sattelites->name}}">
                <br>
                <label for="year">Year:</label>
                <input type="number" class="form-control" name="year" value="{{$sattelites->year}}">
                <br>
                <label for="value">Value:</label>
                <input type="number" class="form-control" name="value" value="{{$sattelites->value}}">
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success" value="submit">
                </div>
            </div>
        </div>
    </form>
</div>


@endsection