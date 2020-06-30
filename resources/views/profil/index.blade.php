@extends('adminlte::page')

@section('title', 'Profil ')

@section('content_header')
<h1> Halaman Profil</h1>
@stop

@section('content')
<div class="col-md-6">
<div class="box box-primary">
	<div class="box-header">
		<button type="button" name="edit_profil" id="edit_profil" class="btn btn-success btn-sm">Edit</button>
		<button type="button" name="change" id="change" class="btn btn-primary btn-sm">Ganti Password</button>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table id="tab_data" class="rtable rtable--flip">
			<thead>
				<tr>
					<th style="text-align: right; 	">nama :
					</th>
					<th style="text-align: right; ">email :
					</th>
					<th style="text-align: right; ">departemen	:
					</th>
					<th style="text-align: right; ">role :
					</th>
					
				</tr>
			</thead>
		</table>
	</div>
	<!-- /.box-body -->
</div>
<!-- /.box -->
</div>






<div id="editModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Edit profil</h4>
			</div>
			<div class="modal-body">
				<span id="form_result"></span>
				<form method="post" id="edit" class="form-horizontal" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label class="control-label col-md-4">Nama : </label>
						<div class="col-md-8">
							<input type="text" name="name" id="name" class="form-control"  /> 
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4">Email : </label>
						<div class="col-md-8">
							<input type="text" name="email" id="email" class="form-control"   /> 
						</div>
					</div>
					<br />
					<div class="form-group" align="center">
						<input type="hidden" name="hidden_id" id="hidden_id" />
						<input type="submit" name="action_button" id="action_button" class="btn btn-primary" value="submit" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

 <div id="changeModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Ganti Password</h4>
			</div>
			<div class="modal-body">
				<span id="change_result"></span>

				<form method="post" id="changed" class="form-horizontal" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label class="control-label col-md-4">Password baru : </label>
						<div class="col-md-8">
							<input type="password" name="inputan" id="inputan" class="form-control" placeholder="Masukkan Password baru"/>
						</div>
					</div>
					<br />
					<div class="form-group" align="center">
						<input type="hidden" name="change_id" id="change_id" />
						<input type="submit" name="change_button" id="change_button" class="btn btn-primary" value="submit" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<style type="text/css">

/*thead {
    float: left;
  }
  
  tbody {
    float: right;   
  }

th,td { display: block; border: 1px solid black; }*/
/*tr{display: inline-block;}
tbody{white-space: nowrap;}*/

/*!
// CSS only Responsive Tables
// http://dbushell.com/2016/03/04/css-only-responsive-tables/
// by David Bushell
*/

.rtable th {
  font-size: 11px;
  text-align: left;
  text-transform: uppercase;
}

.rtable th,
.rtable td {
  padding: 6px 12px;
  border: 1px solid #d9d7ce;
}

.rtable--flip {
  display: flex;
  overflow: hidden;
  background: none;
}



.rtable--flip tr {
  display: flex;
  flex-direction: column;
  min-width: min-content;
  flex-shrink: 0;
}

body {
  margin: 0;
  color: #494b4d;
  font-size: 14px;
  line-height: 20px;
}



/*.rtable th {
  font-size: 11px;
  text-align: left;
  text-transform: uppercase;
}
.rtable th,
.rtable td {
  padding: 6px 12px;
  border: 1px solid #d9d7ce;
}
body {
  margin: 0;
  padding: 25px;
  color: #494b4d;
  font-size: 14px;
  line-height: 20px;
}

.rtable--flip {
  display: flex;
  overflow: hidden;
  background: none;
}
.rtable--flip thead {
  display: flex;
  flex-shrink: 0;
  min-width: min-content;
}
.rtable--flip tbody {
  display: flex;
  position: relative;
  overflow-x: auto;
  overflow-y: hidden;
}
.rtable--flip tr {
  display: flex;
  flex-direction: column;
  min-width: min-content;
  flex-shrink: 0;
}
.rtable--flip th:not(:last-child),
.rtable--flip td:not(:last-child) {
  border-bottom: 0;
}
.rtable--flip td,
.rtable--flip th {
  display: block;
}*/
</style>
@stop

