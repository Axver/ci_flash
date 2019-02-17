<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
    
    public function GetBarang()
    {
        $data=$this->db->query('SELECT * FROM barang');
        return $data->result_array();
    }

    public function GetKomputer()
    {
        $data=$this->db->query("SELECT * FROM barang INNER JOIN jenis_barang ON barang.jenis_barang_id_jenis=jenis_barang.id_jenis WHERE jenis_barang.jenis_barang='Laptop'");
        $query_result = $data->result_array(); //for get result array 
        return $query_result;
    }

    public function PenHarian()
    {
       $pendapatan=$this->db->query("SELECT SUM(total_harga) AS pendapatan FROM transaksi_pembelian WHERE tgl_pembelian = CURDATE()");
       $query_result=$pendapatan->result_array();
       return $query_result; 
    }

    public function HitungHarian()
    {
        $pendapatan=$this->db->query("SELECT COUNT(total_harga) AS total_pembelian FROM transaksi_pembelian WHERE tgl_pembelian = CURDATE()");
       $query_result=$pendapatan->result_array();
       return $query_result; 

    }

    public function GetSukucadang()
    {
        $aksesoris=$this->db->query("SELECT * FROM barang INNER JOIN jenis_barang ON barang.jenis_barang_id_jenis=jenis_barang.id_jenis WHERE jenis_barang.jenis_barang='aksesoris'");
        $query_result=$aksesoris->result_array();
        return $query_result;
    }
    
}