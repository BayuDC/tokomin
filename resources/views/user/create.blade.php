@extends('layouts.main')
@section('content')
<div class="columns">
    <div class="column is-two-thirds">
        <form class="box" action="/user" method="post">
            @csrf
            <div class="block">
                @include('shared.from-input', ['name' => 'Fullname'])
                @include('shared.from-input', ['name' => 'Username'])
                @include('shared.from-input', ['name' => 'Password', 'type' => 'password'])
            </div>
            <div class="block">
                <button type="submit" class="button is-link">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection