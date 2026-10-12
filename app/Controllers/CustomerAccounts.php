<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class CustomerAccounts extends BaseController
{
    public function index(): string
    {
        $customerModel = new CustomerModel();

        return view('customer_accounts/index', [
            'title' => 'Customer Accounts',
            'customers' => $customerModel
                ->orderBy('id', 'ASC')
                ->findAll(),
        ]);
    }
}