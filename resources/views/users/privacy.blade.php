@extends('layouts.main')

@section('content')
    <div class="row mar-50">
        <form style="margin-top: 8%" class="d-flex flex-column justify-content-center align-items-center" method="POST"
            action="{{ route('users.privacy.update', $user->id) }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="username">إسم المستخدم</label>
                <input value="{{ $user->username }}" type="text" name="username" class="form-control" id="username"
                    placeholder="إسم المستخدم">
            </div>
            <div class="form-group mar-5">
                <label for="password">كلمة المرور</label>
                <input value="{{ $user->password }}" type="text" name="password" class="form-control" id="password"
                    placeholder="كلمة المرور">
            </div>

            {{-- <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> --}}
            <button type="submit" class="btn btn-warning mar-5">تعديل</button>
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
    </div>
@endsection
