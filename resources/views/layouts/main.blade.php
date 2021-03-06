<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>{{ config('app.name') }}</title>
</head>

<body>
    @include('components.navbar', ['active' => isset($active) ? $active : ''])
    <section class="section">
        <div class="container">
            <h1 class="title">
                {{ $title }}
            </h1>
            @yield('content')
        </div>
    </section>
    @stack('scripts')
</body>

</html>