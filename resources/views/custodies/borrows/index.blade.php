@extends('layouts.main')

@section('content')
    <div class="row mar-50">
        <livewire:custodies.borrows.index :custody="$custody" />
    </div>
@endsection
