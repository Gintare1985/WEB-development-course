<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP13 homework</title>
	</head>

	<body>
		<?php
			class Human {
				public $firstName;
				public $lastName;

				public function setHumanFirstName($humanFirstName)
				{
					$this->firstName = $humanFirstName;
				}

				public function getHumanFirstName()
				{
					return $this->firstName;
				}

				public function setHumanLastName($humanLastName)
				{
					$this->lastName = $humanLastName;
				}

				public function getHumanLastName()
				{
					return $this->lastName;
				}

				public function getOutputInfo ()
				{
					echo 'Hello, your name is ' . $this->firstName . 'and your last-name is '  . $this->lastName . '.';
				}
			}

				$human1 = new Human();
				$human2 = new Human();
				echo "\n";

				$human1->setHumanFirstName('Barbora ');
				$human1->setHumanLastName('Juozeniene');
				echo $human1->getOutputInfo() . "\n\n\n";

				echo "<br><br>";

				$human2->setHumanFirstName('Andrius ');
				$human2->setHumanLastName('Kiškis');
				echo $human2->getOutputInfo() . "\n\n\n";

		?>


	</body>
</html>
