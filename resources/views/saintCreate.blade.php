@extends('components.layouts')
@section('content')
    <section>
        <h1>CREATE NEW SAINT</h1>
        <form method="POST" action="{{ route('saint.store') }}">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name">
            <br>
            <label for="birdPlace">Bird place</label>
            <input type="text" name="city_of_birth">
            <br>
            <label for="blessingDate">Blessing date</label>
            <input type="date" name="date_of_birth">
            <br>
            <label for="miracleCount">Miracle count</label>
            <input type="number" name="miracles">
            <br>
            <input type="submit" value="CREATE NEW SAINT">
        </form>
    </section>
@endsection