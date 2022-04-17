@extends('layouts.main')
@section('content')
<div class="columns">
    <div class="column is-two-thirds">
        <div class="card">
            <div class="card-content">
                <div class="content">
                    <p class="title is-4">{{ $user->fullname }}</p>
                    <p class="subtitle is-6">{{ '@' . $user->username }}</p>
                    <p>Created at <time datetime="2016-1-1">{{ $user->created_at }}</time></p>
                    <div class="buttons">
                        <a href="/user/{{ $user->id }}/edit" class="button is-info">Edit</a>
                        <form action="/user/{{ $user->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="button is-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection