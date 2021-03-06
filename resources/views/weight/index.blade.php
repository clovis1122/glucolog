@extends('layouts.master') @section('content')

<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">
            Historial de peso
        </h3>
        <div class="block-options">
            <a href="/weights/create" class="btn btn-sm btn-primary">Registrar Peso</a>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                <i class="si si-pin"></i>
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
        </div>
    </div>
    <div class="block-content">
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Peso</th>
                    <th>Usuario</th>
                </tr>
            </thead>
            <tbody>
                @foreach($weights as $weight)
                <tr>
                    <td>
                        {{$weight->fcreated()}}
                    </td>
                    <td>
                        {{$weight->weight}}
                    </td>
                    <td>
                        {{$weight->user->name}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection