<x-layout>
    <x-page-heading>Search Results</x-page-heading>

    <div class="space-y-6">
        @foreach ($jobs as $job)
            <x-job-card-big :$job />
        @endforeach
    </div>
</x-layout>
