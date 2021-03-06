<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header with-border">
				<a href="<?= site_url('master/Lapkepegawaian/cetak') ?>" class="btn bg-aqua"><i class="fa fa-print">Cetak Laporan</i></a>
				<a href="<?= site_url('Home') ?>" class="btn bg-yellow"><i class="fa fa-backward">Kembali</i></a>

				<center><h2><b>Laporan Data Status Kepegawaian </b></h2></center>
				<center><h4><b>Kecamatan Padang Timur</b></h4></center>
				<center><h4><b>Kota Padang</b></h4></center>
			</div>
			<div class="box-body table-responsive">
				<?= $this->session->flashdata('pesan'); ?>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th class="text-center">No.</th>
							<th>NIP Guru</th>
							<th>Nama Guru</th>
							<!-- <th>Kode Kepegawaian</th> -->
							<th>Status Kepegawaian</th>
							<th>No SK</th>
							<th>Nama Diklat</th>
							<th>Tahun Diklat</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($data as $d) { ?>
							<tr>
								<td class="text-center" width="40px"><?= $no . '.'; ?></td>
								<td><?= $d['nip_guru'] ?></td>
								<td><?= $d['nama_guru'] ?></td>
								<!-- <td><?= $d['kode_pegawai'] ?></td> -->
								<td><?= $d['status_pegawai'] ?></td>
								<td><?= $d['no_sk_guru'] ?></td>
								<td><?= 
										$d['nama_diklat_guru']. " | ".
										$d['nama_diklat_guru2']. " | ".
										$d['nama_diklat_guru3']. " | ".
										$d['nama_diklat_guru4']. " | ".
										$d['nama_diklat_guru5']. " | ".
										$d['nama_diklat_guru6']. " | ".
										$d['nama_diklat_guru7']. " | ".
										$d['nama_diklat_guru8']. " | ".
										$d['nama_diklat_guru9']. " | ".
										$d['nama_diklat_guru10']. " | "

										 ?></td>
								<td><?= 
								$d['thn_diklat_guru']. " | ".
								$d['thn_diklat_guru2']. " | ".
								$d['thn_diklat_guru3']. " | ".
								$d['thn_diklat_guru4']. " | ".
								$d['thn_diklat_guru5']. " | ".
								$d['thn_diklat_guru6']. " | ".
								$d['thn_diklat_guru7']. " | ".
								$d['thn_diklat_guru8']. " | ".
								$d['thn_diklat_guru9']. " | ".
								$d['thn_diklat_guru10']. " | "
								 ?></td>
								
									
								</td>
							</tr>
						<?php $no++;
						} ?>
						
					</tbody>
					<tfoot>
						
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>

<div id="tampil_modal"></div>

