<x-layout>
    <x-slot:title>
        Rediģēt valsti
    </x-slot:title>

    <h1>Rediģēt valsti: "{{ $country->name }}"</h1>
    <form method="POST" action="/countries/{{ $country->id }}">
        @csrf
        @method('PUT')
        
        <label>
            Valsts nosaukums
            <input name="name" value="{{ $country->name }}"></input>
        </label>
        
        @error("name")
        <p>{{ $message }}</p>
        @enderror<br><br>

        <label>
            Platība (km²)
            <input name="area_km2" value="{{ $country->area_km2 }}"></input>
        </label><br>

        @error("area_km2")
            <p>{{ $message }}</p>
        @enderror<br>

        <label>
            Populācija
            <input name="population" value="{{ $country->population }}"></input>
        </label><br>

        <button>Saglabāt</button>
    </form>
</x-layout>