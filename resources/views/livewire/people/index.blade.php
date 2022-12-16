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

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>الإسم</th>
                <th>نوع الفرد</th>
                <th>الرقم الوطني</th>
                <th>الأحداث</th>
            </tr>

        </thead>
        <tbody>
            <tr>
                <td>منتصر محمد عبدالله ادم محمد عثمان</td>
                <td>عامل</td>
                <td>1444444488888888888</td>
                <td>
                    <button class="btn btn-success text-white mar-5">عرض جميع الدوامات</button>
                    <button class="btn btn-success text-white mar-5">عرض جميع السلفيات</button>
                    <button class="btn btn-success text-white mar-5">إضافة دوام</button>
                    <button class="btn btn-success text-white mar-5">إضافة سلفية</button>

                </td>
            </tr>
        </tbody>
    </table>

</div>
