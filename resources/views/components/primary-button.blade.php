<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-[2rem] py-[0.75rem] bg-[#6FC276] hover:bg-[#599e5e] focus:outline-none focus:border-none rounded-[5px] font-semibold text-[15px] text-white transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
