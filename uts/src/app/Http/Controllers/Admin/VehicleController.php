<?php

namespace App\Http\Controllers\Admin;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProductRequest;
use Yajra\DataTables\Facades\DataTables;
use Symfony\Component\HttpFoundation\Response;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('admin.vehicles.index', compact('vehicles'));
    }

    public function makeDataTables(Request $request)
    {
        $vehicles = Vehicle::all();

        $table = DataTables::of($vehicles);
        $table->addColumn('placeholder', '&nbsp;');
        $table->addColumn('actions', '&nbsp;');

        $table->editColumn('actions', function ($row) {
            $viewGate      = 'vehicle_show';
            $editGate      = 'vehicle_edit';
            $deleteGate    = 'vehicle_delete';
            $crudRoutePart = 'vehicles';

            return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
        });

        $table->rawColumns(['actions', 'placeholder']);

        return $table->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Vehicle::types();
        $fuels = Vehicle::fuels();
        return view('admin.vehicles.create', compact('types', 'fuels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Vehicle::create($request->all());
        return redirect()->route('admin.vehicles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        return view('admin.vehicles.show', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        $types = Vehicle::types();
        $fuels = Vehicle::fuels();
        return view('admin.vehicles.edit', compact('vehicle', 'types', 'fuels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $vehicle->update($request->all());
        return redirect()->route('admin.vehicles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return back();
    }

    public function massDestroy(Request $request)
    {
        $vehicles = Vehicle::find(request('ids'));

        foreach ($vehicles as $vehicle) {
            $vehicle->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
