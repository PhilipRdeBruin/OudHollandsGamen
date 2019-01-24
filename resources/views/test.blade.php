@extends('layouts.standaard')
@section('content')

<form method="post" action="{{ route('test.actiefspeltoevoegen') }}">
@csrf    
<ul>
<li> <label>spel</label>    
<input type="text" name="spel"> </li>  
<li><label>host</label>    
<input type="text" name="speler1"></li>
<li><label>speler2</label>  
<input type="text" name="speler2"></li>
<li><label>speler3</label>  
<input type="text" name="speler3"></li>
<li><label>speler4</label>  
<input type="text" name="speler4"></li> 
<li><label>tijd</label>  
<input type="datetime" name="aanvangstijdstip"></li>
<li><input type="submit" value="beginnen"></li>    
</ul>
    </form>


@endsection