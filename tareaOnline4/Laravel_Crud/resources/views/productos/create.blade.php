@extends("../layouts.plantilla")

@section("cabecera")
Insertar Registros
@endsection

@section("contenido")
{!! Form::open(['url' => '/productos','method' => 'post','files'=>'true']) !!}
<!-- <form action="/productos" method="post"> -->
<table><tr><td>{!! Form::file('file') !!}</td></tr></table>
<table>


<tr>
<!-- <td>Nombre: </td> -->
<td>{!! Form::label('nombreArticulo', 'Nombre: ')  !!}</td>
<td>
<!-- <input type="text" name="nombreArticulo" id=""> -->
{!! Form::text('nombreArticulo') !!}
<!-- {{csrf_field()}} -->
{!! Form::token();!!}
</td>
</tr>
<tr>
<!-- <td>Sección: </td> -->
<td>{!! Form::label('seccion', 'Sección: ')  !!} </td>
<td>
<!-- <input type="text" name="seccion" id=""> -->
{!!  Form::text('seccion')  !!}
</td>
</tr>
<tr>
<!-- <td>Precio</td> -->
<td>{!! Form::label('precio', 'Precio: ')  !!} </td>
<td>
<!-- <input type="text" name="precio" id=""> -->
{!!  Form::text('precio')  !!}
</td>
</tr>
<tr>
<!-- <td>Fecha</td> -->
<td>{!! Form::label('fecha', 'Fecha: ')  !!} </td>
<td>
<!-- <input type="text" name="fecha" id=""> -->
{!!  Form::text('fecha')  !!}
</td>
</tr>

<tr>
<!-- <td>País de origen</td> -->
<td>{!! Form::label('paisOrigen', 'País de Origen: ')  !!} </td>
<td>
<!-- <input type="text" name="paisOrigen" id=""> -->
{!!  Form::text('paisOrigen')  !!}


</td>
</tr>

<tr>
<td>
<!-- <input type="submit" name="enviar" value="Enviar"> -->
{!! Form::submit('Añadir Producto'); !!}
</td>
<td>
<!-- <input type="reset" name="borrar" value="Borrar"> -->
{!! Form::reset('Eliminar campos'); !!}
</td>
</tr>
</table>
<!-- </form> -->
{!! Form::close() !!}
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