<x-layout>
    <x-slot:title>
        Izveidot valsti
    </x-slot:title>

    <h1>Izveidot valsti</h1>
    <form method="POST" action="/countries">
        @csrf

        <label>
            Valsts nosaukums
            <input name="name"></input>
        </label><br>

        @error("name")
            <p>{{ $message }}</p>
        @enderror<br>

        <label>
            Platība
            <input name="area_km2"></input>
        </label><br>

        @error("area_km2")
            <p>{{ $message }}</p>
        @enderror<br>

        <label>
            Populācija
            <input name="population"></input>
        </label><br>

        @error("population")
            <p>{{ $message }}</p>
        @enderror<br>

        <button type="submit">Saglabāt</button>
    </form>
</x-layout>