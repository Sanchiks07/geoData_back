
<x-layout>
    <x-slot:title>
        Valstis
    </x-slot:title>
    <ul>
        @foreach ($countries as $country)
            <li>
                <a href="{{ route('countries.show', $country->id) }}">
                    {{ $country->name }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>