@extends('layouts.main')

@section('content')
    <div class="row mar-50">
        <form action="{{ route('custodies.spends.update', [$custody->id, $custodySpend->id]) }}" method="post">
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
            <h1>تعديل منصرف رقم {{ $custodySpend->id }} للعهدة رقم {{ $custody->id }}</h1>

            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">النوع</label>
                <select class="form-select" name="type" aria-label="النوع">
                    <option value="subsistence" @if ($custodySpend->type == 'subsistence') selected @endif>ميز</option>
                    <option value="others" @if ($custodySpend->type == 'others') selected @endif>أخرى</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">إسم المسؤول</label>
                <input type="text" value="{{ $custodySpend->responsible }}" name="responsible" class="form-control"
                    id="exampleFormControlInput1" placeholder="إسم المسؤول">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput5" class="form-label">المبلغ</label>
                <input type="number" value="{{ $custodySpend->money_amount }}" name="money_amount" class="form-control"
                    id="exampleFormControlInput1" placeholder="المبلغ">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">التاريخ</label>
                <input type="date" value="{{ date('Y-m-d', strtotime($custodySpend->date)) }}" name="date"
                    class="form-control" id="exampleFormControlInput1" placeholder="التاريخ">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput5" class="form-label">ملاحظة</label>
                <textarea type="note" name="note" class="form-control" id="exampleFormControlInput1" id="" cols="30"
                    rows="10">{{ $custodySpend->note }}
                </textarea>
            </div>

            <button type="submit" class="btn btn-success text-white offset-4">تعديل</button>
            <a href="{{ route('custodies.spends.index', $custody->id) }}" class="btn btn-dark text-white">عرض جميع
                المنصرفات</a>
            <a href="{{ route('custodies.index') }}" class="btn btn-dark text-white">عرض جميع
                العهد</a>


        </form>
    </div>
@endsection
