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
    <h1>منصرفات العهدة رقم {{ $custody->id }}</h1>
    <a href="{{ route('custodies.index') }}" class="btn btn-dark text-white offset-4 mar-5">عرض جميع العهد</a>
    <a href="{{ route('custodies.spends.create', $custody->id) }}" class="btn btn-dark text-white mar-5">إضافة
        منصرف</a>
    <div class="mb-3">
        <label for="typeSelect" class="form-label">نوع المنصرف</label>
        <select class="form-control" wire:model="type" id="typeSelect">
            <option value="all">كل المنصرفات</option>
            <option value="subsistence">ميز</option>
            <option value="others">أخرى</option>

        </select>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">بحث</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" wire:model="pattern"
            placeholder="بحث بالمسؤول,المبلغ,ملاحظة">
    </div>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>الرقم</th>
                <th>نوع المنصرف</th>
                <th>المسؤول</th>
                <th>المبلغ</th>
                <th>التاريخ</th>
                <th>ملاحظة</th>
                <th>الأحداث</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($custodySpends as $custodySpend)
                <tr>
                    <td>{{ $custodySpend->id }}</td>
                    <td>
                        @if ($custodySpend->type == 'subsistence')
                            ميز
                        @else
                            أخرى
                        @endif
                    </td>
                    <td>
                        {{ $custodySpend->responsible }}
                    </td>
                    <td>{{ $custodySpend->money_amount }}</td>

                    <td>
                        @if ($custodySpend->date)
                            {{ date('Y-m-d', strtotime($custodySpend->date)) }}
                        @endif
                    </td>
                    <td>{{ $custodySpend->note }}</td>
                    <td>

                        <a href="{{ route('custodies.spends.edit', [$custody->id, $custodySpend->id]) }}"
                            class="btn btn-warning text-white mar-5">تعديل</a>
                        <button class="btn btn-danger text-white mar-5"
                            wire:click="deleteCustodySpend({{ $custodySpend->id }})">حذف</button>


                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {!! $custodySpends->links() !!}

</div>
