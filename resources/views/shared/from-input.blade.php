<div class="field">
    <label class="label">{{ $name }}</label>
    <div class="control">
        <input class="input @error(strtolower($name)) is-danger @enderror" type="{{ isset($type) ? $type : 'text' }}" placeholder="{{ $name }}" name="{{ strtolower($name) }}">
    </div>
    @error(strtolower($name))
    <p class="help is-danger has-text-right">{{ $message }}</p>
    @enderror
</div>