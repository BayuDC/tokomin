@extends('layouts.main')
@section('content')
<div class="columns">
    <div class="column is-two-thirds">
        <div class="card">
            <div class="card-content">
                <div class="content">
                    <p class="title is-4">{{ $user->fullname }}</p>
                    <p class="subtitle is-6">{{ '@' . $user->username }}</p>
                    <p>Created at <time>{{ $user->created_at }}</time></p>
                    <div class="buttons">
                        <a href="/user/{{ $user->id }}/edit" class="button is-info">Edit</a>
                        <a class="button is-danger" id="btn-modal-show">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="modal-delete">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="box mx-4">
            <p class="subtitle">
                Are you sure to delete this user?
            </p>
            <div class="buttons is-flex is-justify-content-end">
                <form action="/user/{{ $user->id }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="button is-danger">Delete</button>
                </form>
                <button class="button is-light" id="btn-modal-close">Cancel</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    const btnModalShow = document.getElementById('btn-modal-show');
    const btnModalClose = document.getElementById('btn-modal-close');
    const modalDelete = document.getElementById('modal-delete');

    btnModalShow.addEventListener('click', () => modalDelete.classList.add('is-active'));
    btnModalClose.addEventListener('click', () => modalDelete.classList.remove('is-active'));
    modalDelete.firstElementChild.addEventListener('click', () => modalDelete.classList.remove('is-active'));
</script>
@endpush