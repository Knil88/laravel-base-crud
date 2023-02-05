@extends('components.layouts')

@section('content')
<section>
  <div class="container_saint">
    <h2 class="animate__animated animate__fadeInUp">
      Santissimo: {{$saints->name}}
      <br>
      Nato a:{{$saints->city_of_birth}}
      <br>
      Beatificazione nel : {{$saints->date_of_birth}}
      <br>
      Miracoli compiuti:{{$saints->miracles}}
    </h2>
  </div>
</section>
@endsection
