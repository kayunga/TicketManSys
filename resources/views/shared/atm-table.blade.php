<table class="table table-striped">
    <thead>
        <tr>
            <th>ATM ID</th>
            <th>Site</th>
            <th>City</th>
            <th>Model</th>
            <th>Bank</th>
        </tr>
    </thead>
    <tbody>
        @forelse($atms as $atm)
            <tr>
                <td>{{ $atm->atm_id }}</td>
                <td>{{ $atm->site }}</td>
                <td>{{ $atm->city }}</td>
                <td>{{ $atm->model }}</td>
                <td>{{ $atm->bank }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">No ATMs available.</td>
            </tr>
        @endforelse
    </tbody>
</table>
