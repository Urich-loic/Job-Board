<x-layout>
     <x-job-card-component class="mb-4">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <div class="mb-2font-semibold">
                        Search
                    </div>
                    <x-text-input name="search" placeholder="Search..." value="{{request('search')}}" />
                </div>
                <div>
                    <div class="mb-2font-semibold">
                        Salary
                    </div>
                   <div class="flex gap-2">
                     <x-text-input name="search" placeholder="From..." value="{{request('search')}}" />
                     <x-text-input name="search" placeholder="To..." value="{{request('search')}}" />
                   </div>
                </div>
                <div>3</div>
                <div>4</div>
            </div>
        </x-job-card-component>
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
