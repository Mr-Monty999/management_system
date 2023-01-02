@extends('layouts.main')

@section('content')
    <div class="row mar-50">
        <form action="{{ route('custodies.borrows.update', [$custody->id, $custodyBorrow->id]) }}" method="post">
            @csrf
            @method('put')
            <h2>تعديل سلفية رقم {{ $custodyBorrow->id }} للعهدة رقم {{ $custody->id }}</h2>
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
                <label for="exampleFormControlInput1" class="form-label">إسم المستلف</label>
                <input type="text" value="{{ $custodyBorrow->borrower }}" name="borrower" class="form-control"
                    id="exampleFormControlInput1" placeholder="إسم المستلف">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">المبلغ</label>
                <input type="number" value="{{ $custodyBorrow->money_amount }}" name="money_amount" class="form-control"
                    id="exampleFormControlInput1" placeholder="المبلغ">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">التاريخ</label>
                <input type="date" value="{{ date('Y-m-d', strtotime($custodyBorrow->date)) }}" name="date"
                    class="form-control" id="exampleFormControlInput1" placeholder="التاريخ">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput5" class="form-label">ملاحظة</label>
                <textarea type="note" name="note" class="form-control" id="exampleFormControlInput1" id="" cols="30"
                    rows="10">{{ $custodyBorrow->note }}</textarea>
            </div>

            <button type="submit" class="btn btn-success text-white offset-4">تعديل</button>
            <a href="{{ route('custodies.index') }}" class="btn btn-dark text-white">عرض جميع العهد</a>
            <a href="{{ route('custodies.borrows.index', $custody->id) }}" class="btn btn-dark text-white">عرض جميع
                السلفيات</a>


        </form>
    </div>
@endsection
