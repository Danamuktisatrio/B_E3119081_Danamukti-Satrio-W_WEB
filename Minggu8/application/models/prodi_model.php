<?php
class prodi_model extends CI_Model {
  public function get_data(){
    $data_prodi = [
        ['Prodi'=>'MIF', 'Keterangan'=>'Manajemen Informatika'],
        ['Prodi'=>'MIF', 'Keterangan'=>'Manajemen Informatika'],
        ['Prodi'=>'MIF', 'Keterangan'=>'Manajemen Informatika']];
    return $data_prodi;
  }
}