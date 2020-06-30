@extends('adminlte::page')

@section('title', 'Satuan')

@section('content_header')
<h1><button name="btn_add" id="btn_add" class="btn btn-primary btn-sm">tambah Satuan</button></h1>
@stop

@section('content')
@if(session('status'))
<div class="alert alert-success">{{ session('status')}}</div>
@endif

<div class="box box-primary">
	<div class="box-header">
		<h3 class="box-title">satuan</h3>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table id="tab_data" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Nama</th>
					<th></th>
				</tr>
			</thead>
			
		</table>
	</div>
	<!-- /.box-body -->
</div>
<!-- /.box -->

<div id="createModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				     
				<span id="form_result"></span>
				<form method="post" id="add" class="form-horizontal" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label class="control-label col-md-4" >Satuan : </label>
						<div class="col-md-8">
							<input type="text" name="name" id="name" class="form-control" />
						</div>
					</div>

					<br />
					<div class="form-group" align="center">
						<input type="hidden" name="action" id="action" />
						<input type="hidden" name="hidden_id" id="hidden_id" />
						<input type="submit" name="action_button" id="action_button" class="btn btn-primary" value="submit" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Delete</h2>
            </div>
            <div class="modal-body">
                <h4 align="center" style="margin:0;">Apakah anda yakin akan menghapus data ini?</h4>
            </div>
            <div class="modal-footer">
             <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
@stop



@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@stop

@section('js')
<!-- toastr notifications -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
	$(function () {
		$('#tab_data').DataTable({
			processing: true,
			serverSide: true,
			ajax:{
				url: "{{ route('satuan.index') }}",
			},
			columns:[

			{
				data: 'name',
				name: 'name',
			},
			{
				data: 'action',
				name: 'action',
				orderable: false
			}
			]
		});

		$('#btn_add').click(function(){
			$('#createModal').modal('show');
			$('#name').val("");
			$('#form_result').hide();
			$('#createModal .modal-title').text("Tambah Satuan");
			$('#action').val("tambah");

		});

		var id_table;
		var html = '';
		$(document).on('click','.edit',function(){
		id_table = $(this).attr('id');
			$('#form_result').hide();
			$('#createModal').modal('show');
			$('#action').val("edit");
			$('#createModal .modal-title').text("Edit Satuan");
			$.ajax({
				url:"/satuan/"+id_table+"/edit",
				dataType:"json",
				success:function(html)
				{
					$('#name').val(html.data.name);
					$('#hidden_id').val(html.data.id);
				}
			})	
		});
		$(document).on('click','.delete',function(){
			id_table = $(this).attr('id');
			$('#confirmModal').modal('show');
			$('#ok_button').text('OK');
		});
		$('#ok_button').click(function(){
			$.ajax({
				url:"satuan/destroy/"+id_table,
				beforeSend:function(){
					$('#ok_button').text('Deleting...');
				},
				success:function(data)
				{
					setTimeout(function(){
						$('#confirmModal').modal('hide');
						$('#tab_data').DataTable().ajax.reload();
					}, 2000);
						toastr.success('Satuan telah berhasil dihapus!', 'Success', {timeOut: 5000});
				}
			})
		});


		$('#add').on('submit',function(event){
			event.preventDefault();
			if($('#action').val() == 'tambah'){
				$.ajax({
					url:"{{route('satuan.store')}}",
					method:"POST",
					contentType: false,
					cache:false,
					processData: false,
					dataType:"json",
					data: new FormData(this),
					success:function(data)
					{
						$('#form_result').show();
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
									$('#createModal').modal('hide');

							},1000);
								$('#tab_data').DataTable().ajax.reload();
								toastr.success('Satuan telah berhasil ditambahkan!', 'Success', {timeOut: 5000});
							}
							
					},
					error:function(xhr)
					{
						$('#form_result').show();

				 			html = '<div class="alert alert-danger">';
						 $.each(xhr.responseJSON.errors, function (key, item) 
				          {	
				          	html+='<p>' +item+'</p>';
				          });
				 			html += '</div>';
							$('#form_result').html(html);
						
								
					}//end error
				});
			}else{
				$.ajax({
					url:"{{route('sat.update')}}",
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
									$('#createModal').modal('hide');

							},1000);
								$('#tab_data').DataTable().ajax.reload();
								toastr.success('Satuan telah berhasil diedit!', 'Success', {timeOut: 5000});
							}
							
					},
					error:function(xhr)
					{
						$('#form_result').show();

				 			html = '<div class="alert alert-danger">';
						 $.each(xhr.responseJSON.errors, function (key, item) 
				          {	
				          	html+='<p>' +item+'</p>';
				          });
				 			html += '</div>';
							$('#form_result').html(html);
						
								
					}//end error
				});

			}
		});
	});
</script>
@stop