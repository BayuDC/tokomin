@extends('layouts.main')
@section('content')
<div class="columns">
    <div class="column is-two-thirds">
        <form class="box" action="/user/{{ $user->id }}" method="post">
            @csrf
            @method('put')
            <div class="block">
                @include('shared.form-input', ['name' => 'Fullname', 'value' => $user->fullname])
                @include('shared.form-input', ['name' => 'Username', 'value' => $user->username])
            </div>
            <div class="block">
                <button type="submit" class="button is-link">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>
@endsection