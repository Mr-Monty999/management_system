<div>

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
    {{-- <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">بحث</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" wire:model="pattern"
            placeholder="بحث بالتاريخ">
    </div> --}}
    <h1>دوامات {{ $person->name }}</h1>
    <h2>مجموع الدوامات = {{ $personWorkTimesCount }}</h2>
    <h2>مجموع الغياب = {{ $personUnAttendTimesCount }}</h2>

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>الدوام</th>
                <th>التاريخ</th>
                <th>ملاحظة</th>
                <th>الأحداث</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($personWorkTimes as $personWorkTime)
                <tr>
                    @if ($personWorkTime->is_present == 1)
                        <td>حاضر</td>
                    @else
                        <td>غائب</td>
                    @endif
                    <td>{{ date('Y-m-d', strtotime($personWorkTime->date)) }}</td>
                    <td>{{ $personWorkTime->note }}</td>
                    <td>
                        <button class="btn btn-warning text-white mar-5">تعديل</button>
                        <button class="btn btn-danger text-white mar-5">حذف</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {!! $personWorkTimes->links() !!}

</div>
