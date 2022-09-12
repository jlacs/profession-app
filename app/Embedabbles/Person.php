<?php

namespace App\Embedabbles;

use Doctrine\ORM\Mapping AS ORM;

/** @ORM\Embeddable */
class Person
{
    /** 
     * @ORM\Column(type = "string") 
     */
    private $firstname;

    /** 
     * @ORM\Column(type = "string") 
     */
    private $lastname;

    /** 
     * @ORM\Column(type = "string") 
     */
    private $gender;

    /** 
     * @ORM\Column(type = "string") 
     */
    private $age;

    /** 
     * @ORM\Column(type = "string") 
     */
    private $status;

    /** 
     * @ORM\Column(type = "string") 
     */
    private $nationality;

    /** 
     * @ORM\Column(type = "string") 
     */
    private $email;

    /**
     * Get the value of firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     */
    public function setFirstname($firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     */
    public function setLastname($lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     */
    public function setGender($gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     */
    public function setAge($age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     */
    public function setStatus($status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of nationality
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set the value of nationality
     */
    public function setNationality($nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }
}