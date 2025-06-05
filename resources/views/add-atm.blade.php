@extends('layouts.layout')
@section('content')

<div class="row">
    @include('layouts.sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">ATM Management</h1>

            <hr>
        </div>

        @include('shared.alerts')
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Add ATM</h5>
                <form action="{{ route('atms.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city" required>
                    </div>
                    <div class="mb-3">
                        <label for="site" class="form-label">Site</label>
                        <input type="text" class="form-control" id="site" name="site" required>
                    </div>
                    <div class="mb-3">
                        <label for="bank" class="form-label">Bank</label>
                        <input type="text" class="form-control" id="bank" name="bank" required>
                    </div>
                    <div class="mb-3">
                        <label for="atm_id" class="form-label">Atm ID</label>
                        <input type="text" class="form-control" id="atm_id" name="atm_id" required>
                    </div>
                    <div class="mb-3">
                        <label for="model" class="form-label">Model</label>
                        <input type="text" class="form-control" id="model" name="model" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add ATM</button>
                </form>
            </div>

    </main>

</div>
@endsection
