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
    <h1>سلفيات العهدة رقم {{ $custody->id }}</h1>
    <a href="{{ route('custodies.index') }}" class="btn btn-dark text-white offset-4 mar-5">عرض جميع العهد</a>
    <a href="{{ route('custodies.borrows.create', $custody->id) }}" class="btn btn-dark text-white mar-5">إضافة
        سلفية</a>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">بحث</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" wire:model="pattern"
            placeholder="بحث بإسم المستلف,المبلغ,ملاحظة">
    </div>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>الرقم</th>
                <th>المستلف</th>
                <th>المبلغ</th>
                <th>التاريخ</th>
                <th>ملاحظة</th>
                <th>الأحداث</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($custodyBorrows as $custodyBorrow)
                <tr>
                    <td>{{ $custodyBorrow->id }}</td>
                    <td>
                        {{ $custodyBorrow->borrower }}
                    </td>
                    <td>{{ number_format($custodyBorrow->money_amount) }}</td>

                    <td>
                        @if ($custodyBorrow->date)
                            {{ date('Y-m-d', strtotime($custodyBorrow->date)) }}
                        @endif
                    </td>
                    <td>{{ $custodyBorrow->note }}</td>
                    <td>

                        <a href="{{ route('custodies.borrows.edit', [$custody->id, $custodyBorrow->id]) }}"
                            class="btn btn-warning text-white mar-5">تعديل</a>
                        <button class="btn btn-danger text-white mar-5"
                            wire:click="deleteCustodyBorrow({{ $custodyBorrow->id }})">حذف</button>


                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {!! $custodyBorrows->links() !!}

</div>
