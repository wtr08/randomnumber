<?php

namespace App\Http\Controllers;
use RandomOrg;
use App\GenerateRandomInteger;
use Illuminate\Http\Request;

class GenerateRandomIntegerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // https://api.random.org/verify
        $result =  RandomOrg::generateIntegers(1, 1, 100, false, 10, true);
        $verified = RandomOrg::verifySignature($result['result']['random'], $result['result']['signature']);
        print_r($result['result']['signature'] );
        return $result['result']['random'];

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
     * @param  \App\GenerateRandomInteger  $generateRandomInteger
     * @return \Illuminate\Http\Response
     */
    public function show(GenerateRandomInteger $generateRandomInteger)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GenerateRandomInteger  $generateRandomInteger
     * @return \Illuminate\Http\Response
     */
    public function edit(GenerateRandomInteger $generateRandomInteger)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GenerateRandomInteger  $generateRandomInteger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GenerateRandomInteger $generateRandomInteger)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GenerateRandomInteger  $generateRandomInteger
     * @return \Illuminate\Http\Response
     */
    public function destroy(GenerateRandomInteger $generateRandomInteger)
    {
        //
    }
}
