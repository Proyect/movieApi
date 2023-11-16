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
</tfoot>
    <tr>
        <th> ID </th>
        <th> Title </th>
        <th> Year </th>
        <th> Genre </th>
        <th> OP </th>
    </tr>    
</table>   
<script>
    
    var dataMovie; 
    $.getJSON("./movie.data", 
        function (data, textStatus, jqXHR) {
            console.log(data);
            for (const movie of data){
                $("tbody").append(
                    '<tr><td>'+movie.id+'</td><td>'+movie.title+'</td><td>'+movie.year+'</td><td>'+movie.genre+'</td><td>'+movie.id+'</td></tr>'
                );
            }
            dataMovie = data;
            new DataTable('#tableMovie');
            $().DataTable();
        }
    );    
 </script>    
@endsection
  
