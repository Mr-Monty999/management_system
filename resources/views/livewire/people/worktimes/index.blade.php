<div>


    {{-- <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">بحث</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" wire:model="pattern"
            placeholder="بحث بالتاريخ">
    </div> --}}
    <h1>دوامات {{ $person->name }}</h1>
    <h2>مجموع الدوامات = {{ number_format($personWorkTimesCount) }}</h2>
    <h2>مجموع الغياب = {{ number_format($personUnAttendTimesCount) }}</h2>
    <a href="{{ route('people.index') }}" class="btn btn-dark text-white offset-4 mar-5">عرض جميع الأفراد</a>
    <a href="{{ route('people.worktimes.create', $person->id) }}" class="btn btn-dark text-white mar-5">إضافة
        دوام</a>

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
                        <a href="{{ route('people.worktimes.edit', [$person->id, $personWorkTime->id]) }}"
                            class="btn btn-warning text-white mar-5">تعديل</a>
                        <button data-toggle="modal" data-target="#exampleModal"
                            wire:click="deleteWorkTime({{ $personWorkTime->id }})"
                            class="btn btn-danger text-white mar-5">حذف</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {!! $personWorkTimes->links() !!}
    <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button> --}}

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
