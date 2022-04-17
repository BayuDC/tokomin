@extends('layouts.main')
@section('content')
<div class="columns">
    <div class="column is-two-thirds">
        <form class="box" action="/user" method="post">
            @csrf
            <div class="block">
                @include('shared.form-input', ['name' => 'Fullname'])
                @include('shared.form-input', ['name' => 'Username'])
                @include('shared.form-input', ['name' => 'Password', 'type' => 'password'])
            </div>
            <div class="block">
                <button type="submit" class="button is-link">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection