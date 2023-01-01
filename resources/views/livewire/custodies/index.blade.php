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
    <h2>مجموع جميع السلفيات لكل العهد= {{ number_format($custodyAllBorrowsSum) }}</h2>
    <h2> مجموع منصرفات الميز لكل العهد= {{ number_format($custodySubsistenseSpendsSum) }}</h2>
    <h2>مجموع المنصرفات الأخرى لكل العهد= {{ number_format($custodyOtherSpendsSum) }}</h2>
    <h2>مجموع جميع (السلفيات + المنصرفات) لكل العهد= {{ number_format($custodyAllSpendsAndBorrowsSum) }}</h2>
    {{-- <div class="mb-3">
        <label for="typeSelect" class="form-label">نوع المخزون</label>
        <select class="form-control" wire:model="type" id="typeSelect">
            <option value="all">كل المخزون</option>
            <option value="in">داخل</option>
            <option value="out">خارج</option>
            <option value="recovered">راجع</option>

        </select>
    </div> --}}
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">بحث</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" wire:model="pattern"
            placeholder="بحث,المستلم,المرسل,المبلغ,ملاحظة">
    </div>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>الرقم</th>
                <th>المبلغ</th>
                <th>المرسل</th>
                <th>المستلم</th>
                <th>التاريخ</th>
                <th>مجموع السلفيات</th>
                <th>مجموع منصرفات الميز</th>
                <th>مجموع المنصرفات الأخرى</th>
                <th>المتبقي</th>
                <th>ملاحظة</th>
                <th>الأحداث</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($custodies as $custody)
                <tr>
                    <td>{{ $custody->id }}</td>

                    <td>{{ number_format($custody->money_amount) }}</td>
                    <td>
                        {{ $custody->sender }}
                    </td>
                    <td>{{ $custody->receiver }}</td>
                    <td>
                        @if ($custody->date)
                            {{ date('Y-m-d', strtotime($custody->date)) }}
                        @endif
                    </td>
                    @if ($custody->borrows_sum_money_amount != null)
                        {{ number_format($custody->borrows_sum_money_amount) }}
                    @else
                        <td>0</td>
                    @endif
                    @if ($custody->subsistence_spends_sum_money_amount != null)
                        <td>{{ number_format($custody->subsistence_spends_sum_money_amount) }}</td>
                    @else
                        <td>0</td>
                    @endif
                    @if ($custody->other_spends_sum_money_amount != null)
                        <td>{{ number_format($custody->other_spends_sum_money_amount) }}</td>
                    @else
                        <td>0</td>
                    @endif
                    <td>{{ number_format($custody->money_amount - ($custody->borrows_sum_money_amount + $custody->subsistence_spends_sum_money_amount + $custody->other_spends_sum_money_amount)) }}
                    </td>
                    <td>{{ $custody->note }}</td>
                    <td>
                        <a class="btn btn-success text-white mar-5"
                            href="{{ route('custodies.spends.index', $custody->id) }}">عرض جميع
                            المنصرفات</a>
                        <a href="{{ route('custodies.borrows.index', $custody->id) }}"
                            class="btn btn-success text-white mar-5">عرض جميع السلفيات</a>
                        <a class="btn btn-success text-white mar-5"
                            href="{{ route('custodies.spends.create', $custody->id) }}">إضافة
                            منصرف</a>
                        <a href="{{ route('custodies.borrows.create', $custody->id) }}"
                            class="btn btn-success text-white mar-5">إضافة سلفية</a>
                        <a href="{{ route('custodies.edit', $custody->id) }}"
                            class="btn btn-warning text-white mar-5">تعديل</a
                            href="{{ route('custodies.edit', $custody->id) }}">
                        <button class="btn btn-danger text-white mar-5"
                            wire:click="deleteCustody({{ $custody->id }})">حذف</button>


                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {!! $custodies->links() !!}

</div>
