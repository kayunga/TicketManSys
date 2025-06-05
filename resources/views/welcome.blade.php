@extends('layouts.layout')
@section('content')

<div class="row">
    @include('layouts.sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
        </div>
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Pending Maintenance</h5>
                        <p class="card-text display-4">{{ $pendingCount ?? 0 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Done Maintenance</h5>
                        <p class="card-text display-4">{{ $doneCount ?? 0 }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Overdue Maintenance</h5>
                        <p class="card-text display-4">{{ $overdueCount ?? 0 }}</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <h2 class="h4">Recent Maintenance</h2>
        <div class="table-responsive small">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">ATM ID</th>
                        <th scope="col">Bank</th>
                        <th scope="col">Site</th>
                        <th scope="col">City</th>
                        <th scope="col">Model</th>
                        <th scope="col">Engineer</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($recentMaintenances as $maintenance)
                <tr>
                    <td>{{ $maintenance->atm_id }}</td>
                    <td>{{ $maintenance->site }}</td>
                    <td>{{ $maintenance->city }}</td>
                    <td>{{ $maintenance->model }}</td>
                    <td>{{ $maintenance->engineer }}</td>
                    <td>{{ $maintenance->status }}</td>
                    </tr>
                    @endforeach --}}
                </tbody>
            </table>
    </main>
</div>
@endsection
