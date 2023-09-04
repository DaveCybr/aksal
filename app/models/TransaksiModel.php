<?php

class TransaksiModel {
	
	private $table = 'tbl_transaksi';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllTransaksi()
	{
		$this->db->query("SELECT * FROM " . $this->table );
		return $this->db->resultSet();
	}

	public function getTransaksiById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_transaksi=:id_transaksi');
		$this->db->bind('id_transaksi',$id);
		return $this->db->single();
	}

	public function tambahTransaksi($data)
	{
		$query = "INSERT INTO tbl_transaksi (id_transaksi, id_user, id_customer, id_barang, jumlah, bayar, total, tanggal_transaksi) VALUES(:id_transaksi, :id_user, :id_customer, :id_barang, :jumlah, :bayar, :total, :tanggal_transaksi)";
		$this->db->query($query);
		$this->db->bind('id_transaksi', $data['id_transaksi']);
		$this->db->bind('id_user', $data['id_user']);
		$this->db->bind('id_customer', $data['id_customer']);
		$this->db->bind('id_barang', $data['id_barang']);
		$this->db->bind('jumlah', $data['jumlah']);
		$this->db->bind('bayar', $data['bayar']);
		$this->db->bind('total', $data['total']);
		$this->db->bind('tanggal_transaksi', $data['tanggal_transaksi']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataTransaksi($data)
	{
		$query = "UPDATE tbl_transaksi SET id_transaksi=:id_transaksi, id_user=:id_user, id_customer=:id_customer, id_barang=:id_barang, jumlah=:jumlah, bayar=:bayar, total=:total, tanggal_transaksi=:tanggal_transaksi WHERE id_transaksi=:id_transaksi";
		$this->db->query($query);
		$this->db->bind('id_transaksi', $data['id_transaksi']);
		$this->db->bind('id_user', $data['id_user']);
		$this->db->bind('id_customer', $data['id_customer']);
		$this->db->bind('id_barang', $data['id_barang']);
		$this->db->bind('jumlah', $data['jumlah']);
		$this->db->bind('bayar', $data['bayar']);
		$this->db->bind('total', $data['total']);
		$this->db->bind('tanggal_transaksi', $data['tanggal_transaksi']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteTransaksi($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id_transaksi=:id_transaksi');
		$this->db->bind('id_transaksi',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}

	// public function cariBuku()
	// {
	// 	$key = $_POST['key'];
	// 	$this->db->query("SELECT * FROM " . $this->table . " WHERE judul LIKE :key");
	// 	$this->db->bind('key',"%$key%");
	// 	return $this->db->resultSet();
	// }
}
