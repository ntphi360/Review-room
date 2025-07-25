<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ListingRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller as BaseController;

class ListingController extends BaseController
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function __construct(){
        $this->authorizeResource(Listing::class,'listing');
    }
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
        $request->user()->listings()->create($data); //Asign by_user_id for listing
        
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