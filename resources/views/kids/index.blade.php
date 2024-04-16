@extends ('layout.master')
@section ('title','kids')
@section ('content')
<div class="container">

kids 
@if(count($kids)>0)
<ul>
    
        @foreach ($kids as $kid)
        <a href="{{route('kids.show',['kid'=>$kid['id']])}}">
            <li> {{$kid['name']}}  qui habite à <strong>{{$kid['région']}} </strong> numé tel : {{$kid['tel']}}</li>
        </a>
        @endforeach 
</ul>
@else
<p>il y a aucun nom d'éléve </p>
@endif
</div>
@endsection