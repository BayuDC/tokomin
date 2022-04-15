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
                        <div class="field">
                            <label class="label">Username</label>
                            <div class="control">
                                <input class="input @error('username') is-danger @enderror" type="text" placeholder="Username" name="username">
                            </div>
                            @error('username')
                            <p class="help is-danger has-text-right">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="field">
                            <label class="label">Password</label>
                            <div class="control">
                                <input class="input @error('password') is-danger @enderror" type="password" placeholder="Password" name="password">
                            </div>
                            @error('password')
                            <p class="help is-danger has-text-right">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="block is-flex is-justify-content-end">
                        <div class="control">
                            <button class="button is-link">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection