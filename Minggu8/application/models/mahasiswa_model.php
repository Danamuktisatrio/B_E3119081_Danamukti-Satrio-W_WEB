<?php
class mahasiswa_model extends CI_Model {
  public function get_data(){
    $data_mahasiswa = [
        ['Nama'=>'Danamukti','Prodi'=>'MIF'],
        ['Nama'=>'Dyan Abdul','Prodi'=>'MIF'],
        ['Nama'=>'Gunawan','Prodi'=>'MIF']
      ];
    return $data_mahasiswa;
  }
}