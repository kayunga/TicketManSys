@extends('layouts.layout')
@section('content')

<div class="row">
    @include('layouts.sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">ATM Management</h1>
            @include('shared.alerts')
            <hr>
        </div>
        <div class="card-deck d-flex gap-3">
            <div class="card" style="min-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Add ATM</h5>
                    <p class="card-text">Register a new ATM to the system.</p>
                    <a href="/add-atm" class="btn btn-primary">Add ATM</a>
                </div>
            </div>

            <div class="card" style="min-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">View ATMs</h5>
                    <p class="card-text">See all registered ATMs and their status.</p>
                    <a href="/show-atms" class="btn btn-secondary">View ATMs</a>
                </div>
            </div>
            <div class="card" style="min-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">ATM Reports</h5>
                    <p class="card-text">Access ATM usage and maintenance reports.</p>
                    <a href="{{-- route('atm.reports') --}}" class="btn btn-info">Reports</a>
                </div>
            </div>

        </div>
        <hr>
        <h2 class="h6">Recently Added</h2>
        {{-- @include('shared.atm-table') --}}
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">ATM ID</th>
                    <th scope="col">Site</th>
                    <th scope="col">City</th>
                    <th scope="col">Model</th>
                    <th scope="col">Bank</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($atms) && count($atms) > 0)
                @foreach ($atms as $atm)
                <tr>
                    <td>{{ $atm->atm_id }}</td>
                    <td>{{ $atm->site }}</td>
                    <td>{{ $atm->city }}</td>
                    <td>{{ $atm->model }}</td>
                    <td>{{ $atm->bank }}</td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="6" class="text-center">No ATMs found.</td>
                </tr>
                @endif
            </tbody>
        </table>
    </main>

</div>
@endsection
