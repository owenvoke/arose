<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mempool;
use Illuminate\Http\Request;

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mempool  $mempool
     * @return \Illuminate\Http\Response
     */
    public function show(Mempool $mempool)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mempool  $mempool
     * @return \Illuminate\Http\Response
     */
    public function edit(Mempool $mempool)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mempool  $mempool
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mempool $mempool)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mempool  $mempool
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mempool $mempool)
    {
        //
    }
}
