@extends('layouts.app')

@section('content')

<link href="css/made.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Amatic+SC:700" rel="stylesheet">

<div class=main>
    


<h1>What you made is ...</h1>
<h1>{{$a->cocktail_name}}</h1>

</div>

@endsection