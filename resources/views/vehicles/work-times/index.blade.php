@extends('layouts.main')

@section('content')
    <div class="row mar-50">
        <livewire:vehicles.worktimes.index :vehicle="$vehicle" />
    </div>
@endsection
