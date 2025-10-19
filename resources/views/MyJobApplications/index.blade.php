<x-layout>
    <x-cardcomponent class="mb-4">
        <h2 class="text-xl font-bold mb-3">My Job Applications</h2>
        @foreach ($applications as $application)
            <x-card-body :job="$application->jobBoard">
                <div class="mt-5">
                    <span class="font-semibold">Applied on:</span> {{ $application->created_at->format('F j, Y') }}
                </div>
            </x-card-body>
        @endforeach
        {{ $applications->links() }}
</x-layout>
