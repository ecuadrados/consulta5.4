
@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="form-group">
<a href="{{route('consulta.index')}}" class="btn btn-success btn-sm">Regresar</a>
</div>
    <div class="row">       
        <div class="col-12 col-md-12 col-sm-12">
        <div class="card card-primary card-outline card-tabs">
            <div class="card-header p-0 pt-1 border-bottom-0">
            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-three-nomina-tab" data-toggle="pill" href="#custom-tabs-three-nomina" role="tab" aria-controls="custom-tabs-three-nomina" aria-selected="true">Nomina</a>
                </li>  
                <li class="nav-item">
                <a class="nav-link" id="custom-tabs-three-priorizado-tab" data-toggle="pill" href="#custom-tabs-three-priorizado" role="tab" aria-controls="custom-tabs-three-priorizado" aria-selected="false">Priorizados</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id="custom-tabs-three-temporal-tab" data-toggle="pill" href="#custom-tabs-three-temporal" role="tab" aria-controls="custom-tabs-three-temporal" aria-selected="false">Nuevos priorizados mayores de 70 años</a>
                </li>                                
            </ul>
            </div>
            <div class="card-body">
            <div class="tab-content" id="custom-tabs-three-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-three-nomina" role="tabpanel" aria-labelledby="custom-tabs-three-nomina-tab">
                    <div class="row">
                    @if(count($nomina)>0)   
                      <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">      
                            <tr>
                                <th>Nombre(s):</th>
                                <td>{{ $nomina[0]->primer_nombre}} {{ $nomina[0]->segundo_nombre }}</td>
                            </tr>
                            <tr>
                                <th>Apellido(s):</th>
                                <td>{{ $nomina[0]->primer_apellido }} {{ $nomina[0]->segundo_apellido }}</td>
                            </tr>
                            <tr>
                                <th>Documento:</th>
                                <td>{{ $nomina[0]->documento }}</td>
                            </tr> 
                            <tr>
                                <th>Valor Cobro:</th>
                                <td>{{ $nomina[0]->valor_cobro }}</td>
                            </tr>                             
                            <tr>
                                <th>Fecha Pago:</th>
                                <td>{{ $nomina[0]->fecha_pago }}</td>
                            </tr>               
                            </table>
                        </div>
                      </div>
                    @else
                      <h3>No se encuentra en nomina</h3>
                    @endif
                    </div> 
                    <!-- row  -->

                </div><!-- tab-pane fade  -->    
                <div class="tab-pane fade show" id="custom-tabs-three-priorizado" role="tabpanel" aria-labelledby="custom-tabs-three-priorizado-tab">
                    <div class="row">
                    @if(count($priorizado)>0) 
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">      
                            <tr>
                                <th>Nombre(s):</th>
                                <td>{{ $priorizado[0]->nombre1}} {{ $priorizado[0]->nombre2 }}</td>
                            </tr>
                            <tr>
                                <th>Apellido(s):</th>
                                <td>{{ $priorizado[0]->apellido1 }} {{ $priorizado[0]->apellido2 }}</td>
                            </tr>
                            <tr>
                                <th>Documento:</th>
                                <td>{{ $priorizado[0]->documento }}</td>
                            </tr>                                                        
                            <tr>
                                <th>Ubicación:</th>
                                <td>{{ $priorizado[0]->ubicacion}}</td>
                            </tr>               
                            </table>
                        </div>
                      </div>
                    @else
                      <h3>No se encuentra en priorizado</h3>
                    @endif 
                </div>
                    <!-- row  -->

                </div><!-- tab-pane fade  -->     
                <div class="tab-pane fade show" id="custom-tabs-three-temporal" role="tabpanel" aria-labelledby="custom-tabs-three-temporal-tab">
                    <div class="row">
                    @if(count($temporal)>0) 
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">      
                            <tr>
                                <th>Nombre(s):</th>
                                <td>{{ $temporal[0]->nombre1}} {{ $temporal[0]->nombre2 }}</td>
                            </tr>
                            <tr>
                                <th>Apellido(s):</th>
                                <td>{{ $temporal[0]->apellido1 }} {{ $temporal[0]->apellido2 }}</td>
                            </tr>
                            <tr>
                                <th>Documento:</th>
                                <td>{{ $temporal[0]->documento }}</td>
                            </tr>                                                         
                            <tr>
                                <th>Fecha de Pago:</th>
                                <td>{{ $temporal[0]->fecha_pago}}</td>
                            </tr>               
                            </table>
                        </div>
                      </div>
                    </div>
                    @else
                      <h3>No se encuentra priorizados mayores de 70 años</h3>
                    @endif 
                    </div> 
                    <!-- row  -->

                </div><!-- tab-pane fade  -->                             
            </div>
            </div>
            <!-- /.card -->
        </div>
        </div>          
    </div>
</div>
      <!-- container -->
@endsection