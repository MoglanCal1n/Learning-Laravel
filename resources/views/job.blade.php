<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <title>Job Page</title>
    <h1 class="font-bold text-lg">{{$job['job_title']}}</h1>
    <p>
        This job pays {{$job['job_salary']}} per year.
    </p>

</x-layout>

