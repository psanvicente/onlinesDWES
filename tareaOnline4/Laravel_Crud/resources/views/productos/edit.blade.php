@extends("../layouts.plantilla")

@section("cabecera")
Editar Registro
@endsection

@section("contenido")
<!-- <form action="/productos/{{$producto->id}}" method="post"> -->
{!! Form::model($producto, ['method'=>'POST', 'action'=>['ProductosController@update',$producto->id],'files'=>'true']) !!}
<!-- {!! Form::open(['method'=>'POST','action'=>['ProductosController@update',$producto->id]]) !!} -->
<table><tr><td>{!! Form::file('file') !!}</td></tr></table>
<table>
<table>

<tr>
<!-- <td>Nombre: </td> -->
<td>{!! Form::label('nombreArticulo', 'Nombre: ')  !!}</td>
<td>
<!-- <input type="text" name="nombreArticulo" id="" value="{{$producto->nombreArticulo}}"> -->
{!! Form::text('nombreArticulo',$producto->nombreArticulo) !!}
<!-- {{csrf_field()}} -->
{!! Form::token();!!}

<!-- HACE FALTA CON FORM::MODEL, PERO CON FORM::OPEN NO -->
<!-- <input type="hidden" name="_method" value="PUT">  -->
{!! Form::hidden('_method',"PUT") !!}
</td>
</tr>

<tr>
<!-- <td>Sección: </td> -->
<td>{!! Form::label('seccion', 'Sección: ')  !!}</td>

<td>
<!-- <input type="text" name="seccion" id="" value="{{$producto->seccion}}"> -->
{!! Form::text('seccion',$producto->seccion) !!}


</td>
</tr>

<tr>
<!-- <td>Precio</td> -->
<td>{!! Form::label('precio', 'Precio: ')  !!}</td>

<td>
{!! Form::text('precio',$producto->precio) !!}

</td>
</tr>

<tr>
<!-- <td>Fecha</td> -->
<td>{!! Form::label('fecha', 'Fecha: ')  !!}</td>

<td>
<!-- <input type="text" name="fecha" id="" value="{{$producto->fecha}}"> -->
{!! Form::text('fecha',$producto->fecha) !!}

</td>
</tr>

<tr>
<!-- <td>País de origen</td> -->
<td>{!! Form::label('paisOrigen', 'Pais de origen: ')  !!}</td>

<td>
<!-- <input type="text" name="paisOrigen" id="" value="{{$producto->paisOrigen}}"> -->
{!! Form::text('paisOrigen',$producto->paisOrigen) !!}

</td>
</tr>
<!-- !-->
<tr>

<td>{!! Form::label('ruta', 'Imagen: ')  !!}</td>

<td><img src="../../images/{{$producto->ruta}}" height="100"></td>
</tr>


<tr>
<td>
<!-- <input type="submit" name="enviar" value="Actualizar"> -->
{!! Form::submit('Actualizar Producto'); !!}
</td>
<td>
{!! Form::reset('Limpiar Campos'); !!}
</td>
</tr>
</table>
<!-- </form> -->
{!! Form::close(); !!}

<!-- <form action="/productos/{{$producto->id}}" method="post"> -->
{!! Form::open(['method'=>'DELETE','action'=>['ProductosController@destroy',$producto->id]]) !!}
{{csrf_field()}}
<!-- <input type="hidden" name="_method" value="DELETE"> -->
<input type="submit" value="Eliminar Registro">

<!-- </form> -->
{!! Form::close(); !!}
@if(count($errors)>0)
<ul>
    @foreach($errors->all() as $error)
       <li> {{$error}} </li>

    @endforeach
</ul>

@endif
@endsection

@section("pie")
@endsection