<?php
class Usuarios extends Model {
	
	/*public function __construct() {
		parent::__construct;
	}*/

	public function getusuarios() {
		
		$result = array();

		$sql = "SELECT * FROM usuarios";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$result = $sql->fetchAll();
		}

		return $result;
	}
}
?>