@section('js')
<!-- toastr notifications -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
 <script type="text/javascript">
 	$(function(){
 		
 		$('#tab_data').DataTable({
			processing: true,
			serverSide: true,
			paging:false,
			bInfo:false,
			bFilter:false,
			ajax:{
				url: "{{ route('profil.index') }}",
			},
			columns:[

			{
				data: 'name',
				name: 'name',

			},
			{
				data: 'email',
				name: 'email',
			},
			{
				data: 'dep_name',
				name: 'departement',
			},
			{
				data: 'role',
				name: 'role',
			}
			],
			targets: 'no-sort',
			bSort: false,
		});
  //  var rows = $('#tab_data tr');
  // var r = rows.eq(0);
  // var nrows = rows.length;
  // var ncols = rows.eq(0).find('th,td').length;

  // var i = 0;
  // var tb = $('<tbody></tbody>');

  // while (i < ncols) {
  //   cell = 0;
  //   tem = $('<tr></tr>');
  //   while (cell < ncols) {
  //     next = rows.eq(cell++).find('th,td').eq(0);
  //     tem.append(next);
  //   }
  //   tb.append(tem);
  //   ++i;
  // }
  // $('#tab_data').append(tb);
  //   $('#tab_data').show();
		

 		var x= '{{$data[0]->id}}';
 		$(document).on('click','#change',function(){
 			$('#changeModal').modal('show');
 			$('#change_result').hide();
 			$('#inputan').val('');
 			$.ajax({
 				url:"/profil/"+x+"/change",
 				dataType:"json",
 				success:function(html)
 				{
 					$('#change_id').val(html.data.id);
 					
 				}
 			});
 		});
 		$(document).on('click','#edit_profil',function(){
 			$('#editModal').modal('show');
 			$('#form_result').hide();
 			$.ajax({
 				url:"/profil/"+x+"/edit",
 				dataType:"json",
 				success:function(html){
 					$('#name').val(html.data.name);
 					$('#email').val(html.data.email);
 					$('#hidden_id').val(html.data.id);
 					
 				}
 			});
 		});
 		
 		$('#edit').on('submit',function(event){
 		
 			event.preventDefault();
 			$.ajax({
					url:"{{route('prof.update')}}",
					method:"POST",
					contentType: false,
					cache:false,
					processData: false,
					dataType:"json",
					data: new FormData(this),
					success:function(data)
					{
						$('#form_result').show();
						var html = '';
							if(data.errors)
							{

								html = '<div class="alert alert-danger">';
								for(var count = 0; count < data.errors.length; count++)
								{
									html += '<p>' + data.errors[count] + '</p>';
								}
								html += '</div>';
								$('#form_result').html(html);
							}
							if(data.success)
							{
								html = '<div class="alert alert-success">' + data.success + '</div>';
								setTimeout(function(){
									$('#editModal').modal('hide');

							},1000);
								$('#tab_data').DataTable().ajax.reload();//ini yang penting karena tanpa reload page
								toastr.success('profil telah berhasil diedit!', 'Success', {timeOut: 5000});
							}
							
					},
					error:function(xhr)
					{
						$('#form_result').show();
						console.log(xhr);
				 			html = '<div class="alert alert-danger">';
						 $.each(xhr.responseJSON.errors, function (key, item) 
				          {	
				          	html+='<p>' +item+'</p>';
				          });
				 			html += '</div>';
							$('#form_result').html(html);
						
								
					}//end error
				});
 		});//edit function

 		$('#changed').on('submit',function(event){
 			event.preventDefault();
 			$.ajax({
					url:"{{route('pass.update')}}",
					method:"POST",
					contentType: false,
					cache:false,
					processData: false,
					dataType:"json",
					data: new FormData(this),
					success:function(data)
					{
						$('#change_result').show();
						var html = '';
							if(data.errors)
							{

								html = '<div class="alert alert-danger">';
								for(var count = 0; count < data.errors.length; count++)
								{
									html += '<p>' + data.errors[count] + '</p>';
								}
								html += '</div>';
								$('#change_result').html(html);
							}
							if(data.success)
							{
								html = '<div class="alert alert-success">' + data.success + '</div>';
								setTimeout(function(){
									$('#changeModal').modal('hide');

							},1000);
								toastr.success('Password telah berhasil diedit!', 'Success', {timeOut: 5000});
								
							}
							
							console.log(html);
					},
					error:function(xhr)
					{
						$('#change_result').show();

				 			html = '<div class="alert alert-danger">';
						 $.each(xhr.responseJSON.errors, function (key, item) 
				          {	
				          	html+='<p>' +item+'</p>';
				          });
				 			html += '</div>';
							$('#change_result').html(html);
						
								
					}//end error
				});
 		});//edit function

 	});//end function
 </script>
@stop