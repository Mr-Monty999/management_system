@extends('layouts.main')

@section('content')
    <div class="row mar-50">
        <livewire:vehicles.fuels.index :vehicle="$vehicle" />
    </div>
@endsection
