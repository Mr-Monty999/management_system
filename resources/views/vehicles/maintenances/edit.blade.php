@extends('layouts.main')

@section('content')
    <div class="row mar-50">
        <form action="{{ route('vehicles.maintenances.update', [$vehicle->id, $vehicleMaintenance->id]) }}" method="post">
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

            <h1>تعديل صيانة للآلية {{ $vehicle->name }} رقم {{ $vehicle->number }}</h1>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">إسم السائق</label>
                <input type="text" value="{{ $vehicleMaintenance->driver }}" name="driver" class="form-control"
                    id="exampleFormControlInput1" placeholder="إسم السائق">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">إسم المسؤول</label>
                <input type="text" value="{{ $vehicleMaintenance->responsible }}" name="responsible" class="form-control"
                    id="exampleFormControlInput1" placeholder="إسم المسؤول">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">المبلغ</label>
                <input type="number" value="{{ $vehicleMaintenance->money_amount }}" name="money_amount"
                    class="form-control" id="exampleFormControlInput1" placeholder="المبلغ">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">التاريخ</label>
                <input type="date" value="{{ date('Y-m-d', strtotime($vehicleMaintenance->date)) }}" name="date"
                    class="form-control" id="exampleFormControlInput1" placeholder="التاريخ">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput5" class="form-label">ملاحظة</label>
                <textarea type="note" name="note" class="form-control" id="exampleFormControlInput1" id="" cols="30"
                    rows="10">{{ $vehicleMaintenance->note }}</textarea>
            </div>
            <button type="submit" class="btn btn-success text-white offset-4">تعديل</button>
            <a href="{{ route('vehicles.maintenances.index', $vehicle->id) }}" class="btn btn-dark text-white">عرض جميع
                الصيانات</a>
            <a href="{{ route('vehicles.index') }}" class="btn btn-dark text-white">عرض جميع الآليات</a>

        </form>
    </div>
@endsection
