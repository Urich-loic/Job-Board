<x-layout>
     <x-job-card-component class="mb-4">
        <form action="{{ route('jobs.index') }}" method="GET">
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
                     <x-text-input name="minSalary" placeholder="From..." value="{{request('minSalary')}}" />
                     <x-text-input name="maxSalary" placeholder="To..." value="{{request('maxSalary')}}" />
                   </div>
                </div>
                <div>3</div>
                <div>4</div>
            </div>
            <button type="submit" class="w-full px-2.5 py-1.5 bg-slate-800 text-white rounded-lg mt-2">Filter</button>
            </form>
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
