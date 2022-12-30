@extends('layouts.main')

@section('content')
    <div class="row mar-50">
        <form action="{{ route('vehicles.store') }}" method="post">
            @csrf
            @if (Session::has('success'))
                <div class="alert alert-success text-center col-7 offset-2">{{ session('success') }}</div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger text-center col-7 offset-2">{{ session('error') }}</div>
            @endif
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger text-center col-7 offset-2">{{ $error }}</div>
            @endforeach
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">إسم الآلية</label>
                <input type="text" value="{{ old('name') }}" name="name" class="form-control"
                    id="exampleFormControlInput1" placeholder="إسم الآلية">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput5" class="form-label">رقم الآلية</label>
                <input type="text" value="{{ old('number') }}" name="number" class="form-control"
                    id="exampleFormControlInput1" placeholder="رقم الآلية">
            </div>

            <button type="submit" class="btn btn-success text-white offset-4">إضافة</button>
            <a href="{{ route('vehicles.index') }}" class="btn btn-dark text-white">عرض جميع الآليات</a>



        </form>
    </div>
@endsection
