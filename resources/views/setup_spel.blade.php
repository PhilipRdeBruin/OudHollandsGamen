<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

?>





@extends('layouts.standaard')
@section('content')


<!--{{$spel_data}}-->
if(isset($_POST['spelstarten'])){
    $id=$_POST["id"];
    $spelid=$_POST["spelid"];
    spelstarten($id,$spelid);
}
<form method="post" action="#">

<!--<button onclick="spelstarten(" {{$spel_data->id}} ")">spelstarten</button>-->
<input type="hidden" name="id" value="{{$spel_data->id}}">
<input type="hidden" name="spelid" value="{{$spel_data->spel_id}}">  
<input type="submit" name="spelstarten" value="spelstarten">
</form>


@endsection

<script>

    function spelstarten (spelid) {
        
        
    }


</script>

<?php 

function spelstarten ($id, $spelid){

    $link = DB::table('spelletjes')->where('id', $spelid)->value('link');
    
}


?>


