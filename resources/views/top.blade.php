@extends('layouts.app')

@section('content')

 <!-- cssの呼び出し -->
<link href="css/top.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Amatic+SC:700" rel="stylesheet">

<div　class="a">
    
    <h1>Choose your base and mixer.</h1>



<div class="article_inner">
 
     <div class='form-inline'>
        {!! Form::open(['route' => 'search.post']) !!}
        <div class="form-group">
            {!! Form::Label('base', 'Base:') !!}
            {!! Form::select('base_id', $bases, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::Label('mixer', 'Mixer:') !!}
            {!! Form::select('mixer_id', $mixers, null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Make', ['class' => 'btn btn-primary btn-block']) !!}
           
             
        {!! Form::close() !!}
     </div>
</div> 
</div>


            





@endsection

