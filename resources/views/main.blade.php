@extends('layouts.main')

@section('container')
	<!-- -------------------Main Data---------------------- -->
	<div class="container">
		<h1 class="page-header text-center">Data Barang Inventaris</h1>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="row">
					<?php
					if (isset($_SESSION['error'])) {
						echo
						"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						" . $_SESSION['error'] . "
					</div>
					";
						unset($_SESSION['error']);
					}
					if (isset($_SESSION['success'])) {
						echo
						"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						" . $_SESSION['success'] . "
					</div>
					";
						unset($_SESSION['success']);
					}
					?>
				</div>
				<div class="row">
					<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New</a>
					<a href="downloadPDF/{{ $active }}" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> PDF</a>
				</div>
				<div class="row" style="margin-top: 20px">
					<table id="myTable" class="table table-bordered table-striped">
						<thead>
							<th>No</th>
							<th>Nama Barang</th>
							<th>Jumlah</th>
							<th>Keterangan</th>
							<th>Aktivitas</th>
						</thead>
						<tbody>									
							@foreach ($datas as $data)
								<tr>
									<td>{{ $nomor++ }}</td>
									<td>{{ $data->nama }}</td>
									<td>{{ $data->jumlah }}</td>
									<td>{{ $data->keterangan }}</td>
									<td>
										<a href='#edit_{{ $data->id }}' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
										<a href='#delete_{{ $data->id }}' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
									</td>
								</tr>
								@include('crud-view.edit_delete_modal')
							@endforeach

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	@include('crud-view.add_modal')
@endsection