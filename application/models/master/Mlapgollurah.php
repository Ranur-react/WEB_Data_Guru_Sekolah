<?php
class Mlapgollurah extends CI_Model
{
	
		public function tampildata()
	{
		return $this->db->query("SELECT nip_guru,nama_guru,kode_golongan,kode_pangkat,nama_golongan FROM tb_golongan JOIN tb_guru
ON kode_golongan=kode_golongan_guru JOIN tb_pangkat ON kode_golongan=pangkat_kode_golongan ORDER BY nip_guru ASC")->result_array();
	}

public function tampildata_kode($a,$b)
{
			return $this->db->query("SELECT nip_guru,nama_guru,kode_golongan,kode_pangkat,nama_golongan,`kode_lurah`
FROM tb_guru 
JOIN tb_golongan
ON kode_golongan=kode_golongan_guru 
JOIN `tb_sekolah` ON `tb_guru`.`kode_sekolah_guru`=`tb_sekolah`.`kode_sekolah`
JOIN `tb_kelurahan` ON `tb_kelurahan`.`kode_lurah`=`tb_sekolah`.`kode_lurah_sekolah` JOIN tb_pangkat ON kode_golongan=pangkat_kode_golongan
WHERE kode_golongan LIKE '$b' AND `kode_lurah` LIKE '$a'
ORDER BY nip_guru ASC")->result_array();
	
}

	
	
}
?>