@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.vehicle.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.vehicles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.id') }}
                        </th>
                        <td>
                            {{ $vehicle->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.name') }}
                        </th>
                        <td>
                            {{ $vehicle->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.manufacturer') }}
                        </th>
                        <td>
                            {{ $vehicle->manufacturer }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.type') }}
                        </th>
                        <td>
                            {{ $vehicle->type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vehicle.fields.fuel') }}
                        </th>
                        <td>
                            {{ $vehicle->fuel }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.vehicles.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection