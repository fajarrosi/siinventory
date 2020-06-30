@extends('adminlte::page')

@section('title', 'Barang Masuk')

@section('content_header')

<button type="button" name="btn_add" id="btn_add" class="btn btn-primary btn-sm">Tambah Barang Masuk</button>
@stop

@section('content')	
@if(session('status'))
<div class="alert alert-success">{{ session('status')}}</div>
@endif

<div class="box box-primary">
	<div class="box-header">
		<h3 class="box-title">Data Barang Masuk</h3>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table id="tab_data2" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th rowspan="2">Nama Barang</th>
					<th rowspan="2">Spesifikasi</th>
					<th rowspan="2">Volume</th>
					<th rowspan="2">Satuan</th>
					<th rowspan="2">Sumber Informasi</th>
					<th rowspan="2">Harga</th>
					<th rowspan="2">Total Harga</th>
					<th colspan="3" style="text-align: center;">Saat beli</th>
					<th rowspan="2">Aksi</th>
				</tr>
				<tr>
					<th>Harga</th>
					<th>Volume</th>
					<th>Total Harga</th>
				</tr>

			</thead>

		</table>

		
	</div>
	<!-- /.box-body -->
</div>
<!-- /.box -->


<div id="createModal" class="modal fade" role="dialog">
	<div class="modal-dialog" style="width: 80%;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Input Barang yang telah dibeli</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>Jurusan </label>
							<select class="form-control" id="departement" name="departement">
								<option>Select Jurusan </option>
								@if(count($departement)) @foreach($departement as $row)
								<option value="{{$row->name}}">{{$row->name}}</option>
								@endforeach @endif
							</select>
							@if ($errors->has('departement'))
							<span class="help-block">{{ $errors->first('departement') }}</span>
							@endif
						</div>

						<div class="form-group" >
							<button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>

							<button type="button" name="reset" id="reset" class="btn btn-default">Reset</button>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<form method="post" id="beli" class="form-horizontal" enctype="multipart/form-data" >
							@csrf
							<table id="tab_data" class="table table-bordered table-striped" style="width: 100%;">
								<thead>
									<tr>
										<th rowspan="2" style="vertical-align : middle;text-align: center;">Nama Barang</th>
										<th rowspan="2" style="vertical-align : middle;text-align: center;">Spesifikasi</th>
										<th rowspan="2" style="vertical-align : middle;text-align: center;">Volume</th>
										<th rowspan="2" style="vertical-align : middle;text-align: center;">Satuan</th>
										<th rowspan="2" style="vertical-align : middle;text-align: center;">Sumber Informasi</th>
										<th rowspan="2" style="vertical-align : middle;text-align: center;">Harga</th>
										<th rowspan="2" style="vertical-align : middle;text-align: center;">Total Harga</th>
										<th colspan="3" style="text-align: center;">Saat beli</th>
									</tr>
									<tr>
										<th>Harga</th>
										<th>Volume</th>
										<th>Total Harga</th>
									</tr>
								</thead>

							</table>

							<input type="submit" name="action_button" id="action_button" class="btn btn-primary" value="submit"  />
						</form>		
					</div>	
				</div>

			</div>
		</div>
	</div>
</div>


<div id="EditModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Harga, volume serta total harga barang saat dibeli</h4>
			</div>
			<div class="modal-body">
				<span id="form_result"></span>
				<form method="post" id="edit" class="form-horizontal" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label class="control-label col-md-4" >Harga : </label>
						<div class="col-md-8">
							<div class="input-group">
								<div class="input-group-addon">
									<span>Rp</span>
								</div>
								<input type="text" name="hrge" id="hrge" class=" form-control"  style=" text-align:left;">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-4" >Volume : </label>
						<div class="col-md-4">
							<div class="input-group">
										<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" data-type="minus" data-field="jmldbl">
												<span class="fa fa-minus"></span>
											</button>
										</span>
										<input type="text"  name="jmldbl" id="jmldbl" class="form-control input-number" value="1" min="1" max="10000" >
										<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="jmldbl">
												<span class="fa fa-plus"></span>
											</button>
										</span>
									</div>
							<!-- <input type="text" name="jmldbl" id="jmldbl" class="form-control" /> -->
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-4" >Total Harga : </label>
						<div class="col-md-8">
							<div class="input-group">
								<div class="input-group-addon">
									<span>Rp</span>
								</div>
								<input type="text" name="tote" id="tote" class=" form-control"  style=" text-align:left;" readonly="">
							</div>
						</div>
					</div>

					<br />
					<div class="form-group" align="center">
						<input type="submit" class="btn btn-primary" value="submit" />
						<input type="hidden" name="hidden_id" id="hidden_id" />
						<input type="hidden" name="hidden_jml" id="hidden_jml" />
						<input type="hidden" name="hidden_hrg" id="hidden_hrg" />
						<input type="hidden" name="hidden_tot" id="hidden_tot" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


@stop



@section('css')
<style type="text/css">
	th.dt-center, td.dt-center { text-align: center; }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

