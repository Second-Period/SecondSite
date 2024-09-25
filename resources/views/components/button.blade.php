<button {{ $attributes->merge(['type'=>'button','class'=>'bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded-lg'])}}>
    {{ $slot }}
</button>
