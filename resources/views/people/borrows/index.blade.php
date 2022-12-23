@extends('layouts.main')

@section('content')
    <div class="row mar-50">
        <livewire:people.borrows.index :person="$person" />
    </div>
@endsection
