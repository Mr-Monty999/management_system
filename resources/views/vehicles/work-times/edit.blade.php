@extends('layouts.main')

@section('content')
    <div class="row mar-50">
        <form action="{{ route('vehicles.worktimes.update', [$vehicle->id, $vehicleWorkTime->id]) }}" method="post">
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

            <h1>تعديل دوام للآلية {{ $vehicle->name }} رقم {{ $vehicle->number }}</h1>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">إسم السائق</label>
                <input type="text" value="{{ $vehicleWorkTime->driver }}" name="driver" class="form-control"
                    id="exampleFormControlInput1" placeholder="إسم السائق">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">الحضور</label>
                <select class="form-select" name="is_present" aria-label="الحضور">
                    <option value="1" @if ($vehicleWorkTime->is_present == 1) selected @endif>حاضر</option>
                    <option value="0"@if ($vehicleWorkTime->is_present == 0) selected @endif>غائب</option>

                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">عدد الساعات الأساسية</label>
                <input type="number" value="{{ $vehicleWorkTime->hours_count }}" name="hours_count" class="form-control"
                    id="exampleFormControlInput1" placeholder="عدد الساعات الأساسية">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">عدد الساعات الإضافية</label>
                <input type="number" value="{{ $vehicleWorkTime->overtime }}" name="overtime" class="form-control"
                    id="exampleFormControlInput1" placeholder="عدد الساعات الإضافية">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">التاريخ</label>
                <input type="date" value="{{ date('Y-m-d', strtotime($vehicleWorkTime->date)) }}" name="date"
                    class="form-control" id="exampleFormControlInput1" placeholder="التاريخ">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput5" class="form-label">ملاحظة</label>
                <textarea type="note" name="note" class="form-control" id="exampleFormControlInput1" id="" cols="30"
                    rows="10">{{ $vehicleWorkTime->note }}</textarea>
            </div>
            <button type="submit" class="btn btn-success text-white offset-4">تعديل</button>
            <a href="{{ route('vehicles.worktimes.index', $vehicle->id) }}" class="btn btn-dark text-white">عرض جميع
                الدوامات</a>
            <a href="{{ route('vehicles.index') }}" class="btn btn-dark text-white">عرض جميع الآليات</a>



        </form>
    </div>
@endsection
