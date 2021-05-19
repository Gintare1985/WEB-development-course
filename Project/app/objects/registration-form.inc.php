<?php

class Registration {
	private $conn;
	private $tableName = 'registracija';

	public $id;
	public $firstName;
	public $lastName;
	public $age;
	public $telephone;
	public $email;
	public $massageType;
	public $massageTime;
	public $message;
	public $childAge;
	public $pregnancyWeeks;
	public $doctorPermission;
	public $timestamp;

	public function __construct($db)
	{
		$this->conn = $db;
	}

	public function createNewRegistrationItem()
	{
		$query = "INSERT INTO
					{$this->tableName}
				SET
					user_name=:user_name,
					user_surname=:user_surname,
					user_age=:user_age,
					user_tel=:user_tel,
					user_email=:user_email,
					massage_type=:massage_type,
					massage_time=:massage_time,
					message=:message,
					child_age=:child_age,
					pregnancy_weeks=:pregnancy_weeks,
					doctor_permission=:doctor_permission,
					created=:created";


		$this->firstName = htmlspecialchars(strip_tags($this->firstName));
		$this->lastName = htmlspecialchars(strip_tags($this->lastName));
		$this->age = htmlspecialchars(strip_tags($this->age));
		if (!is_numeric($this->age)) {
			$this->age = 9999999;
		}
		$this->telephone = htmlspecialchars(strip_tags($this->telephone));
		$this->email = htmlspecialchars(strip_tags($this->email));
		$this->massageType = htmlspecialchars(strip_tags($this->massageType));
		$this->massageTime = htmlspecialchars(strip_tags($this->massageTime));
		$this->message = htmlspecialchars(strip_tags($this->message));
		$this->childAge = htmlspecialchars(strip_tags($this->childAge));
		$this->pregnancyWeeks = htmlspecialchars(strip_tags($this->pregnancyWeeks));
		$this->doctorPermission = htmlspecialchars(strip_tags($this->doctorPermission));

		$stmt = $this->conn->prepare($query);

		$this->timestamp = date('Y-m-d H:i:s');

		$stmt->bindParam(":user_name", $this->firstName);
		$stmt->bindParam(":user_surname", $this->lastName);
		$stmt->bindParam(":user_age", $this->age);
		$stmt->bindParam(":user_tel", $this->telephone);
		$stmt->bindParam(":user_email", $this->email);
		$stmt->bindParam(":massage_type", $this->massageType);
		$stmt->bindParam(":massage_time", $this->massageTime);
		$stmt->bindParam(":message", $this->message);
		$stmt->bindParam(":child_age", $this->childAge);
		$stmt->bindParam(":pregnancy_weeks", $this->pregnancyWeeks);
		$stmt->bindParam(":doctor_permission", $this->doctorPermission);
		$stmt->bindParam(":created", $this->timestamp);

		if ($stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}
}
