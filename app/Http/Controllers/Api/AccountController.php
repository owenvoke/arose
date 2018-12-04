<?php

namespace App\Http\Controllers\Api;

use App\Account;
use App\Http\Controllers\Controller;

/**
 * Class AccountController
 */
class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function index(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return Account::query()->paginate();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Account $account
     * @return Account
     */
    public function show(Account $account): Account
    {
        return $account;
    }
}
