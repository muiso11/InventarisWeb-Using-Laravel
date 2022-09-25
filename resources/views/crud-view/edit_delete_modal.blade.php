<!-- Edit -->
<div class="modal fade" id="edit_{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Data</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action={{ url($data->id) }}>
				@csrf
				<input type="hidden" name="_method" value="PATCH">
				<input type="hidden" class="form-control" name="id" value="{{ $data->id }}">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nama Barang:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nama" value="{{ $data->nama }}">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Jumlah:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="jumlah" value="{{ $data->jumlah }}">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Keterangan:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="keterangan" value="{{ $data->keterangan }}">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Hapus Data</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Yakin Di Hapus</p>
				<h2 class="text-center">Nama Barang : {{ $data->nama }} Jumlah : {{ $data->jumlah }}</h2>
			</div>
			
			<form action={{ url('loading/'.$data->id) }} method="POST">
				@csrf
				<input type="hidden" name="_method" value="DELETE">
				<div class="modal-footer">
					
					<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal</button>
					{{-- <a href="{{ url("loading/".$data->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Ya</a> --}}
					<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Ya</button>
				</div>
			</form>

        </div>
    </div>
</div>