<x-layout>
    <x-slot name="heading">
        Job Listings
    </x-slot>
    <div>
        @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}" class="d-block p-3 border border-secondary" style="padding-top: 1.5rem; padding-bottom: 1.5rem; padding-left: 3rem; padding-right: 3rem;"> 
            <div>{{ $job->employer->name}}</div>
                <div>
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                </div>
        </a>
        @endforeach

        <hr>
        
        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
