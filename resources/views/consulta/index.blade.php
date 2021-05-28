@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div>
                @if (session('mensaje'))
                <div class="alert alert-warning">
                {{ session('mensaje') }}
                </div>
                @endif
            </div>
        </div>
    </div>
<form method="POST" action="{{route('consulta.store')}}">
  <div class="row">
    <div class="col-sm">
        <div class="form-group">
            <label for="documento">Documento</label>
            <input type="text" name="documento" class="form-control" id="documento" placeholder="Ingrese documento" required>
        </div>  
    </div>
    <div class="col-sm">
        <div class="form-group">
            <label for="fecha_nacimiento">Fecha Nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control" id="fecha_nacimiento">
        </div>   
    </div>
    <div class="col-sm" style="margin-top: auto;">
        <div class="form-group">        
            <button type="submit" class="btn btn-primary">Consultar</button>        
        </div> 
    </div>
 </div>
  <!-- row -->
    <div class="row">
        <div class="card">
            <div class="card-body col-lg-12 col-md-12 col-sm-12">
                <h4>Nota</h4>
                <p><strong>Nomina:</strong> Este estado usted es beneficiario del programa subsidio economico y su cobro es mensual.</p>    
                <p><strong>Priorizado:</strong> Este estado usted esta en un proceso de espera en el cual tiene asignado una ubicación en el listado.</p>    
                <p><strong>Priorizado mayores de 70 años:</strong> Este estado usted esta priorizado para cobrar temporalmente por un periodo de gracia 
                contemplado por el gobierno nacional, por la emergencia presentada este año, es decir en cualquier momento este estado 
                puede cambiar.</p>
                <p style="font-weight: bold;">Cabe aclarar que el programa adulto mayor no tiene 
                injerencia en la decisión de estos estados
                ya que el responsable es el programa Colombia Mayor del ministerio de trabajo.</p>                 
            </div>
        </div>        
    </div>
</form>
</div>

@endsection
