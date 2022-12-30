@extends('layouts.main')

@section('content')
    <div class="row mar-50">
        <form action="{{ route('people.borrows.update', [$person->id, $personBorrow->id]) }}" method="post">
            @csrf
            @method('put')
            @if (Session::has('success'))
                <div class="alert alert-success text-center col-7 offset-2">{{ session('success') }}</div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger text-center col-7 offset-2">{{ session('error') }}</div>
            @endif
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger text-center col-7 offset-2">{{ $error }}</div>
            @endforeach
            {{-- <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">الإسم</label>
                <input type="text" value="{{ old('name') }}" name="name" class="form-control"
                    id="exampleFormControlInput1" placeholder="الإسم">
            </div> --}}
            <h2>تعديل سلفية رقم {{ $personBorrow->id }} ل{{ $person->name }}</h2>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">المبلغ</label>
                <input type="text" value="{{ $personBorrow->money_amount }}" name="money_amount" class="form-control"
                    id="exampleFormControlInput1" placeholder="المبلغ">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">التاريخ</label>
                <input type="date" value="{{ date('Y-m-d', strtotime($personBorrow->date)) }}" name="date"
                    class="form-control" id="exampleFormControlInput1" placeholder="التاريخ">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput5" class="form-label">ملاحظة</label>
                <textarea type="note" name="note" class="form-control" id="exampleFormControlInput1" id="" cols="30"
                    rows="10">{{ $personBorrow->note }}</textarea>
            </div>
            <button type="submit" class="btn btn-success text-white offset-4">تعديل</button>
            <a href="{{ route('people.index') }}" class="btn btn-dark text-white">عرض جميع الأفراد</a>
            <a href="{{ route('people.borrows.index', $person->id) }}" class="btn btn-dark text-white">عرض جميع
                السلفيات</a>



        </form>
    </div>
@endsection
