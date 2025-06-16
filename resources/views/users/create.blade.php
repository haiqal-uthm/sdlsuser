@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New User</h2>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        @include('users.form')

        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
@endsection
