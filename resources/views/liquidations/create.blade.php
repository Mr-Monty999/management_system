@extends('layouts.main')

@section('content')
    <div class="row mar-50">
        <form action="{{ route('custodies.store') }}" method="post">
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
            <h1>إضافة عهدة جديدة</h1>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">المبلغ</label>
                <input type="text" value="{{ old('mone_amount') }}" name="mone_amount" class="form-control"
                    id="exampleFormControlInput1" placeholder="المبلغ">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">إسم المرسل</label>
                <input type="text" value="{{ old('sender') }}" name="sender" class="form-control"
                    id="exampleFormControlInput1" placeholder="إسم المرسل">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">إسم المستلم</label>
                <input type="text" value="{{ old('receiver') }}" name="receiver" class="form-control"
                    id="exampleFormControlInput1" placeholder="إسم المستلم">
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
            <a href="{{ route('custodies.index') }}" class="btn btn-dark text-white">عرض جميع التصفيات</a>


        </form>
    </div>
@endsection
