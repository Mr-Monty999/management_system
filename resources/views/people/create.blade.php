@extends('layouts.main')

@section('content')
    <div class="row mar-50">
        <form action="{{ route('people.store') }}" method="post">
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
            <h1>إضافة فرد جديد</h1>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">الإسم</label>
                <input type="text" value="{{ old('name') }}" name="name" class="form-control"
                    id="exampleFormControlInput1" placeholder="الإسم">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">النوع</label>
                <select class="form-select" name="gender" aria-label="النوع">
                    <option value="ذكر">ذكر</option>
                    <option value="أنثى">أنثى</option>
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
            <button type="submit" class="btn btn-success text-white offset-4">إضافة</button>
            <a href="{{ route('people.index') }}" class="btn btn-dark text-white">عرض جميع الأفراد</a>



        </form>
    </div>
@endsection
