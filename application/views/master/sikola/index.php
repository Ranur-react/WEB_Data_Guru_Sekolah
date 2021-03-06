<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header with-border">
				<button class="btn bg-olive btntambah"><i class="icon-plus3"></i> Tambah Data</button>
				<a href="<?= site_url('Home') ?>" class="btn bg-yellow"><i class="fa fa-backward">Kembali</i></a>
			</div>
			<div class="box-body table-responsive">
				<?= $this->session->flashdata('pesan'); ?>
				<table class="table table-bordered table-striped data-tabel">
					<thead>
						<tr>
							<th class="text-center">No.</th>
							<th>Kode Sekolah</th>
							<th>Nama Sekolah</th>
							<th>Nama Kepsek</th>
							<th>Alamat Sekolah</th>
							<th>Telp Sekolah</th>
							<th>Jumlah Guru Honorer</th>
							<th>Jumlah Guru PNS</th>
							<th>Total Siswa Laki-Laki</th>
							<th>Total Siswi Perempuan</th>
							<th>Update Jumlah Siswa</th>
							<th>Kelurahan</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($data as $d) { ?>
							<tr>
								<td class="text-center" width="40px"><?= $no . '.'; ?></td>
								<td><?= $d['kode_sekolah'] ?></td>
								<td><?= $d['nama_sekolah'] ?></td>
								<td><?= $d['nama_kepsek'] ?></td>
								<td><?= $d['alamat_sekolah'] ?></td>
								<td><?= $d['telp_sekolah'] ?></td>
								<?php $dhonor=$this->Msekolah->hitunghonor($d['kode_sekolah']) ?>
								<?php $dpns=$this->Msekolah->hitungpns($d['kode_sekolah']) ?>
								<td><?php echo $dhonor['jumlahpns']; ?></td>
								<td><?php echo $dpns['jumlahpns']; ?></td>
								<td><?= $d['jml_siswa_lk'] ?> </td>
								<td> <?= $d['jml_siswa_pr'] ?></td>
								<td>
									<!-- <button class="btn bg-blue btnsiswa"  onclick="btnsiswa('<?= $d['kode_sekolah'] ?>')" ><i class="icon-pencil7"></i> Ubah Data Siswa</button> -->
									<button class="btn bg-blue btnsiswa"  onclick="btnsiswaAJX('<?= $d['kode_sekolah'] ?>')" ><i class="icon-pencil7"></i> Ubah Data Siswa </button>
								</td>
								<td><?= $d['nama_lurah'] ?></td>
								<td class="text-center" width="60px">
									<a href="javascript:void(0)" onclick="edit('<?= $d['kode_sekolah'] ?>')"><i class="icon-pencil7 text-green" data-toggle="tooltip" data-original-title="Edit Data"></i></a>
									<a href="<?= site_url('master/Sekolah/destroy/' . $d['kode_sekolah']) ?>" onclick="return confirm('Yakin akan hapus data ini ?');"><i class="icon-trash text-red" data-toggle="tooltip" data-original-title="Hapus Data"></i></a>
									</a>
								</td>
							</tr>
						<?php $no++;
						} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div id="tampil_modal"></div>
<script>
	if($('#modal_tambah').modal()=="'show'"){
		alert("Show");
	}

	$(document).on('click', '.btntambah', function(e) {
		$.ajax({
			url: "<?= site_url('master/Sekolah/create') ?>",
			success: function(data) {
				$('#tampil_modal').html(data);
				$('#modal_tambah').modal('show');
			}
		});
	});
	// 	$(document).on('click', '.btnsiswa', function(e) {
		
	// });


	function edit(kode) {
		$.ajax({
			type: "post",
			url: "<?= site_url('master/Sekolah/edit') ?>",
			data: "&kode=" + kode,
			cache: false,
			success: function(response) {
				$('#tampil_modal').html(response);
				$('#modal_edit').modal('show');
			}
		});
	}

	function btnsiswa(kode) {
				$.ajax({
					type: "post",
					url: "<?= site_url('master/Siswasekolah/create') ?>",
					data: "&kode=" + kode,
					cache: false,
					success: function(response) {
						$('#tampil_modal').html(response);
						$('#modal_tambah').modal('show');
			}
		});
			}

function btnsiswaAJX(kode) {
				$.ajax({
					type: "post",
					url: "<?= site_url('master/Siswasekolah/createAJX') ?>",
					data: "&kode=" + kode,
					cache: false,
					success: function(response) {
						$('#tampil_modal').html(response);
						$('#modal_tambah').modal('show');
			}
		});
		// $.ajax({
		// 	url: "<?= site_url('master/Siswasekolah/create') ?>",
		// 	success: function(data) {
		// 		$('#tampil_modal').html(data);
		// 		$('#modal_tambah').modal('show');
		// 	}
		// });
	}
</script>
