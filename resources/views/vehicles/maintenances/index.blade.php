@extends('layouts.main')

@section('content')
    <div class="row mar-50">
        <livewire:vehicles.maintenances.index :vehicle="$vehicle" />
    </div>
@endsection
