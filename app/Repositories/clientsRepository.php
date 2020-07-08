<?php

namespace App\Repositories;

use App\Models\clients;
use App\Repositories\BaseRepository;

/**
 * Class clientsRepository
 * @package App\Repositories
 * @version July 7, 2020, 9:51 pm UTC
*/

class clientsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'first_Name',
        'last_Name',
        'dob',
        'age',
        'email',
        'phone_No',
        'address',
        'current_address',
        'nationality',
        'passport_No',
        'status',
        'date_Registered',
        'image',
        'role'
    ];

    protected $primarykey = 'id';

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return clients::class;
    }
}
