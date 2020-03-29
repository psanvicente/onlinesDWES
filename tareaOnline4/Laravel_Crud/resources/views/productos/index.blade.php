@extends("../layouts.plantilla")

@section("cabecera")
Leer Registros
@endsection

@section("contenido")
<table>
<th>Nombre Artículo</th>
<th>Sección</th>
<th>Precio</th>
<th>Fecha</th>
<th>País de origen</th>
<th>Imagen</th>
<tr>
    @foreach($productos as $producto)
        <tr>
            <td><a href="{{route('productos.edit',$producto->id)}}">{{$producto->nombreArticulo}}</a></td>
            <td>{{$producto->seccion}}</td>
            <td>{{$producto->precio}}</td>
            <td>{{$producto->fecha}}</td>
            <td>{{$producto->paisOrigen}}</td>
            <td><img src="../images/{{$producto->ruta}}" height="100"></td>
        </tr>
    @endforeach
    
</table>
@endsection

@section("pie")
@endsection