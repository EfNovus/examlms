<?php
/**
 * Created by PhpStorm.
 * User: novas
 * Date: 11/25/2017
 * Time: 8:43 AM
 */
namespace App\Repositories\Certification;

interface CertificationRepositoryContract
{

    public function getAllDepartments();

    public function listAllDepartments();

    public function create($requestData);

    public function destroy($id);
}