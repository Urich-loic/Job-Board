<x-job-card-component class="mb-4" :$job>
<div class="flex justify-between">
        <h2 class="text-2xl font-bold mb-2">{{ $job->title }}</h2>
        <div class=" text-slate-500 font-bold">{{number_format($job->salary)}} CFA</div>
</div>

    <div class="flex justify-between center">
        <div class="text-md text-slate-500 mb-2">Company name / {{ $job->location }}</div>
        <div class="text-sm text-slate-500 mb-2 space-x-1">  <x-tag>{{ $job->category }}</x-tag>   <x-tag>{{ $job->experience }}</x-tag></div>
</div>


<p class="text-slate-500 mb-6 mt-2">{!!  nl2br($job->description) !!}</p>
<p class="text-gray-500 text-xs space-x-2">
    <x-tag>Posted on: {{ $job->created_at->format('M d, Y') }}</x-tag>
</p>
{{ $slot }}

</x-job-card-component>
