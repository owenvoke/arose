<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Transaction;
use Illuminate\Http\Request;

/**
 * Class TransactionController
 */
class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function index(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return Transaction::query()->orderByDesc('date')->paginate();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction $transaction
     * @return Transaction
     */
    public function show(Transaction $transaction): Transaction
    {
        return $transaction;
    }
}
