<div>
     <label for="experience" class="flex gap-3 py-1">
        <select name="{{ $name }}" id="" class="rounded-lg p-1 w-full">
            <option value="" @selected( !request('category') )>All</option>
             @foreach ($options as $label => $option)
                <option value="{{ $option }}" @selected( '{{ $option }}'==request($name) )>{{ $label }}</option>
             @endforeach
        </select>
     </label>

</div>
