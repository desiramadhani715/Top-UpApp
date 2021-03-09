<?php

namespace App\Http\Controllers;

use App\Models\TopUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $top_up = DB::table('top_up')
            ->join('contracts', 'contracts.contractParties', '=', 'top_up.partner')
            ->join('partners', 'partners.partnerId', '=', 'contracts.contractParties')
            ->select('top_up.*','contracts.*','partners.*')
            ->get();
            // dd($top_up);
        // $top_up = TopUp::paginate(5);
        $partners = DB::table('partners')->get();
        $contracts = DB::table('contracts')->get();
        // $contract = DB::table('contracts')
        //     ->join('partners', 'partners.partnerId', '=', 'contracts.contractParties')
        //     ->select('contract.entityType')
        //     ->get();

        return view("index", compact('top_up','partners','contracts'));
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
        // dd($request);
        TopUp::create($request->all());
        return redirect('top_up')->with('status','data berhasil di Top Up!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TopUp  $topUp
     * @return \Illuminate\Http\Response
     */
    public function show(TopUp $topUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TopUp  $topUp
     * @return \Illuminate\Http\Response
     */
    public function edit(TopUp $topUp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TopUp  $topUp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TopUp $topUp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TopUp  $topUp
     * @return \Illuminate\Http\Response
     */
    public function destroy(TopUp $topUp)
    {
        //
    }
}