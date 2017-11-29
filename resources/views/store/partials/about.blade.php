@extends('store.template')
@section('content')


<div class="container ">
<center><h1>SURF WAVES™  Contáctenos</h1>
<p>SURF WAVES es tu tienda en l en compras online.

Si desea más información acerca de nuestros servicios, ingrese su información en el formulario que se presenta a continuación.
Uno de nuestros representantes le estará contactando a la mayor brevedad posible. También puede llamarnos al (506) 4031-7500 o escribirnos a
info@surfwaves.com</p></center>

<div class="form-group">
 <label for="nombre">
   Nombre
 </label>
 <input type="text" name="nombre" class="form-control" placeholder="Nombre....">
</div>

<div class="form-group">
 <label for="correo">
   Correo Electronico
 </label>
 <input type="text" name="descripcion" class="form-control" placeholder="alguien@.com">
</div>

<div class="form-group">
 <label for="mensaje">
   Mensaje
 </label>
 <input type="text" name="descripcion" class="form-control" placeholder="Mensaje....">
</div>

<center>
<div class="form-group">
		<button type="submit" class="btn btn-primary">Enviar</button>
		<a href="" class="btn btn-warning">Cancelar</a>
</div>
</center>

</div>
@stop
