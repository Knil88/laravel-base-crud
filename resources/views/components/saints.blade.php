@extends('components.layouts')

@section('content')
<section>
  <div class="container_saint animate__animated animate__fadeInUp">
    <h2 >
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
