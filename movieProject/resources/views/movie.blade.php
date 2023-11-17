@extends('layouts.app')
@section('content')
 Tabla de peliculas
 <table id="tableMovie" class="table table-striped" >
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

<div class="text-right">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-id="3">New Movie</button>
</div>
<form id="updateData" >
        <input type="text" class = "form-control" id="id">
    </form>  

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New message</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">ID:</label>
                  <input type="text" class="form-control" id="id">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Title:</label>
                    <input type="text" class="form-control" id="title">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Year:</label>
                    <input type="number" class="form-control" id="year">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Genre:</label>
                    <input type="text" class="form-control" id="genre">
                  </div>
                <button type="button" class="btn btn-primary">Send</button>
              </form>
            </div>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              
            </div>
          </div>
        </div>
      </div>

<script>

    var dataMovie; 
    $.getJSON("./movie.data", 
        function (data, textStatus, jqXHR) {
            console.log(data);
            for (const movie of data){
                $("tbody").append(
                    '<tr><td>'+movie.id+'</td><td>'+movie.title+'</td><td>'+movie.year+'</td><td>'+movie.genre+'</td><td> <ion-icon name="create-outline" data-id="'+movie.id+'" title="Update Movie"  class="text-primary"></ion-icon><ion-icon id="delete" name="trash-outline" data-id="'+movie.id+'" title="Delete Movie"  class="text-danger"></ion-icon> </td></tr>'
                );
            }
            dataMovie = data;
            new DataTable('#tableMovie');           
        }
    );  
    //modal     
    $(document).ready(function() {
        $('#create-outline').click(function () {        
            console.log("update movies");
            $("#exampleModal").modal("show");
        });
    });
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var recipient = button.data('id')        
         var modal = $(this);
        
    })
 </script>    
@endsection
  
