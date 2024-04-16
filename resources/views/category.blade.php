
@extends ('layout.master')
@section ('title','Category')
@section ('content')
<div class="container">

<h1>Category {{$the_id}} </h1> 

</div>
@endsection


@section ('sidebar')
@parent <!-- from master   -->
this is side bar from category <!-- najem nadel 3ala sidear mta3 el master twali specifique lel category w matbanech fi les autres    -->
@endsection 
