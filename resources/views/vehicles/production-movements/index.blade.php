@extends('layouts.main')

@section('content')
    <div class="row mar-50">
        <livewire:vehicles.production-movement.index :vehicle="$vehicle" />
    </div>
@endsection
