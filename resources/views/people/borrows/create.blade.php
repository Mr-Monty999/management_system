@extends('layouts.main')

@section('content')
    <div class="row mar-50">
        <form action="{{ route('people.borrows.store', $person->id) }}" method="post">
            @csrf

            <h2>إضافة سلفية ل{{ $person->name }}</h2>
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
                <label for="exampleFormControlInput1" class="form-label">المبلغ</label>
                <input type="text" value="{{ old('money_amount') }}" name="money_amount" class="form-control"
                    id="exampleFormControlInput1" placeholder="المبلغ">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">التاريخ</label>
                <input type="date" value="{{ old('date') }}" name="date" class="form-control"
                    id="exampleFormControlInput1" placeholder="التاريخ">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput5" class="form-label">ملاحظة</label>
                <textarea type="note" value="{{ old('note') }}" name="note" class="form-control" id="exampleFormControlInput1"
                    id="" cols="30" rows="10"></textarea>
            </div>

            <button type="submit" class="btn btn-success text-white offset-4">إضافة</button>
            <a href="{{ route('people.index') }}" class="btn btn-dark text-white">عرض جميع الأفراد</a>


        </form>
    </div>
@endsection
