<?php

namespace App\Http\Controllers;

use App\Entities\Profession;
use Illuminate\Http\Request;
use Doctrine\ORM\EntityManagerInterface;

class ProfessionController extends Controller
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function index()
    {
        $professions = $this->em->getRepository(Profession::class)->findAll();

        foreach($professions as $profession) {
            (object) $profession = (object) [
                'id' => $profession->getId(),
                'employee' => $profession->getEmployee(),
                'address' => $profession->getAddress(),
                'company' => $profession->getCompany()
            ];
        }

        dd($profession);
    }
}
