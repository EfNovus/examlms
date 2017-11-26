<?php
/**
 * Created by PhpStorm.
 * User: novas
 * Date: 11/25/2017
 * Time: 8:43 AM
 */
namespace App\Repositories\Topic;

interface TopicRepositoryContract
{

    public function getAllTopics();

    public function listAllTopics();

    public function create($requestData);

    public function destroy($id);
}