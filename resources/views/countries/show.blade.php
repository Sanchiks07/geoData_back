<x-layout>
    <x-slot:title>
        {{ $country->name }}
    </x-slot:title>

    <h1>{{ $country->name }}</h1>
    <p>Platība: {{ number_format($country->area_km2, 2, ',', ' ') }} km²</p>
    <p>Iedzīvotāju skaits: {{ number_format($country->population, 0, '.', ' ') }}</p>
    <h2>Pilsētas:</h2>
    @if($country->cities->count())
        <ul>
            @foreach($country->cities as $city)
                <li>{{ $city->name }}</li>
            @endforeach
        </ul>
    @else
        <p>Nav pilsētu</p>
    @endif

    <a href="/countries/{{ $country->id }}/edit">Rediģēt</a>

    <form method="POST" action="/countries/{{ $country->id }}">
        @csrf
        @method("delete")
        <button>Dzēst</button>
    </form>
</x-layout>