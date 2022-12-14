<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use App\Http\Requests\StoreGiftRequest;
use App\Http\Requests\UpdateGiftRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class GiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $gifts = Gift::with(['tags'])->paginate();

        return view('gifts/list', [
            'gifts' => $gifts
        ]);
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
     * @param  \App\Http\Requests\StoreGiftRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGiftRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Gift $gift
     * @return Application|Factory|View
     */
    public function show(Gift $gift)
    {
        return view('gifts/item', [
            'gift' => $gift
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Gift $gift
     * @return \Illuminate\Http\Response
     */
    public function edit(Gift $gift)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGiftRequest  $request
     * @param Gift $gift
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGiftRequest $request, Gift $gift)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Gift $gift
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gift $gift)
    {
        //
    }
}
