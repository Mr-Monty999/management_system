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
            placeholder="بحث بالإسم,رقم الآلية">
    </div>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>إسم الآلية</th>
                <th>رقم الآلية</th>
                <th>الأحداث</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($vehicles as $vehicle)
                <tr>
                    <td>{{ $vehicle->name }}</td>
                    <td>{{ $vehicle->number }}</td>
                    <td>
                        <a class="btn btn-success text-white mar-5"
                            href="{{ route('vehicles.worktimes.index', $vehicle->id) }}">عرض جميع
                            الدوامات</a>
                        <a href="{{ route('vehicles.fuels.index', $vehicle->id) }}"
                            class="btn btn-success text-white mar-5">عرض جميع الوقود</a>
                        <a href="{{ route('vehicles.maintenances.index', $vehicle->id) }}"
                            class="btn btn-success text-white mar-5">عرض جميع الصيانات</a>
                        <a href="{{ route('vehicles.production-movements.index', $vehicle->id) }}"
                            class="btn btn-success text-white mar-5">عرض جميع حراك الأنتاج</a>
                        <a class="btn btn-success text-white mar-5"
                            href="{{ route('vehicles.worktimes.create', $vehicle->id) }}">إضافة
                            دوام</a>
                        <a href="{{ route('vehicles.fuels.create', $vehicle->id) }}"
                            class="btn btn-success text-white mar-5">إضافة وقود</a>
                        <a href="{{ route('vehicles.maintenances.create', $vehicle->id) }}"
                            class="btn btn-success text-white mar-5">إضافة صيانة</a>
                        <a href="{{ route('vehicles.production-movements.create', $vehicle->id) }}"
                            class="btn btn-success text-white mar-5">إضافة حراك إنتاج</a>
                        <a href="{{ route('vehicles.edit', $vehicle->id) }}"
                            class="btn btn-warning text-white mar-5">تعديل</a
                            href="{{ route('vehicles.edit', $vehicle->id) }}">
                        <button class="btn btn-danger text-white mar-5"
                            wire:click="deleteVehicle({{ $vehicle->id }})">حذف</button>


                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {!! $vehicles->links() !!}

</div>
