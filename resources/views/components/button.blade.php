<a {{ $attributes->merge([
    "class"=>"bg-white border-1 border-slate-500 px-2.5 py-1.5 text-center text-sm font-semibold text-black rounded-lg hover:bg-slate-300"
    ]) }}  >
    {{ $slot }}
</a>
