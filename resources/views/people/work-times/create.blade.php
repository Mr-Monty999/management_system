@extends('layouts.main')

@section('content')
    <div class="row mar-50">
        <form action="{{ route('people-worktimes.store') }}" method="post">
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
                <label for="exampleFormControlInput1" class="form-label">الإسم</label>
                <input type="text" value="{{ old('name') }}" name="name" class="form-control"
                    id="exampleFormControlInput1" placeholder="الإسم">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">الحضور</label>
                <select class="form-select" name="is_present" aria-label="الحضور">
                    <option value="true">حاضر</option>
                    <option value="false">غائب</option>
                </select>
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


        </form>
    </div>
@endsection
