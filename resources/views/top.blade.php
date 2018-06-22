@extends('layouts.app')

@section('content')
<div>
 {!! Form::open(['route' => 'make.post']) !!}
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

@endsection

