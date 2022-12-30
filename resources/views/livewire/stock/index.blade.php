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
        <label for="typeSelect" class="form-label">نوع المخزون</label>
        <select class="form-control" wire:model="type" id="typeSelect">
            <option value="all">كل المخزون</option>
            <option value="in">داخل</option>
            <option value="out">خارج</option>
            <option value="recovered">راجع</option>

        </select>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">بحث</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" wire:model="pattern"
            placeholder="بحث بالإسم,المستلم,المرسل,العدد">
    </div>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>إسم المخزون</th>
                <th>النوع</th>
                <th>المرسل</th>
                <th>المستلم</th>
                <th>العدد</th>
                <th>التاريخ</th>
                <th>ملاحظة</th>
                <th>الأحداث</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($stocks as $stock)
                <tr>
                    <td>{{ $stock->name }}</td>
                    <td>
                        @if ($stock->type == 'in')
                            داخل
                        @elseif($stock->type == 'out')
                            خارج
                        @else
                            راجع
                        @endif
                    </td>
                    <td>
                        {{ $stock->sender }}
                    </td>
                    <td>{{ $stock->receiver }}</td>
                    <td>{{ $stock->count }}</td>

                    <td>
                        @if ($stock->date)
                            {{ date('Y-m-d', strtotime($stock->date)) }}
                        @endif
                    </td>
                    <td>{{ $stock->note }}</td>
                    <td>

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
