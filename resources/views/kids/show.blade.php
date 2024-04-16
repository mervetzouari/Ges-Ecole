@extends ('layout.master')
@section ('title','show Kid')
@section ('content')
<div class="container">

kids 

<h3>{{$kid['name']}}  qui habite à <strong>{{$kid['région']}}</strong> numé tel : {{$kid['tel']}}</h3>

</div>
<div>
    <a  href="{{route('kids.edit',$kid->id)}}" >edit</a>

<form action="{{route('kids.destroy',$kid->id)}}" method="post">
    @csrf 
    @method('DELETE')
    <input type="submit" value="delete">
    </form>
</div>
@endsection

