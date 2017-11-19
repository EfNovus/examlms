<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Validator;


class Certification extends Model
{

    /**
     * @var array
     */
    private $rules = [

        'title' => 'required',
        'description' => 'required'

    ];

    /**
     * @param array $options
     * @return mixed
     */
    public function validate(array $options = [])
    {
         $result = Validator::make($options = [], $this->rules);

         return $result->passes();

    }


}
