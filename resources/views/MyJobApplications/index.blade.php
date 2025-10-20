<x-layout>

        <h2 class="text-xl font-bold mb-3">My Job Applications</h2>
        @foreach ($applications as $application)
             <x-cardcomponent class="mb-4" :job="$application->jobBoard">
                <div class="mt-5">
                    <h3 class="text-xl font-bold mb-4">{{ $application->jobsBoard->title }}</h3>

                    <div class="flex justify-between">
                    <span class="mb-6 font-medium">{{ $application->jobsBoard->employer->company_name }} Fcfa</span>
                    <span>{{ number_format($application->expected_salary) }} Fcfa</span>
                    </div>
                   <div class="flex justify-between">
                    <div class="col-1">
                         <span>Applied on: {{ $application->created_at->diffForHumans() }}</span>
                    </div>
                    <div class="col-1">
                         <x-tag>{{ $application->jobsBoard->experience }}</x-tag>
                    </div>
                   </div>
                </div>
            </x-cardcomponent>
        @endforeach

        {{ $applications->links() }}


</x-layout>
