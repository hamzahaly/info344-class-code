<?php 
class Messages {
	protected $dbconn;
	
	public function __construct($dbconn) {
		$this->dbconn = $dbconn;
	}
	
	public function sendMessage($q) {
		$sql = 'select * from info344chat order by ascending';
		$stmt = $this->dbconn->prepare($sql);
		$success = $stmt->execute(array($q,$q));
		if (!$success) {
			var_dump($stmt->errorInfo());
			return false;
		} else {
			return $stmt->fetchAll();
		}
	}
}

?>