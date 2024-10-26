@extends('views/layout.php')

@section('content-title')
Materias
@endsection

@section('content') 

<div class="page-header">
    <h3 class="page-title">
       Materias
    </h3>
</div>

<div class="row">

<div class="col-lg-12">
    <form action="/materias" method="get"></form>
    <div class="row">
        <div.col-md-6 class="grid margin stretch-card"></div-col-md-6>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <i class="fa fa-search"></i>
                Buscar materias 
            </h4>
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Ingresa el nombre de la materia"
                    arial-label="Ingresa el nombre de la materia" name="search">

                    <div class="input-group-append">

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Lista de Materias</h4>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Creado en</th>
                                <th>Actualizado en</th>
                                <th>Opciones</th>
                            </tr>
        
                        </thead>

                        <tbody>
                           
                              @foreach($materias as $materia) 
                            <tr>
                                <td>{{$materia->id}}</td>
                                <td>{{$materia->name}}</td>
                                <td>{{$materia->update_at}}</td>
                                <td></td>
                            </tr>
                             @endforeach
                        </tbody>

                    </table>

                    <div class="mt-3">
                        {{$paginador}}
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection