<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mempool;
use Illuminate\Http\Request;

/**
 * Class MempoolController
 */
class MempoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function index(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return Mempool::query()->orderByDesc('date')->paginate();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mempool $mempool
     * @return \Illuminate\Http\Response
     */
    public function show(Mempool $mempool)
    {
        //
    }
}
