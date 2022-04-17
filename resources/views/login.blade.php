@extends('layouts.blank')

@section('content')

<section class="section">
    <div class="container">
        <div class="columns is-centered is-mobile">
            <div class="column" style="max-width: 600px;">
                <form class="box" action="/login" method="post">
                    @csrf
                    <div class="block">
                        <h1 class="title">{{ config('app.name') }} - Login</h1>
                    </div>
                    <div class="block">
                        @include('shared.form-input', ['name' => 'Username'])
                        @include('shared.form-input', ['name' => 'Password', 'type' => 'password'])
                    </div>
                    <div class="block">
                        @if($message = session()->get('msg_error'))
                        @include('shared.notification', ['message' => $message])
                        @endif
                    </div>
                    <div class="block is-flex is-justify-content-end">
                        <div class="control">
                            <button type="submit" class="button is-link">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection