@extends('layouts.login')

@section('content')
    <form style="margin-top: 8%" method="POST" action="{{ route('user.login.attempt') }}">
        @csrf
        <img src="{{ asset('assets/images/arkan.png') }}" alt="">
        <div class="form-group">
            <label for="username">إسم المستخدم</label>
            <input type="username" name="username" class="form-control" id="username" aria-describedby="userHelp"
                placeholder="إسم المستخدم">
        </div>
        <div class="form-group mar-5">
            <label for="password">كلمة المرور</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="كلمة المرور">
        </div>

        {{-- <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> --}}
        <button type="submit" class="btn btn-dark offset-3 mar-5">تسجيل دخول</button>
        @if (Session::has('success'))
            <div class="alert alert-success text-center offset-1">{{ session('success') }}</div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-danger text-center offset-1">{{ session('error') }}</div>
        @endif
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger text-center offset-1">{{ $error }}</div>
        @endforeach
    </form>
@endsection
