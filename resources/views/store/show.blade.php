@extends('store.template')

@section('content')

<div class="container text-center">

<div class="page-header">
<h1><i class="fa fa-shopping-cart"></i>&nbsp Detalle del Producto</h1>
</div>

<div class="row">

<div class="col-md-6">
  <div class="product-block">
  <img src="{{$product->imagen}}" width="50%" alt="">
  <p>
  <a class="btn btn-success btn-block " href="{{route('cart-add',$product->slug)}}">Lo quiero <i class="fa fa-cart-plus "></i>
  </a>
  </p>

  </div>
</div>



<div class="col-md-6">
  <div class="product-info panel">
  <h1>{{$product->nombre}}</h1>
  <p>{{$product->descripcion}}</p>
  <p>{{$product->extracto}}</p>
  <pre><b>Características</b> <br>{{$product->caracteristicas}}</pre>
  <h3><span class="label label-warning">Precio: ${{$product->precio}}</span></h3>

  </div>
</div>
</div>



<p><a class="btn btn-primary" href="{{'http://localhost:8000/'}}"> <i class="fa fa-chevron-circle-left"></i>&nbsp Regresar</a></p>
</div>
@stop
