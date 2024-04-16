@extends ('layout.master')
@section ('title','create Kid')
@section ('content')
<div class="container">

kids 

<h3> qui habite à</h3>

<form action="{{route('kids.store')}}" method="post" class="form bg-white p-6 border-1">
@csrf 
<div>
    <label for="kid-name" class="text-sm"> nom </label>
    <input type="text" id="kid-name" name="kid-name" value="{{old('kid-name')}}" class="text-lg border-1">
    @error ('kid-name')
    <div class="form-error" style="color:red;font-size: 12px;">
        {{$message}}
    </div>
    
    @enderror
</div>

<div>
    <label for="kid-région" class="text-sm"> région </label>
    <input type="text" id="kid-région" name="kid-région"  value="{{old('kid-région')}}" class="text-lg border-1">
    @error ('kid-région')
    <div class="form-error" style="color:red;font-size: 12px;">
        {{$message}}
    </div>
    
    @enderror
</div>

<div>
    <label for="kid-tel" class="text-sm">Tel</label>
    <input type="text" id="kid-tel" name="kid-tel"  value="{{old('kid-tel')}}" class="text-lg border-1">
    @error ('kid-tel')
    <div class="form-error" style="color:red;font-size: 12px;">
        {{$message}}
    </div>
    
    @enderror
</div>

<div>
    <button type="submit">envoyer</button>
</div>

</form>

</div>
@endsection