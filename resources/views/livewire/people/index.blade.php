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
                <th>تاريخ الميلاد</th>
                <th>تاريخ التعيين</th>
                <th>الرقم الوطني</th>
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
                        <a href="{{ route('people.borrows.index', $person->id) }}"
                            class="btn btn-success text-white mar-5">عرض جميع السلفيات</a>
                        <a class="btn btn-success text-white mar-5"
                            href="{{ route('people.worktimes.create', $person->id) }}">إضافة
                            دوام</a>
                        <a href="{{ route('people.borrows.create', $person->id) }}"
                            class="btn btn-success text-white mar-5">إضافة سلفية</a>
                        <a href="{{ route('people.edit', $person->id) }}"
                            class="btn btn-warning text-white mar-5">تعديل</a
                            href="{{ route('people.edit', $person->id) }}">
                        <button class="btn btn-danger text-white mar-5"
                            wire:click="deletePerson({{ $person->id }})">حذف</button>


                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {!! $people->links() !!}

</div>
