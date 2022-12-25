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
            @foreach ($stocks as $stock)
                <tr>
                    <td>{{ $stock->name }}</td>
                    <td>{{ $stock->gender }}</td>
                    <td>
                        @if ($stock->birthdate)
                            {{ date('Y-m-d', strtotime($stock->birthdate)) }}
                        @endif
                    </td>
                    <td>
                        @if ($stock->hiredate)
                            {{ date('Y-m-d', strtotime($stock->hiredate)) }}
                        @endif
                    </td>

                    <td>{{ $stock->national_number }}</td>
                    <td>
                        <a class="btn btn-success text-white mar-5"
                            href="{{ route('stocks.worktimes.index', $stock->id) }}">عرض جميع
                            الدوامات</a>
                        <a href="{{ route('stocks.borrows.index', $stock->id) }}"
                            class="btn btn-success text-white mar-5">عرض جميع السلفيات</a>
                        <a class="btn btn-success text-white mar-5"
                            href="{{ route('stocks.worktimes.create', $stock->id) }}">إضافة
                            دوام</a>
                        <a href="{{ route('stocks.borrows.create', $stock->id) }}"
                            class="btn btn-success text-white mar-5">إضافة سلفية</a>
                        <a href="{{ route('stocks.edit', $stock->id) }}"
                            class="btn btn-warning text-white mar-5">تعديل</a
                            href="{{ route('stocks.edit', $stock->id) }}">
                        <button class="btn btn-danger text-white mar-5"
                            wire:click="deleteStock({{ $stock->id }})">حذف</button>


                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {!! $stocks->links() !!}

</div>
