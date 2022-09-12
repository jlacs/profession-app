<?php

use App\Embedabbles\Person;
use App\Entities\Profession;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('profession', [ProfessionController::class, 'index']);

Route::get('new-profession', function (\Doctrine\ORM\EntityManagerInterface $em) {

    $person = new Person();
    $person->setFirstname('Jayce');
    $person->setLastname('Arcane');
    $person->setGender('Male');
    $person->setAge('30');
    $person->setStatus('single');
    $person->setNationality('Runeterrian');
    $person ->setEmail('jarcane@gmail.com');
    
    $profession = new Profession($person);
    $profession->setEmployee();
    $profession->setAddress('Piltover City');
    $profession->setCompany('HexTech');

    $em->persist($profession);
    $em->flush();

    return 'added!';
});