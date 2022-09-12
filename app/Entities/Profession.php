<?php

namespace App\Entities;

use Doctrine\ORM\Mapping AS ORM;
use App\Embedabbles\Person;

/**
 * @ORM\Entity
 * @ORM\Table(name="professions")
 */
class Profession
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected int $id;

    /**
     * @ORM\Embedded(class="App\Embedabbles\Person", columnPrefix = false)
     */
    protected $employee;

    /**
     * @ORM\Column(type="string")
     */
    protected string $address;

    /**
     * @ORM\Column(type="string")
     */
    protected string $company;

    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of employee
     *
     * @return string
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Set the value of employee
     *
     * @param string $employee
     *
     * @return self
     */
    public function setEmployee()
    {
        $this->employee = $this->person;

        return $this;
    }

    /**
     * Get the value of address
     *
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of company
     *
     * @return string
     */
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * Set the value of company
     *
     * @param string $company
     *
     * @return self
     */
    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }
}