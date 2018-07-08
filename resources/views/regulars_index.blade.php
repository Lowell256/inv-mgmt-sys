@extends('base_layouts.base')
@section('content')
@include('base_layouts.messages')
<div class="card margin-jumbotron">
    <div class="card-header card-header-primary">
        <h3><i class="fas fa-address-book fa-2x"></i> Regulars</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="regulars_tbl" class="table table-sm table-hover">
                <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @if ($regulars)
                    @foreach ($regulars as $regular)
                        <tr>
                            <td>{{ $regular->customer_name }}</td>
                            <td>{{ $regular->address }}</td>
                            <td>{{ $regular->contact_number }}</td>
                            <td>{{ $regular->email }}</td>
                            <td>action here</td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
    $('#regulars_tbl').DataTable();
} );
</script>
@endsection