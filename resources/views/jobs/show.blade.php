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
    <x-card-body :$job />
</x-layout>
