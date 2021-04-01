<?php


namespace App\Repositories\Impl;


use App\Models\Customer;
use App\Repositories\CustomerRepository;
use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\Eloquent\EloquentRepositoryImpl;

class CustomerRepositoryImpl extends EloquentRepositoryImpl  implements CustomerRepository
{
    /**
     * get Model
     * @return string
     */
    public function getModel()
    {
        $model = Customer::class;
        return $model;
    }
}
