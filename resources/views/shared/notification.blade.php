<div class="notification is-danger">
    <button type="button" class="delete"></button>
    {{ $message }}
</div>

@push('scripts')
<script>
    const [notification] = document.getElementsByClassName('notification');
    const [btnNotifClose] = notification.children;

    btnNotifClose.addEventListener('click', () => notification.parentElement.removeChild(notification));
</script>
@endpush