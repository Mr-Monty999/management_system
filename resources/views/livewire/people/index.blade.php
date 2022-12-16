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
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">بحث</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" wire:model="pattern"
            placeholder="بحث بالإسم,الرقم الوطني,المرتب">
    </div>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>الإسم</th>
                <th>نوع الفرد</th>
                <th>الرقم الوطني</th>
                <th>تاريخ الميلاد</th>
                <th>تاريخ التعيين</th>
                <th>الأحداث</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($people as $person)
                <tr>
                    <td>{{ $person->name }}</td>
                    <td>{{ $person->gender }}</td>
                    <td>{{ date('Y-m-d', strtotime($person->birthdate)) }}</td>
                    <td>{{ date('Y-m-d', strtotime($person->hiredate)) }}</td>

                    <td>{{ $person->national_number }}</td>
                    <td>
                        <a class="btn btn-success text-white mar-5"
                            href="{{ route('people.worktimes.index', $person->id) }}">عرض جميع
                            الدوامات</a>
                        <button class="btn btn-success text-white mar-5">عرض جميع السلفيات</button>
                        <a class="btn btn-success text-white mar-5"
                            href="{{ route('people.worktimes.create', $person->id) }}">إضافة
                            دوام</a>
                        <button class="btn btn-success text-white mar-5">إضافة سلفية</button>
                        <button class="btn btn-warning text-white mar-5">تعديل</button>
                        <button class="btn btn-danger text-white mar-5">حذف</button>


                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {!! $people->links() !!}

</div>
