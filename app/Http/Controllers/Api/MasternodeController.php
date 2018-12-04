<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Masternode;
use Illuminate\Http\Request;

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
     * @param  \App\Masternode  $masternode
     * @return \Illuminate\Http\Response
     */
    public function show(Masternode $masternode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Masternode  $masternode
     * @return \Illuminate\Http\Response
     */
    public function edit(Masternode $masternode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Masternode  $masternode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Masternode $masternode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Masternode  $masternode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Masternode $masternode)
    {
        //
    }
}
