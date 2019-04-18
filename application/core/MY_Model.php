<?php

// kelas untuk yang capek ngetik itu-itu terus

defined('BASEPATH') or exit('no direct script access allowed');

class MY_Model extends CI_Model {

	/**
	 * selected table
	 * @var string
	 */
	protected $table;

	/**
	 * selected fields
	 * @var mixed
	 */
	protected $fields;

	/**
	 * default fields
	 * @var mixed
	 */
	private $fields_reset;
	
	/**
	 * table primary key
	 * @var string
	 */
	protected $primary_key = 'id';

	/**
	 * soft delete
	 * @var bool
	 */
	protected $soft_delete = false;

	/**
	 * with deleted
	 * @var bool
	 */
	protected $with_deleted = false;

	/**
	 * deleted field
	 * @var string
	 */
	protected $deleted_field = 'deleted';

	/**
	 * constructor
	 */
	public function __construct() {
		if($this->table == null) {
			show_error('$table must be set on '.get_called_class() .'.php' );
		}
	}

	/**
	 *  @param array
	 *  insert data to database with the given parameter
	 *  return insert id on success
	 *	@return int|bool
	 */
	public function insert($data) {
		$query = $this->db->insert($this->table, $data);

		if ($query) {
			// jika table tidak menggunakan auto_increment
			if ($this->db->insert_id() === 0) {
				return true;
			}

			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * @param string|int
	 * @param array
	 * update table with given parameter
	 * @return bool
	 */
	public function update($id, $data) {
		$query = $this->db->where($this->primary_key, $id)
							->set($data)
							->update($this->table);

		return $query;
	}


	/**
	 * @param strint|int
	 *	delete data from database
	 * @return bool
	 */
	public function delete($id, $purge =  false) {
		$query = $this->db->where($this->primary_key, $id);

		if ($this->soft_delete && !$purge) {
			$query->update($this->table, [$this->deleted_field => 1]);
		} else {
			$query->delete($this->table);
		}


		return $query;
	}


	/**
	 * @param string|int
	 *	get one data from database
	 * @return object
	 */
	public function get_one($id) {
		$this->select();
		$this->with_deleted_query();

		$query = $this->db->where($this->primary_key, $id)
							->get($this->table);

		return $query->row();
	}

	/**
	 * get all data from database
	 *
	 * @return array of object
	 */
	public function get_all() {
		$this->select();
		$this->with_deleted_query();

		$query = $this->db->get($this->table);

		return $query->result();
	}

	/**
	 * @param array
	 * find data from database
	 * @return array of object
	 */
	public function find($param) {
		$this->select();
		$this->with_deleted_query();

		$query = $this->db->from($this->table);

		if (is_array($param)) {
			$query->where($param);
		} else {
			$query->where($this->primary_key, $param);
		}

		$query = $query->get();

		return $query->result();
	}

	/**
	 * find data from database
 	 * @param mixed
	 * @return array of object
	 */
	public function find_one($param) {
		$this->select();
		$this->with_deleted_query();

		$query = $this->db->from($this->table);

		if (is_array($param)) {
			$query->where($param);
		} else {
			$query->where($this->primary_key, $param);
		}

		$query = $query->get();

		return $query->row();
	}

	/**
	 * set field for query
	 *
	 * @param mixed
	 */
	public function set_field($fields) {
		$this->fields_reset = $this->fields;
		$this->fields = $fields;

		return $this;
	}

	/**
	 * select field on database
	 * @return void
	 */
	private function select() {
		if ($this->fields != null) {
			$this->db->select($this->fields);
			$this->fields = $this->fields_reset;
		}
	}

	/**
	 * execute insert batch query
	 * @param  array
	 * @return bool
	 */
	public function insert_batch($data)
	{
		$query = $this->db->insert_batch($this->table, $data);

		return $query;
	}

	/**
	 * replace database
	 * @param array
	 */
	public function replace($data)
	{
		$query = $this->db->replace($this->table, $data);

		return $query;
	}

	/**
	 *
	 * @param  mixed $key
	 * @param  mixed $val
	 * @return this
	 */
	public function where($key, $val)
	{
		if (is_array($key)) {
			$this->db->where($key);
		} else {
			$this->db->where($key, $val);
		}

		return $this;
	}

	/**
	 * set with_deleted
	 * @param  boolean $param
	 * @return this
	 */
	public function with_deleted($param = true)
	{
		$this->with_deleted = $param;

		return $this;
	}

	/**
	 * with deleted query
	 * @return this
	 */
	public function with_deleted_query()
	{
		if (!$this->with_deleted && $this->soft_delete) {
			$this->db->where($this->table.'.'.$this->deleted_field, 0);
		}

		return $this;
	}
}

// author : Akhmad Khusaeri
// location : ./application/core/MY_Model.php
