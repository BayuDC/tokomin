@extends('layouts.blank')

@section('content')

<section class="section">
    <div class="container">
        <div class="columns is-centered is-mobile">
            <div class="column" style="max-width: 600px;">
                <form class="box">
                    <div class="block">
                        <h1 class="title">{{ config('app.name') }} - Login</h1>
                    </div>
                    <div class="block">
                        <div class="field">
                            <label class="label">Username</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Username">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Password</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Password">
                            </div>
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