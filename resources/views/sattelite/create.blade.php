@extends('layouts.satellites')

@section('title', 'Create')
@section('content')
<div class="container mt-5">
    <h1>Add a new Sattelite</h1>
    <hr>
    <form action="{{ route('satellites-store')}}" method="POST">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name">
                <br>
                <label for="year">Year:</label>
                <input type="number" class="form-control" name="year">
                <br>
                <label for="value">Value:</label>
                <input type="number" class="form-control" name="value" step="any">
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="submit">
                </div>
            </div>
        </div>
    </form>
</div>


@endsection