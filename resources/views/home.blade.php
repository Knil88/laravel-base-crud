@extends('components.layouts')
@section('content')
<main>
 <ul>
    <li>
        <h4>
            Nome - Miracoli
        </h4>
    </li>
  @foreach ($saints as $saint)
      <a id="saint" href='/saints/{{$saint->id}}'>
        <li>
            {{$saint->name}} - {{$saint->miracles}}
          </li>
      </a>
     
  @endforeach
 </ul>

 </ul>
</main>  
@endsection