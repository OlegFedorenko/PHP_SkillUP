<?php
namespace Entity;

class User
{

	/**
	 * @var string
	 */
	private $firstName;

	/**
	 * @var string
	 */
	private $lastName;

	/**
	 * @var string
	 */
	private $email;

	/**
	 * @var string
	 */
	private $password;

	/**
	 * @return string
	 */
	public function getFirstName(): string
	{
		return $this->firstName;
	}

	/**
	 * @param string $firstName
	 *
	 * @return User
	 */
	public function setFirstName(string $firstName): User
	{
		$this->firstName = $firstName;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getLastName(): string
	{
		return $this->lastName;
	}

	/**
	 * @param string $lastName
	 *
	 * @return User
	 */
	public function setLastName(string $lastName): User
	{
		$this->lastName = $lastName;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getEmail(): string
	{
		return $this->email;
	}

	/**
	 * @param string $email
	 *
	 * @return User
	 */
	public function setEmail(string $email): User
	{
		$this->email = $email;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getPassword(): string
	{
		return $this->password;
	}

	/**
	 * @param string $password
	 *
	 * @return User
	 */
	public function setPassword(string $password): User
	{
		$this->password = $password;

		return $this;
	}

	static public function createFromArray(array $data): User
	{
		$user = new User();
		$user->setFirstName($data['first_name']);
		$user->setLastName($data['last_name']);
		$user->setEmail($data['email']);
		$user->setPassword($data['password']);

		return $user;
	}

}
