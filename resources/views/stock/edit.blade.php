@extends('layouts.main')

@section('content')
    <div class="row mar-50">
        <form action="{{ route('stocks.update', $stock->id) }}" method="post">
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
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">إسم المخزون</label>
                <input type="text" value="{{ $stock->name }}" name="name" class="form-control"
                    id="exampleFormControlInput1" placeholder="إسم المخزون">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">النوع</label>
                <select class="form-select" name="type" aria-label="النوع">
                    <option value="in" @if ($stock->type == 'in') selected @endif>داخل</option>
                    <option value="out" @if ($stock->type == 'out') selected @endif>خارج</option>
                    <option value="recovered" @if ($stock->type == 'recovered') selected @endif>راجع</option>

                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">إسم المرسل</label>
                <input type="text" value="{{ $stock->sender }}" name="sender" class="form-control"
                    id="exampleFormControlInput1" placeholder="إسم المرسل">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">إسم المستلم</label>
                <input type="text" value="{{ $stock->receiver }}" name="receiver" class="form-control"
                    id="exampleFormControlInput1" placeholder="إسم المستلم">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput5" class="form-label">العدد</label>
                <input type="text" value="{{ $stock->count }}" name="count" class="form-control"
                    id="exampleFormControlInput1" placeholder="العدد">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">التاريخ</label>
                <input type="date" value="{{ date('Y-m-d', strtotime($stock->date)) }}" name="date"
                    class="form-control" id="exampleFormControlInput1" placeholder="التاريخ">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput5" class="form-label">ملاحظة</label>
                <textarea type="note" name="note" class="form-control" id="exampleFormControlInput1" id="" cols="30"
                    rows="10">{{ $stock->note }}</textarea>
            </div>

            <button type="submit" class="btn btn-success text-white offset-4">تعديل</button>
            <a href="{{ route('stocks.index') }}" class="btn btn-dark text-white">عرض جميع المخزون</a>


        </form>
    </div>
@endsection