@stop

@section('js')
<!-- toastr notifications -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>

	$(function () {

		fill_datatable();
		var dataTable;

		function fill_datatable(departement = '')
		{
			dataTable = $('#tab_data').DataTable({
				processing: true,
				serverSide: true,
				ajax:{
					url: "{{ route('barang_masuk.index') }}",
					data:{departement:departement}
				},
				columns:[

				{
					data: 'item_name',
					name: 'item_name',
				},
				{
					data: 'spesifikasi',
					name: 'spesifikasi',
				},
				{
					data: 'volume',
					name: 'volume',
				},
				{
					data: 'satuan',
					name: 'satuan',
				},
				{
					data: 'sumber',
					name: 'sumber',
				},
				{
					data: 'harga',
					name: 'harga',
				},
				{
					data: 'total',
					name: 'total',
				},
				{
					data: 'hrg',
					name: 'hrg',
				},
				{
					data: 'vlm',
					name: 'vlm',
				},
				{
					data: 'tot',
					name: 'tot',
				}

				]

		});//end dt
	}//end fill db

	$('#tab_data2').DataTable({
		processing: true,
		serverSide: true,
		ajax:{
			url: "{{ route('ibuy') }}"
		},
		columns:[

		{
			data: 'item_name',
			name: 'item_name',
		},
		{
			data: 'spesifikasi',
			name: 'spesifikasi',
		},
		{
			data: 'volume',
			name: 'volume',
		},
		{
			data: 'satuan',
			name: 'satuan',
		},
		{
			data: 'sumber',
			name: 'sumber',
		},
		{
			data: 'harga',
			name: 'harga',
		},
		{
			data: 'total',
			name: 'total',
		},
		{
			data: 'hrg',
			name: 'hrg',
		},
		{
			data: 'vlm',
			name: 'vlm',
		},
		{
			data: 'tot',
			name: 'tot',
		},
		{
			data: 'action',
			name: 'action',
		}
		]
		});//end dt

	$('#filter').click(function(){
		var departement = $('#departement').val();
		if(departement != '')
		{
			$('#tab_data').DataTable().destroy();
			fill_datatable(departement);
		}
		else
		{
			alert('Select Both filter option');
		}
    });//filter

	$('#reset').click(function(){
		$('#departement').val('Select Departement');
		$('#tab_data').DataTable().destroy();
		fill_datatable();
	});

	$('#beli').on('submit',function(event){
			// console.log($('.jm').val());
			event.preventDefault();

			$.ajax({
				url:"{{route('br.update')}}",
				method:"POST",
				contentType: false,
				processData: false,
				dataType:"json",
				data: new FormData(this),
				success:function(data){
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
									// $('#createModal').modal('hide');

								},1000);
						$('#tab_data').DataTable().ajax.reload();
						$('#tab_data2').DataTable().ajax.reload();

						toastr.success('barang masuk telah berhasil ditambahkan!', 'Success', {timeOut: 5000});
					}
				},
				// error:function(xhr)
				// 	{
				// 		$('#form_result').show();

				//  			html = '<div class="alert alert-danger">';
				// 		 $.each(xhr.responseJSON.errors, function (key, item) 
				//           {	
				//           	html+='<p>' +item+'</p>';
				//           });
				//  			html += '</div>';
				// 			$('#form_result').html(html);

				// 	} 

			});
		});//end on submit

