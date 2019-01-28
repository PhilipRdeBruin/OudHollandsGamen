
@extends('layouts.standaard')
@section('content')



    <form method="post" action="{{ route('spelreserveren.actiefspeltoevoegen') }}">
        @csrf
        <ul>
            <li class="li_unmarked"> <label>spel</label>
            <input type="text" name="spel"> </li>
            <li class="li_unmarked"><label>host</label>
            <input type="text" name="speler1"></li>
            <li class="li_unmarked"><label>speler2</label>
            <input type="text" name="speler2"></li>
            <li class="li_unmarked"><label>speler3</label>
            <input type="text" name="speler3"></li>
            <li class="li_unmarked"><label>speler4</label>
            <input type="text" name="speler4"></li>
            <li class="li_unmarked"><label>tijd</label>
            <input type="datetime" name="aanvangstijdstip"></li>
            <li class="li_unmarked"><input type="submit" value=beginnen></li>
        </ul>
    </form>


@endsection
