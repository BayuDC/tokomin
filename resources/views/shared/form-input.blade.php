@php
$slug = strtolower($name);
$slug = preg_replace('/\s/', '_', $slug);

$type = $type ?? 'text';

$value = old($slug) ?? $value ?? '';
@endphp

<div class="field">
    <label class="label">{{ $name }}</label>
    <div class="control">
        <input class="input @error($slug) is-danger @enderror" type="{{ $type }}" placeholder="{{ $name }}" name="{{ $slug }}" value="{{ $value }}">
    </div>
    @error($slug)
    <p class="help is-danger has-text-right">{{ $message }}</p>
    @enderror
</div>