/////////////////////////////////EDIT////////////////////////////////////
	$(document).on('click','.edit',function(){
		var id = $(this).attr('id');
		$('#form_result').hide();
		$('#EditModal').modal('show');
		$.ajax({
			url:"/barang_masuk/"+id+"/edit",
			dataType:"json",
			success:function(html)
			{
				var x,hrge,y,tote;
				x = html.data[0].harga;				
				hrge = x.toString().replace(/[^,\d]/g, '');
				y = html.data[0].total;
				tote = y.toString().replace(/[^,\d]/g, '');
				$('#jmldbl').val(html.data[0].jmlh);
				$('#hrge').val(formatRupiah(hrge));
				$('#tote').val(formatRupiah(tote));
				$('#hidden_id').val(html.data[0].id);
				$('#hidden_jml').val(html.data[0].jmlh);
			}
		})
	});

	//////key up hrga, volm, total //////////////////////////////////////
	$('#hrge, #jmldbl').on('keyup',function(e){
		var khrg, kvlm,ktot,kz;

		khrg = $('#hrge').val().replace(/[^,\d]/g, '').toString();
		kvlm = $('#jmldbl').val().replace(/[^,\d]/g, '').toString();


		ktot = khrg * kvlm;
		kz = ktot.toString().replace(/[^,\d]/g, '');

		$('#hidden_hrg').val(khrg);
		$('#hidden_jml').val(kvlm);
		$('#hidden_tot').val(ktot);

		$('#tote').val(formatRupiah(kz));
	});

	$('#jmldbl').on('change',function(e){
		var khrg, kvlm,ktot,kz;

		khrg = $('#hrge').val().replace(/[^,\d]/g, '').toString();
		kvlm = $('#jmldbl').val().replace(/[^,\d]/g, '').toString();

		ktot = khrg * kvlm;
		kz = ktot.toString().replace(/[^,\d]/g, '');

		$('#hidden_hrg').val(khrg);
		$('#hidden_jml').val(kvlm);
		$('#hidden_tot').val(ktot);

		$('#tote').val(formatRupiah(kz));
	});

	$('#hrge').on('keyup',function(e){
		$('#hrge').val(formatRupiah(this.value));
	});

	$('#jmldbl').on('keyup',function(e){
		$('#jmldbl').val(formatRupiah(this.value));
	});

	//////key up hrga, volm, total //////////////////////////////////////

	//////plus minus click //////////////////////////////////////

	   $('.btn-number').click(function(e){
   	e.preventDefault();

   	fieldName = $(this).attr('data-field');
   	type      = $(this).attr('data-type');
   	var input = $("input[name='"+fieldName+"']");
   	var currentVal = parseInt(input.val());
   	if (!isNaN(currentVal)) {
   		if(type == 'minus') {

   			if(currentVal > input.attr('min')) {
   				input.val(currentVal - 1).change();
   			} 
   			if(parseInt(input.val()) == input.attr('min')) {
   				$(this).attr('disabled', true);
   			}

   		} else if(type == 'plus') {

   			if(currentVal < input.attr('max')) {
   				input.val(currentVal + 1).change();
   			}
   			if(parseInt(input.val()) == input.attr('max')) {
   				$(this).attr('disabled', true);
   			}

   		}
   	} else {
   		input.val(0);
   	}
   });
   $('.input-number').focusin(function(){
   	$(this).data('oldValue', $(this).val());
   });
   $('.input-number').change(function() {

   	minValue =  parseInt($(this).attr('min'));
   	maxValue =  parseInt($(this).attr('max'));
   	valueCurrent = parseInt($(this).val());

   	name = $(this).attr('name');
   	if(valueCurrent >= minValue) {
   		$(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
   	} else {
   		alert('Sorry, the minimum value was reached');
   		$(this).val($(this).data('oldValue'));
   	}
   	if(valueCurrent <= maxValue) {
   		$(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
   	} else {
   		alert('Sorry, the maximum value was reached');
   		$(this).val($(this).data('oldValue'));
   	}


   });

	//////plus minus click //////////////////////////////////////


///////////////////////////////////////////////////EDIT Submit////////////////////////
	$('#edit').on('submit',function(event){
		event.preventDefault();
		$.ajax({
			url:"{{route('barang_masuk.store')}}",
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
						$('#EditModal').modal('hide');

					},1000);
					$('#tab_data2').DataTable().ajax.reload();
					toastr.success('barang masuk telah berhasil diedit', 'Success', {timeOut: 5000});
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
			}); //end ajax
		});//end edit on submit
/////////////////////////////////EDIT////////////////////////////////////


/////////////////////////////////input barang masuk/////////////////////////////////
$('#btn_add').click(function(){
	$('#createModal').modal('show');
	
});
function formatRupiah(angka){
	var number_string = angka.replace(/[^,\d]/g, '').toString(),
	split   		= number_string.split(','),
	sisa     		= split[0].length % 3,
	rupiah     		= split[0].substr(0, sisa),
	ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

	// tambahkan titik jika yang di input sudah menjadi angka ribuan
	if(ribuan){
		separator = sisa ? '.' : '';
		rupiah += separator + ribuan.join('.');
	}

	rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
	return rupiah;
}
var $tr;
$(document).on('keyup','.hrgs, .vlms',function(e){
	if(e.keyCode == 13) {
		e.preventDefault();
		return;
	}
	//nyari tr terdekat
	$tr = $(this).closest("tr");
	var hrgs = $tr.find(".hrgs").val();
	var vlms = $tr.find(".vlms").val();

	//biar bisa dirubah ke formatrupiah
	dh = hrgs.replace(/[^,\d]/g, '').toString();
	dv =vlms.replace(/[^,\d]/g, '').toString();

	///input ke hidden yang tidak ada format rupiah
	$tr.find(".hrga").val(dh);
	$tr.find(".vola").val(dv);

	if(!isNaN(dh) && !isNaN(dv)){
		var total = dh*dv;

		$tr.find(".tota").val(total);

		var hasil = total.toString().replace(/[^,\d]/g, '');
		$tr.find(".tots").val(formatRupiah(hasil));

	}
});

$(document).on('keyup','.hrgs',function(e){
	$tr = $(this).closest("tr");
	$tr.find(".hrgs").val(formatRupiah(this.value));
});

$(document).on('keyup','.vlms',function(e){
	$tr = $(this).closest("tr");
	$tr.find(".vlms").val(formatRupiah(this.value));
});
/////////////////////////////////input barang masuk/////////////////////////////////


	});//end function
</script>
@stop