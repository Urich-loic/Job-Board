<x-layout>
     <x-cardcomponent class="mb-4">
        <form x-data="" x-ref="filters" action="{{ route('jobs.index') }}" method="GET">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <div class="mb-2font-semibold">
                        Search
                    </div>
                    <x-text-input form-ref="filters"  name="search" placeholder="Search..." value="{{request('search')}}" class="pr-6"/>
                </div>
                <div>
                    <div class="mb-2font-semibold">
                        Salary
                    </div>
                   <div class="flex gap-2">
                     <x-text-input form-ref="filters" name="minSalary" placeholder="From..." value="{{request('minSalary')}}"class="pr-6" />
                     <x-text-input form-ref="filters" name="maxSalary" placeholder="To..." value="{{request('maxSalary')}}" class="pr-6"/>
                   </div>
                </div>
                <div>
                    <div class="mb-2font-semibold">
                        Experience
                    </div>
                    <div class="">
                    <x-radio-group name="experience" :options=" App\Models\JobsBoard::$experienceLevels "/>
                    </div>

                </div>
                <div>
                    <div class="mb-2font-semibold">
                        Category
                    </div>
                    <div class="">
                    <x-select-group name="category" :options="array_combine(array_map('ucfirst',App\Models\JobsBoard::$category),App\Models\JobsBoard::$category,)"/>
                    </div>
                </div>
            </div>
           <x-formbutton class="w-full ">Filter</x-formbutton>
            </form>
        </x-cardcomponent>
    @foreach ($jobs as $job)

        <x-card-body :$job>
           <div class="mt-5">
             <x-button class="hover:cursor-pointer" :href="route('jobs.show',$job)">
                View details
            </x-button>
           </div>
        </x-card-body>
    @endforeach
    {{ $jobs->links() }}
</x-layout>
