<x-cardcomponent class="mb-4" :$job>
<div class="flex justify-between">
        <h2 class="text-2xl font-bold mb-2">{{ $job->title }}</h2>
        <div class=" text-slate-500 font-bold">{{number_format($job->salary)}} CFA</div>
</div>

    <div class="flex justify-between center">
        <div class="text-md text-slate-500 mb-2">
             <a href="{{ route('jobs.index',["company_name"=>$job->employer->company_name]) }}">
                   {{$job->employer->company_name}}
                </a> / {{ $job->location }}</div>
        <div class="text-sm text-slate-500 mb-2 space-x-1">
            <x-tag>
                 <a href="{{ route('jobs.index',["category"=>$job->category]) }}">
                   {{ $job->category }}
                </a>
            </x-tag>
            <x-tag>
                <a href="{{ route('jobs.index',["experience"=>$job->experience]) }}">
                    {{ $job->experience }}
                </a>
            </x-tag>
        </div>
</div>
<div class="mb-4">
    {{ $slot }}
</div>
</x-cardcomponent>
