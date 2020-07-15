<?php

class Message {
	private $conn;
	private $tableName = 'uzklausos_forma';

	public $id;
	public $name;
	public $email;
	public $message;
	public $timestamp;

	public function __construct($db)
	{
		$this->conn = $db;
	}

	public function createNewMessageItem()
	{
		$query = "INSERT INTO
					{$this->tableName}
				SET
					name=:name,
					email=:email,
					message=:message,
					created=:created";


		$stmt = $this->conn->prepare($query);

		$this->timestamp = date('Y-m-d H:i:s');

		$stmt->bindParam(":name", $this->name);
		$stmt->bindParam(":email", $this->email);
		$stmt->bindParam(":message", $this->message);
		$stmt->bindParam(":created", $this->timestamp);


		if ($stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}
}
