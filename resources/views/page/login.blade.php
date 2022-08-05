@extends('layouts.base')
@section('title', 'Login - Hip Hop Hooray')
@section('content')


<div class="login d-flex flex-column justify-content-center align-items-center">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow rounded" style="width: 20rem;">
        <div class="login__header card-header text-uppercase d-flex justify-content-between align-items-center">
            <span>
                <i class="fa-solid fa-user"></i> Login
            </span>
            <span>
                <a class="text-white" href="{{ route('home') }}"><i class="fa-solid fa-house"></i></a>
            </span>
        </div>
        <div class="card-body">
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="">Email</label>
                    <input name="email" class="form-control" type="text" required>
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input name="password" class="form-control" type="password" required>
                </div>
                <button type="submit" class="btn btn-hiphop">Login</button>
            </form>
        </div>
    </div>

</div>

@endsection
