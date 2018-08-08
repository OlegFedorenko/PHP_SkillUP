<?php

namespace Entity;

class User
{
    /**
     * @var string
     */
    private $fname;
    /**
     * @var string
     */
    private $lname;
    /**
     * @var string
     */
    private $email;
    /**
     * @var string
     */
    private $pword;

    /**
     * @return string
     */
    public function getFname(): string
    {
        return $this->fname;
    }

    /**
     * @param string $fname
     * @return User
     */
    public function setFname(string $fname): User
    {
        $this->fname = $fname;
        return $this;
    }

    /**
     * @return string
     */
    public function getLname(): string
    {
        return $this->lname;
    }

    /**
     * @param string $lname
     * @return User
     */
    public function setLname(string $lname): User
    {
        $this->lname = $lname;
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
    public function getPword(): string
    {
        return $this->pword;
    }

    /**
     * @param string $pword
     * @return User
     */
    public function setPword(string $pword): User
    {
        $this->pword = $pword;
        return $this;
    }

    static public  function createFromArray(array $data)
    {
        $user = new User();
        $user->setFname($data['fname']);
        $user->setLname($data['lname']);
        $user->setEmail($data['email']);
        $user->setPword($data['pword']);

        return $user;
    }






}