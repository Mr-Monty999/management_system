@extends('layouts.main')

@section('content')
    <div class="row mar-50">
        <form action="{{ route('custodies.spends.store', $custody->id) }}" method="post">
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
            <h1>إضافة منصرف جديد للعهدة رقم {{ $custody->id }}</h1>


            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">النوع</label>
                <select class="form-select" name="type" aria-label="النوع">
                    <option value="subsistence">ميز</option>
                    <option value="others">أخرى</option>

                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">إسم المسؤول</label>
                <input type="text" value="{{ old('responsible') }}" name="responsible" class="form-control"
                    id="exampleFormControlInput1" placeholder="إسم المسؤول">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput5" class="form-label">المبلغ</label>
                <input type="number" value="{{ old('money_amount') }}" name="money_amount" class="form-control"
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
            <a href="{{ route('custodies.spends.index', $custody->id) }}" class="btn btn-dark text-white">عرض جميع
                المنصرفات</a>
            <a href="{{ route('custodies.index') }}" class="btn btn-dark text-white">عرض جميع
                العهد</a>


        </form>
    </div>
@endsection
