<?php

namespace App\Http\Controllers\Api;

use App\Block;
use App\Http\Controllers\Controller;

/**
 * Class BlockController
 */
class BlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function index(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return Block::query()->orderByDesc('date')->paginate();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Block $block
     * @return Block
     */
    public function show(Block $block): Block
    {
        return $block;
    }
}
