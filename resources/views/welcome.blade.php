@extends('layouts.app')

@section('content')
    <!-- cssの呼び出し -->
    <link href="css/welcome.css" rel="stylesheet" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">
 
    
    <div class="bg-image">
        <div class="bg-mask">
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to Cocktail Maker</h1>
        </div>
    </div>
    
    <div class="text-center">
      <a href="/top" class="btn btn-default btn-sm" role="button">Let's make your own cocktail! </a>
    </div>
      
        </div>
    </div>
@endsection