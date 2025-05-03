<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-white']) }}>
    {{ $slot }}
</button>
