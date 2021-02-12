<?php

class Data_model
{
  private $table = 'data_produksi',
    $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function chartData()
  {
    $this->db->query("SELECT * FROM " . $this->table . "
     WHERE tahun = YEAR(CURRENT_DATE()) AND status = 'Final'
     ORDER BY id");

    return $this->db->resultSet();
  }

  public function showChartDataByTahun($data)
  {
    $query = "SELECT * FROM " . $this->table . "
              WHERE tahun = :tahun AND status = 'Final'
              ORDER BY id";

    $this->db->query($query);
    $this->db->bind('tahun', $data['tahun']);
    $this->db->execute();

    return $this->db->resultSet();
  }

  public function maxminBocor()
  {
    $this->db->query("SELECT MAX(kebocoran) AS maxBocor, MIN(kebocoran) AS minBocor FROM " . $this->table . " 
    WHERE tahun = YEAR(CURRENT_DATE())");

    return $this->db->single();
  }

  public function maxminBocorByTahun($data)
  {
    $query = "SELECT MAX(kebocoran) AS maxBocor, MIN(kebocoran) AS minBocor FROM " . $this->table . " 
    WHERE tahun = :tahun";

    $this->db->query($query);
    $this->db->bind('tahun', $data['tahun']);
    $this->db->execute();

    return $this->db->single();
  }

  public function input($data)
  {
    $query  = "INSERT INTO " . $this->table . " VALUES ('', :bulan, :tahun, :final, :status, :pemair, :jumlah_produksi, :jumlah_distribusi, :nrw, :jam_operasi, :debit, :pac, :kaporit, :dosis_pac, :dosis_kaporit, :kebocoran)";

    $this->db->query($query);
    $this->db->bind('bulan', $data['bulan']);
    $this->db->bind('tahun', $data['tahun']);
    $this->db->bind('final', $data['final']);
    $this->db->bind('status', $data['status']);
    $this->db->bind('pemair', $data['pemair']);
    $this->db->bind('jumlah_produksi', $data['jumlah_produksi']);
    $this->db->bind('jumlah_distribusi', $data['jumlah_distribusi']);
    $this->db->bind('nrw', $data['nrw']);
    $this->db->bind('jam_operasi', $data['jam_operasi']);
    $this->db->bind('debit', $data['debit']);
    $this->db->bind('pac', $data['pac']);
    $this->db->bind('kaporit', $data['kaporit']);
    $this->db->bind('dosis_pac', $data['dosis_pac']);
    $this->db->bind('dosis_kaporit', $data['dosis_kaporit']);
    $this->db->bind('kebocoran', $data['kebocoran']);

    $this->db->execute();

    return $this->db->rowCount();
  }
}
