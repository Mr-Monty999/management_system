@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">@</span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                aria-describedby="addon-wrapping">
        </div>
    </div>
@endsection
