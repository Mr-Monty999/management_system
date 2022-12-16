@extends('layouts.main')

@section('content')
    <div class="row mar-50">
        <livewire:people.worktimes.index :person="$person" />
    </div>
@endsection
