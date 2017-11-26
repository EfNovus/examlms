<?php
/**
 * Created by PhpStorm.
 * User: novas
 * Date: 11/25/2017
 * Time: 8:43 AM
 */
namespace App\Repositories\Topic;


use App\Topic;

/**
 * Class TopicRepository
 * @package App\Repositories\Topic
 */
class TopicRepository implements TopicRepositoryContract
{

    public function getAllTopics()
    {
        // TODO: Implement getAllDepartments() method.
    }

    public function listAllTopics()
    {
       return Topic::pluck('title','id')->toArray();
    }

    public function create($requestData)
    {
        // TODO: Implement create() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}