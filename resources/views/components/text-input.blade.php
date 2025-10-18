<div class="relative">
   @if($formRef)
 <button
    {{-- @click="" --}}
    onclick="window.url('/jobs')"
    type="button"
    class="absolute top-0 right-0 hover:cursor-pointer h-full pr-2"
    >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 h-full">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
    </button>
   @endif
    <input
    x-ref="input-{{ $name }}"
    type="{{$type}}"
    value="{{ $value }}"
    name="{{ $name }}"
    id="{{ $name }}"
    placeholder="{{ $placeholder }}"
    class="border border-gray-300 rounded-lg  py-1 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 pr-6">

</div>
