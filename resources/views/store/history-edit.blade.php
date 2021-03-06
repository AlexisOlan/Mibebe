@extends('layouts.app')

@section('content')

<div class="container-fluid p-4 justify-content-center" style="width: 90%; max-width: 1300px;">
    <div class="justify-content-center">        
        <div class="card">
            <div class="text-center text-uppercase font-weight-bold pt-4">
                <h2>Mi historial <small>[Editar <i class="fa fa-edit"></i> ]</small></h2> 
            </div>

            <div class="card-body"> 
            {!! Form::model($pregnancy, array('route' => array('pregnancy.update', $pregnancy)))!!}
            <input type="hidden" name="_method" value="PUT">

					<div class="form-group">
						<label for="week"><h4>Semana:</h4></label>
						{!! Form::number(
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
                        {!! Form::submit('Actualizar', array('class'=>'btn btn-primary')) !!}
                        <a href="{{ route('pregnancy.index') }}" class="btn btn-danger">Cancelar</a>
                    </div>
	                {!! Form::close() !!}			
            </div>
        </div>
    </div>
</div>

@stop
