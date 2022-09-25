<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Tambah Data</h4></center>
            </div>
			<form method="POST" action="/loading">
			@csrf
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row form-group">
							<div class="col-sm-2">
								<label class="control-label modal-label">Nama Barang:</label>
							</div>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nama" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-sm-2">
								<label class="control-label modal-label">Jumlah:</label>
							</div>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="jumlah" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-sm-2">
								<label class="control-label modal-label">Keterangan:</label>
							</div>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="keterangan" required>
							</div>
						</div>
					</div> 
				</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal</button>
						<button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</a>
					</div>				
			</form>
        </div>
    </div>
</div>