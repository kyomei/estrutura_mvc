<?php
class Usuarios extends Model
{

	private $table = 'usuarios';

	public function getUsuarios()
	{
		$result = array();
		$sql = "SELECT * FROM $this->table";
		$stmt = $this->db->query($sql);

		if ($stmt->rowCount() > 0) {
			$result = $stmt->fetchAll();
		}

		return $result;
	}

	public function getQuantidade()
	{
		$sql = "SELECT COUNT(*) as c FROM $this->table";
		$stmt = $this->db->query($sql);

		if ($stmt->rowCount() > 0) {
			$stmt = $stmt->fetch();
			return $stmt['c'];
		}
		return 0;
	}
}