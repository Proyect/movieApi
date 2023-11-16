@extends('layouts.app')
@section('content')
 Tabla de peliculas
<table id="tableMovie" class="" >
<thead>
    <tr>
        <th> ID </th>
        <th> Title </th>
        <th> Year </th>
        <th> Genre </th>
        <th> OP </th>
    </tr>
</thead>
<tbody id="bodyTable">

</tbody>
<tfoot>
    <tr>
        <th> ID </th>
        <th> Title </th>
        <th> Year </th>
        <th> Genre </th>
        <th> OP </th>
    </tr> 
</tfoot>   
</table>   
<script>
    
    var dataMovie; 
    $.getJSON("./movie.data", 
        function (data, textStatus, jqXHR) {
            console.log(data);
            for (const movie of data){
                $("tbody").append(
                    '<tr><td>'+movie.id+'</td><td>'+movie.title+'</td><td>'+movie.year+'</td><td>'+movie.genre+'</td><td><p data-op=update data.id='+movie.id+'>Update</p><p data-op=delete data.id='+movie.id+'>Delete</p> </td></tr>'
                );
            }
            dataMovie = data;
            new DataTable('#tableMovie');
            $().DataTable();
        }
    );    
 </script>    
@endsection
  
