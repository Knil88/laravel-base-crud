@extends('components.layouts')
@section('content')
<main>
 <ul>
    <li>
        <h4>
            Name - Date Of Birth
        </h4>
    </li>
  @foreach ($saints as $saint)
      <li>
        {{$saint->name}} - {{$saint->date_of_birth}}
      </li>
     
  @endforeach
 </ul>

 </ul>
</main>  
@endsection