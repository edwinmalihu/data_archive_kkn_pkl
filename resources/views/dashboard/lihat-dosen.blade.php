@extends('dashboard.layout')

@section('container')

<!-- panel table add row Pkl -->
<div class="panel">
  <header class="panel-heading">
    <h3 class="panel-title">Daftar Dosen</h3>
  </header>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-6">
        <div class="mb-15">
        </div>
      </div>
    </div>
    <table class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleUser">
      <thead>
        <tr>
          <th>Nama Dosen</th>
          <th>NIP</th>
          <th>Fakultas</th>
          <th>Jurusan</th>
          <th>Alamat</th>
          <th>Action</th>
        </tr>
        <tr>
          <td>Nama Dosen</td>
          <td>NIP</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $dosen)
        <tr class="gradeA">
          <td>{{$dosen-> nama}}</td>
          <td>{{$dosen-> nip}}</td>
          <td>{{$dosen-> fakultas}}</td>
          <td>{{$dosen-> jurusan}}</td>
          <td>{{$dosen-> alamat}}</td>
          <td>
          <a href="/dashboard/edit-dosen/{{$dosen->id}}" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                      data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
          <form action="/dashboard/delete-dosen/{{$dosen -> id}}" method="post" class="d-inline">
           @method('delete')
           @csrf
           <button class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row" type="submit" data-toggle="tooltip" data-original-title="Remove" onclick="return confirm('Anda Yakin Mau Hapus Data ?')"><i class="icon wb-trash" aria-hidden="true"></i></button>
            </form>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!-- end pandel tabel kkn -->

<!-- Modal verifikasi  -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Verifikasi User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form-edit" action="/dashboard/daftar-user" method="post">
        @method('patch')
        @csrf
        <div class="form-group">
          <input type="hidden" class="form-control" id="id_user" name="id">
        </div>
          <div class="form-group">
          
            <label for="">Verifikasi</label>
            <select class="form-control" id="verify" name="verify">
              <option value="disable">Disable</option>
              <option value="active">Active</option>
            </select>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@push('custom-scripts')

<script>
  $(document).ready(function () {
    $('.verify').on('click', function(){
        event.preventDefault();
        var id = $(this).attr('id');
        console.log(id);

        $.get(id + '/edit', function (data) {
          $('#id_user').val(data.data.id);
          $('#verify').val(data.data.verify);
        });
    });

    //js pkl
  
    var table3 = $('#exampleUser').DataTable({
            "ordering": false,
            "order": [[ 1, "desc" ]],
            "lengthMenu": [
                        [5, 25, 50, -1],
                        [5, 25, 50, "All"]
                    ],
            "oLanguage": {
              "sInfo": "Showing _START_ to _END_ of _TOTAL_ items."
            }
          });

          $("#exampleUser thead td").each( function ( i ) {
            
            if ($(this).text() !== '') {
                  var isStatusColumn = (($(this).text() == 'Status') ? true : false);
              var select = $('<select><option value=""></option></select>')
                      .appendTo( $(this).empty() )
                      .on( 'change', function () {
                          var val = $(this).val();
                  
                          table3.column( i )
                              .search( val ? '^'+$(this).val()+'$' : val, true, false )
                              .draw();
                      } );
              
              // Get the Status values a specific way since the status is a anchor/image
              if (isStatusColumn) {
                var statusItems = [];
                
                        /* ### IS THERE A BETTER/SIMPLER WAY TO GET A UNIQUE ARRAY OF <TD> data-filter ATTRIBUTES? ### */
                  table3.column( i ).nodes().to$().each( function(d, j){
                  var thisStatus = $(j).attr("data-filter");
                  if($.inArray(thisStatus, statusItems) === -1) statusItems.push(thisStatus);
                } );
                
                statusItems.sort();
                        
                $.each( statusItems, function(i, item){
                    select.append( '<option value="'+item+'">'+item+'</option>' );
                });

              }
                    // All other non-Status columns (like the example)
              else {
                table3.column( i ).data().unique().sort().each( function ( d, j ) {  
                  select.append( '<option value="'+d+'">'+d+'</option>' );
                    } );	
              }
                  
            }
          } );

  });
</script>
@endpush