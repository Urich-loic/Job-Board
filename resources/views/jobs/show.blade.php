<x-layout>
    <nav class="w-full max-w-2xl mb-3 ">
        <ul class="flex space-x-2">
            <li>
                <a href="{{route('jobs.index')}}">Home</a>
            </li>
            <li>
                <a href="{{route('jobs.index')}}">→</a>
            </li>
             <li>
                <a href="{{route('jobs.index')}}">Job</a>
            </li>
            <li>
                <a href="{{route('jobs.index')}}">→</a>
            </li>
             <li>
                <a href="">{{$job->title}}</a>
            </li>
        </ul>
    </nav>
    <x-card-body :$job >
        <p class="text-slate-500 mb-6 mt-2">{!!  nl2br($job->description) !!}</p>
        @auth
        <x-button :href="route('jobs.application.create',$job)">Apply now</x-button>
        @else
        <div class="text-amber-800">
            <x-button :href="route('auth.create')">Login to apply</x-button>
        </div>
        @endauth
    </x-card-body>
    <x-cardcomponent class="mt-3" :job="$job">
         <h2 class="text-xl font-bold">More  {{ $job->employer->company_name }} jobs</h2>

         <div class="jonContainer">
            @foreach ( $job->employer->jobBoard as $otherJobs )
                <div class="mainJobCOntainer flex justify-between py-2 border-b-1 border-slate-300">
                    <div class="leftJob">
                        <div>
                            <a href="{{ route('jobs.show', $otherJobs) }}">{{ $otherJobs->title }}</a>
                        </div>
                        <div>
                             <small>
                                {{ $otherJobs->created_at->diffForHumans() }}
                             </small>
                        </div>
                    </div>
                    <div class="rightJob">{{number_format($otherJobs->salary)}} Fcfa</div>
                </div>
            @endforeach
         </div>
    </x-cardcomponent>
</x-layout>
