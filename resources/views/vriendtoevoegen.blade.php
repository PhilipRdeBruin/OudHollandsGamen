<?php 
    namespace App\Http\Controllers;
    $active_navlink = 'profiel'; 
    $filterkey = "filter";
    $vrienden = \App\User::All();
?>

@extends('layouts.standaard')
@section('content')

<div class="container">
    <div class="row justify-content-center mt-4">
<div class="container col-md-8" style="text-align:center">
      <h1><span class="kl_blauw">U wilt een vriend toevoegen</span></h1><br>
        </div>
    </div>
      <div class="row justify-content-center">
          <div class="container col-md-8" style="text-align:center">
    <h4>Hier onder kunt een speler selecteren om deze toe te voegen als vriend. Als de speler uw uitnodiging accepteert dan kunt u eenvoudig een afspraak met hem/haar maken. </h4>
    </div>
          
    </div>
       <div class="row justify-content-center">
          <div class="container col-md-4">
        <div class="card mt-5">
         <div class="card-header" style="text-align:center"><b>Vriend toevoegen</b></div>
         <div class="card-body">
             <div class="row justify-content-center">
             <select> 
    @foreach ($vrienden as $vrienden)
           <?php 
           $vn=$vrienden->voornaam;
           $tv=($vrienden->tussenv != NULL) ? " " . $vrienden->tussenv : "" ;
           $an=$vrienden->achternaam;
           $vriend=$vn.$tv. " " . $an;
           
           ?>
            <option> {{$vriend}} </option>  
    @endforeach
    
                </select>
                 </div>
              <div class="row justify-content-center mt-2">
              <input type="submit" value="Toevoegen" class="btn btn-primary">
             </div>
             
         </div>
            </div>
         
</div>

</div>

                

          
        @include('includes.vraag')
@endsection