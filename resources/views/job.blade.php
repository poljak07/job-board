<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2 class="font-bold text-lg"> {{ $job['title'] }} </h2>

    <p>
        Pays {{$job['salary'] }} Per Year
    </p>

</x-layout>
