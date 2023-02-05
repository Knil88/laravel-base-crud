@extends('components.layouts')
@section('content')
    <section>
       
        <form method="POST" action="{{ route('saint.store') }}">
            <h1>CREATE NEW SAINT</h1>
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name">
            <br>
            <label for="birdPlace">Birth place</label>
            <input type="text" name="city_of_birth">
            <br>
            <label for="blessingDate">Blessing date</label>
            <input type="date" name="date_of_birth">
            <br>
            <label for="miracleCount">Miracle count</label>
            <input type="number" name="miracles">
            <br>
            <input id="btn_submit" type="submit" value="CREATE NEW SAINT">
        </form>
    </section>
@endsection