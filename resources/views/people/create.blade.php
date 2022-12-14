@extends('layouts.main')

@section('content')
    <div class="row">
        <form action="{{ route('people.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">الإسم</label>
                <input type="text" value="{{ old('name') }}" name="name" class="form-control"
                    id="exampleFormControlInput1" placeholder="الإسم">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">النوع</label>
                <select class="form-select" aria-label="النوع">
                    <option value="male">ذكر</option>
                    <option value="female">أنثى</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">تاريخ الميلاد</label>
                <input type="date" value="{{ old('birthdate') }}" name="birthdate" class="form-control"
                    id="exampleFormControlInput1" placeholder="تاريخ الميلاد">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput4" class="form-label">تاريخ التعيين</label>
                <input type="date" value="{{ old('hiredate') }}" name="hiredate" class="form-control"
                    id="exampleFormControlInput1" placeholder="تاريخ العيين">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput5" class="form-label">المرتب</label>
                <input type="number" value="{{ old('salary') }}" name="salary" class="form-control"
                    id="exampleFormControlInput1" placeholder="المرتب">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput5" class="form-label">الرقم الوطني</label>
                <input type="number" value="{{ old('national_number') }}" name="national_number" class="form-control"
                    id="exampleFormControlInput1" placeholder="الرقم الوطني">
            </div>
            <button type="button" type="submit" class="btn btn-success text-white offset-4">إضافة</button>

            @if (Session::has('success'))
                <div class="alert alert-success">{{ $success }}</div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger">{{ $error }}</div>
            @endif
        </form>
    </div>
@endsection
