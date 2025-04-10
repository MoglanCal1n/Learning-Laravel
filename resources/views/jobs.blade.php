<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <title>Jobs Page</title>
    <h1>Jobs Page</h1>

    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{$job['id']}}">
                    <strong>{{ $job['title'] }}</strong>: Pays {{$job['salary']}} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>

