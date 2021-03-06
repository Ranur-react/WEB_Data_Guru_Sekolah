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
							<th>NIP Guru</th>

							<th>Asal Pendidikan SLTA/SMA</th>
							<th>Jurusan</th>
							<th>Tahun Lulus</th>

							<th>Asal Pendidikan S1</th>
							<th>Prodi / Jurusan S1</th>
							<th>Gelar Akademik S1</th>
							<th>Tahun Lulus S1</th>

							<th>Asal Pendidikan S2</th>
							<th>Prodi / Jurusan S2</th>
							<th>Gelar Akademik S2</th>
							<th>Tahun Lulus S2</th>

							<th>Asal Pendidikan Lainnya</th>
							<th>Prodi / Jurusan Lainnya</th>
							<th>Gelar Akademik Lainnya</th>
							<th>Tahun Lulus Lainnya</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($data as $d) { ?>
							<tr>
								<td class="text-center" width="40px"><?= $no . '.'; ?></td>
								<td><?= $d['nip_pend_guru'] ?></td>
								<td><?= $d['sma'] ?></td>
								<td><?= $d['smajurusan'] ?></td>
								<td><?= $d['smatahunlulus'] ?></td>

								<td><?= $d['s1'] ?></td>
								<td><?= $d['s1jurusan'] ?></td>
								<td><?= $d['s1gelar'] ?></td>
								<td><?= $d['s1tahunlulus'] ?></td>


								<td><?= $d['s2'] ?></td>
								<td><?= $d['s2jurusan'] ?></td>
								<td><?= $d['s2gelar'] ?></td>
								<td><?= $d['s2tahunlulus'] ?></td>


								<td><?= $d['Lainnya'] ?></td>
								<td><?= $d['Lainnyajurusan'] ?></td>
								<td><?= $d['lainnyagelar'] ?></td>
								<td><?= $d['Lainnyatahunlulus'] ?></td>
								<td class="text-center" width="60px">
									<a href="javascript:void(0)" onclick="edit('<?= $d['nip_pend_guru'] ?>')"><i class="icon-pencil7 text-green" data-toggle="tooltip" data-original-title="Edit Data"></i></a>
									<a href="<?= site_url('master/Pendguru/destroy/' . $d['nip_pend_guru']) ?>" onclick="return confirm('Yakin akan hapus data ini ?');"><i class="icon-trash text-red" data-toggle="tooltip" data-original-title="Hapus Data"></i></a>
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
	$(document).on('click', '.btntambah', function(e) {
		$.ajax({
			url: "<?= site_url('master/Pendguru/create') ?>",
			success: function(data) {
				$('#tampil_modal').html(data);
				$('#modal_tambah').modal('show');
			}
		});
	});

	function edit(kode) {
		$.ajax({
			type: "post",
			url: "<?= site_url('master/Pendguru/edit') ?>",
			data: "&kode=" + kode,
			cache: false,
			success: function(response) {
				$('#tampil_modal').html(response);
				$('#modal_edit').modal('show');
			}
		});
	}
</script>
