<div>
   <nav {{ $attributes  }}>
        <ul class="list-reset flex text-grey-dark">
             <li>
                <a href="{{ route('jobs.index') }}" class="text-blue-600 hover:underline">Jobs</a>
             </li>
             <li><span class="mx-2">/</span></li>
             <li class="text-gray-500">{{ $job->title }}</li>
        </ul>
   </nav>
</div>
