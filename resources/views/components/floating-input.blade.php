<div class="form-floating mb-3">
    <input name="{{ $id }}" value="{{ $value ?? old($id) }}" required type="{{ $type }}"
        class="form-control @error($id) is-invalid @enderror" id="{{ $id }}Input" placeholder=" ">
    <label for="{{ $id }}Input">{{ $slot }}</label>
    @error($id)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
