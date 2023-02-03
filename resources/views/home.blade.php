@extends('components.layouts')
@section('content')
<main>
  
        <a href="{{ route('saint.create') }}">CREATE NEW SAINT</a>
    
 <ul>
    <li>
        <h4>
            Nome - Miracoli
        </h4>
    </li>
  @foreach ($saints as $saint)
      <a id="saint" href='/saints/{{$saint->id}}'>
        <li>
            {{$saint->name}} - {{$saint->miracles}} - 
            <a class="text-black" href="{{ route('saint.destroy', ['id' => $saint -> id]) }}">ELIMINA</a>
          </li>
      </a>
     
  @endforeach
 </ul>

 </ul>
</main>  
@endsection