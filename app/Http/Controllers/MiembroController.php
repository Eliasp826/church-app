<?php

namespace App\Http\Controllers;

use App\Http\Resources\MiembroCollection;
use App\Models\Miembro;
use App\Http\Requests\StoreMiembroRequest;
use App\Http\Requests\UpdateMiembroRequest;
use App\Filters\MiembroFilter;
use Illuminate\Http\Request;

class MiembroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new MiembroFilter();
        $queryItems = $filter->transform($request);

        $miembros = Miembro::where($queryItems);
        return new MiembroCollection($miembros->paginate()->appends($request->query()));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMiembroRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Miembro $miembro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Miembro $miembro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMiembroRequest $request, Miembro $miembro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Miembro $miembro)
    {
        //
    }
}
