@extends('layouts.app')

@section('content')
<div class="container-fluid p-4 justify-content-center" style="width: 90%; max-width: 1300px;">
    <div class="justify-content-center">        
            <div class="card">
                <div class="text-center text-uppercase font-weight-bold pt-4">
                    <h2>Panel de usuario</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <h3>Bienvenida {{ Auth::user()->name }}</h3><br><br>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered">
                                <thead class="thead-dark text-center">
                                <tr>
                                    <th>Semana</th>
                                    <th>Detalles</th>
                                    <!-- <th>Editar</th> -->
                                </tr>
                                </thead>
                                <tbody>                                
                                    @foreach($pregnancies as $pregnan)
                                <tr class="text-center">
                                    <th>{{$pregnan->week}}</th>
                                    <th>{{$pregnan->status}}</th>
                                    <!-- <th>
                                        <a href="{{ route('pregnancy.edit', $pregnan)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    </th> -->
                                </tr>
                                    @endforeach                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>    
</div>
@endsection
