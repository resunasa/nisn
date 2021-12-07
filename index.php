<div class="col-md-9 col-sm-9">	
<link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei&amp;display=swap" rel="stylesheet">
	<div class="d-flex justify-content-center text-uppercase text-center" style="font-family: 'ZCOOL XiaoWei', serif;font-size:25px;font-weight: bolder;">PENDAFTARAN ULANG PESERTA DIDIK</div>
	<div class="d-flex justify-content-center text-uppercase text-center" style="font-family: 'ZCOOL XiaoWei', serif;font-size:25px;font-weight: bolder;">Mulai Pendaftaran</div>
	<div class="card rounded-55 border border-secondary mb-3">	
		<form class="form-horizontal" action="https://sman22plg.sch.id/siswa_aktif/cek_nisn" method="POST" enctype="multipart/form-data">
			<div class="card-body">
				<div class="form-group row mb-2">
					<label for="nisnpd" class="col-sm-3 control-label">NISN <span style="color: red">*</span></label>
					<div class="col-sm-9">
						<input type="text" class="form-control form-control-sm rounded-0 border border-secondary" id="nisnpd" name="nisnpd" placeholder="Masukan Nomor Induk Siswa Nasional (NISN)">
                         
					</div>
				</div>
			</div>
			<div class="card-footer">
				<div class="form-group row mb-0">
					<div class="offset-sm-3 col-sm-9">
						<input type="hidden" name="ci_csrf_token" value="">
						<button type="submit" class="btn btn-sm action-button rounded-0"><i class="fa fa-forward"></i> Selanjutnya</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
