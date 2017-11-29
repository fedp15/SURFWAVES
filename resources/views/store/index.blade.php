@extends('store.template')
@section('content')
@include('store.partials.slider')




<div class="container text-center">
  <div id="products">
    @foreach($products as $product)

    <div class="productos white-panel">
      <h3>{{ $product->nombre}}</h3><hr>
      <img src="{{ $product->imagen }}" width="200">
  <div class="product-info panel">
     <p>{{$product->descripcion}}</p>
      <p>{{$product->extracto}}</p>
        <h3><span class="btn btn-warning">Precio: ${{$product->precio}}</span> </h3>
      <p>
  <a class="btn btn-success" href="{{route('cart-add',$product->slug)}}"><i class='fa fa-cart-plus'> </i>&nbsp Lo quiero</a>
  <a class="btn btn-primary" href="{{route('product-detail',$product->slug)}}"><i class="fa fa-chevron-circle-right"></i>&nbsp Ver más</a>
      </p>

    </div>
  </div>
    @endforeach
  </div>
</div>
@stop
