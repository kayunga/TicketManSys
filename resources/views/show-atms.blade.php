@extends('layouts.layout')
@section('content')

<div class="row">
    @include('layouts.sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">ATM Fleet</h1>
            @include('shared.search-bar')
        </div>

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
                    <td>
                        {{-- Assuming you have routes for viewing, editing, and deleting ATMs --}}
                        <a href="{{ route('atms.edit', $atm->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('atms.destroy', $atm->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this ATM?')">Delete</button>
                        </form>
                    </td>
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
