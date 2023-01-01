@extends('layouts.main')

@section('content')
    <div class="row mar-50">
        <livewire:custodies.spends.index :custody="$custody" />
    </div>
@endsection
