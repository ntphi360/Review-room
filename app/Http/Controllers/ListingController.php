<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListingRequest;
use App\Models\Listing;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ListingController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('Listing/Index',[
            'listings' => Listing::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Listing/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ListingRequest $request)
    {
        $data = $request->validated();
        $listing = Listing::create($data);
        return redirect()->route('listing.index')
                ->with('success','Listing was created!');
    
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
          return inertia('Listing/Show',[
            'listing' => $listing,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing)
    {
        return inertia('Listing/Edit',[
            'listing' => $listing,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ListingRequest $request, Listing $listing)
    {
        $data = $request->validated();
        $listing->update($data);
        return redirect()->route('listing.index')
            ->with('success','Listing was changed!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing)
    {
        $listing->delete();
        return redirect()->route('listing.index')
            ->with('success','Listing was deleted!');
    }
}