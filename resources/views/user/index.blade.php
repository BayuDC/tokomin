@extends('layouts.main')

@section('content')
<div class="columns">
    <div class="column is-two-thirds">
        <div class="block">
            <div class="table-container">
                <table class="table is-fullwidth is-hoverable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Fullname</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $user->fullname }}</td>
                            <td>{{ ucfirst($user->role) }}</td>
                            <td>
                                <a href="/user/{{ $user->id }}" class="is-underlined">Detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection