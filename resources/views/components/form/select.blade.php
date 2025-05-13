{{-- resources/views/components/form/select.blade.php --}}
@props(['name', 'label', 'options', 'selected' => null, 'required' => false])

@php
    $selectedValue = old($name, $selected);
@endphp

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <select
        class="form-select @error($name) is-invalid @enderror"
        id="{{ $name }}"
        name="{{ $name }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes }}
    >
        <option value="">Select {{ $label }}</option>
        @foreach($options as $option)
            <option value="{{ $option->id }}" {{ $selectedValue == $option->id ? 'selected' : '' }}>
                {{ $option->name }}
            </option>
        @endforeach
    </select>
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
