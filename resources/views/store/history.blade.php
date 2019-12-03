@extends('layouts.app')

@section('content')

<div class="container-fluid p-4 justify-content-center" style="width: 90%; max-width: 1300px;">
    <div class="justify-content-center">        
        <div class="card">
            <div class="text-center text-uppercase font-weight-bold pt-4">
                <h2>Mi historial <small>[Agregar <i class="fa fa-plus"></i>]</small></h2> 
            </div>

            <div class="card-body"> 
        	{!! Form::open(['route' => 'pregnancy.store'])!!}
					<div class="form-group">
						<label for="week"><h4>Semana:</h4></label>
						{!! Form::text(
                            'week', 
                            null, 
                            array(
                                'class'=>'form-control inp-form',
                                'autofocus' => 'autofocus'
                            )
                        ) !!}
	                </div>

	                <div class="form-group">
						<label for="status"><h4>Detalles:</h4></label>
						{!! Form::text(
                            'status', 
                            null, 
                            array(
                                'class'=>'form-control inp-form',
                                'autofocus' => 'autofocus'
                            )
                        ) !!}
	                </div>		                    
					
                    <div class="form-group">
                        {!! Form::submit('Guardar', array('class'=>'btn btn-primary')) !!}
                    </div>
	                {!! Form::close() !!}			
            </div>
        </div>
    </div>
</div>

@stop
