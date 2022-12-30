@extends('layouts.main')

@section('content')
    <div class="row mar-50">
        <form action="{{ route('people.worktimes.update', [$person->id, $personWorkTime->id]) }}" method="post">
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
            <h2>تعديل دوام رقم {{ $personWorkTime->id }} ل{{ $person->name }}</h2>
            <input type="text" hidden value="{{ $person->id }}" name="person_id">
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">الحضور</label>
                <select class="form-select" name="is_present" aria-label="الحضور">
                    <option value="1" @if ($personWorkTime->is_present == 1) selected @endif>حاضر</option>
                    <option value="0"@if ($personWorkTime->is_present == 0) selected @endif>غائب</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">التاريخ</label>
                <input type="date" value="{{ date('Y-m-d', strtotime($personWorkTime->date)) }}" name="date"
                    class="form-control" id="exampleFormControlInput1" placeholder="التاريخ">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput5" class="form-label">ملاحظة</label>
                <textarea type="note" name="note" class="form-control" id="exampleFormControlInput1" id="" cols="30"
                    rows="10">{{ $personWorkTime->note }}</textarea>
            </div>
            <button type="submit" class="btn btn-success text-white offset-4">تعديل</button>
            <a href="{{ route('people.index') }}" class="btn btn-dark text-white">عرض جميع الآليات</a>



        </form>
    </div>
@endsection
