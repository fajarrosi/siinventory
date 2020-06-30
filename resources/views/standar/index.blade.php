@extends('adminlte::page')

@section('title', 'Standar Barang')

@section('content_header')
<h1><button name="btn_add" id="btn_add" class="btn btn-primary btn-sm">tambah Barang</button></h1>
@stop

@section('content')
@if(session('status'))
<div class="alert alert-success">{{ session('status')}}</div>
@endif

<div class="box box-primary">
	<div class="box-header">
		<h3 class="box-title">Standar Barang Laboratorium {{$dep[0]->name}}</h3>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table id="tab_data" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Nama Barang</th>
					<th>Total</th>
					<th>Aksi</th>
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
						<label for="items_id" class="control-label col-md-4">Barang :</label>
						<div class="col-md-8">
							<select class="form-control" id="item_id" name="item_id">

								@if(count($item)) @foreach($item as $row)
								<option value="{{$row->id}}">{{$row->name}}</option>
								@endforeach @endif
								<option value="other">Other</option>
							</select>
						</div>
						@if ($errors->has('items_id'))
						<span class="help-block">{{ $errors->first('items_id') }}</span>
						@endif
					</div>
					<div id="additem" class="form-group">
						<label for="new" class="control-label col-md-4">Tambah Barang baru :</label>
						<div class="col-md-8">
							<input type="text" name="new" id="new" placeholder="Masukkan Nama Barang" class="form-control"/>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-4" >Total : </label>
						<div class="col-md-8">
							<input type="text" name="total" id="total" class="form-control" />
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
				url: "{{ route('standar_barang.index') }}",
			},
			columns:[

			{
				data: 'name',
				name: 'name',
			},
			{
				data: 'total',
				name: 'total',
			},
			{
				data: 'action',
				name: 'action',
				orderable: false
			}
			]
		});

		$('#btn_add').click(function(){
		    $('#additem').hide();
			$('#createModal').modal('show');
			$('#name').val("");
			$('#total').val("");
			$('#form_result').hide();
			$('#createModal .modal-title').text("Tambah Barang");
			$('#action').val("tambah");
			$('#item_id').attr("disabled",false);
			var action = 'tambah';
			getList(action);

		});
		
		function getList(name){
			$('#item_id').empty();
			$.ajax({
				url:"/list/"+name,
				method:"GET",
				success:function(data){
					// console.log(name);
					if(data.length == 0){

					}else{
						if(name == 'tambah'){
							$.each(data,function(key,value){
							option ='<option value="'+value.id+'">'+value.name+'</option>';
							$('#item_id').append(option);
							other = '<option value="other">Lainnya</option>';
							});
							$('#item_id').append(other);
						}else{
							$.each(data,function(key,value){
							option ='<option value="'+value.id+'">'+value.name+'</option>';
							$('#item_id').append(option);
							other = '<option>Other</option>';
							});
						}
						
					}
				}
			});
		}

		 $('#item_id').on('change',function(){

      if($(this).find(":selected").val() == 'other'){
      		$('#additem').show();
      }else{
			$('#additem').hide();

      }
    });

		var id_table;
		var html = '';
		$(document).on('click','.edit',function(){
        	var action = $(this).attr('id');
			getList(action);
			$('#item_id').attr("disabled",true);
		id_table = $(this).attr('id');
			
				$('#additem').hide();
			

			$("#item_id option[value='other']").hide();
			$('#form_result').hide();
			$('#createModal').modal('show');
			$('#action').val("edit");
			$('#createModal .modal-title').text("Edit Barang");
			$.ajax({
				url:"/standar_barang/"+id_table+"/edit",
				dataType:"json",
				success:function(html)
				{
					$('#total').val(html.data.total);
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
				url:"standar/destroy/"+id_table,
				beforeSend:function(){
					$('#ok_button').text('Deleting...');
				},
				success:function(data)
				{
					setTimeout(function(){
						$('#confirmModal').modal('hide');
						$('#tab_data').DataTable().ajax.reload();
					}, 2000);
						toastr.success('Barang telah berhasil dihapus!', 'Success', {timeOut: 5000});
				}
			})
		});


		$('#add').on('submit',function(event){
			event.preventDefault();
			if($('#action').val() == 'tambah'){
				$.ajax({
					url:"{{route('standar_barang.store')}}",
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
								toastr.success('Barang telah berhasil ditambahkan!', 'Success', {timeOut: 5000});
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
					url:"{{route('stand.update')}}",
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
								toastr.success('Barang telah berhasil diedit!', 'Success', {timeOut: 5000});
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