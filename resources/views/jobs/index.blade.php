<x-layout>
    @foreach ($jobs as $job)
        <x-card-body :$job>
           <div class="mt-5">
             <x-button class="hover:cursor-pointer" :href="route('jobs.show',$job)">
                View details
            </x-button>
           </div>
        </x-card-body>
    @endforeach
</x-layout>
