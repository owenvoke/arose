<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Masternode;
use Illuminate\Http\Request;

/**
 * Class MasternodeController
 */
class MasternodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function index(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return Masternode::query()->orderByDesc('height')->paginate();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Masternode $masternode
     * @return \Illuminate\Http\Response
     */
    public function show(Masternode $masternode)
    {
        //
    }
}
