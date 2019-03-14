<?php

namespace App\Http\Controllers;

use App\PortfolioCategory;
use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\PortfolioCategory  $portfolioCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PortfolioCategory $portfolioCategory)
    {
        $portfolio_categories = PortfolioCategory::all();
        return view('pages.portfolio_categories.show', compact(['portfolio_categories', 'portfolioCategory']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PortfolioCategory  $portfolioCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PortfolioCategory $portfolioCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PortfolioCategory  $portfolioCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PortfolioCategory $portfolioCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PortfolioCategory  $portfolioCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PortfolioCategory $portfolioCategory)
    {
        //
    }
}
