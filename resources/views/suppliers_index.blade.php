@extends('base_layouts.base')
@section('content')
@include('base_layouts.messages')
<div class="card margin-jumbotron">
    <div class="card-header card-header-primary">
        <h3><i class="fas fa-boxes fa-2x"></i> Suppliers</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="suppliers_tbl" class="table table-sm table-hover">
                <thead>
                <tr>
                    <th>Supplier Name</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                    <th>Email</th>
                    <th>Contact One Name</th>
                    <th>Contact Two Name</th>
                    <th>Contact Three Name</th>
                    <th>Date Created</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @if ($suppliers)
                    @foreach ($suppliers as $supplier)
                        <tr>
                            <td>{{ $supplier->supplier_name }}</td>
                            <td>{{ $supplier->address }}</td>
                            <td>{{ $supplier->contact_number }}</td>
                            <td>{{ $supplier->email }}</td>
                            <td>{{ $supplier->contact_one_name }}</td>
                            <td>{{ $supplier->contact_two_name }}</td>
                            <td>{{ $supplier->contact_three_name }}</td>
                            <th>{{ $supplier->created_at }}</th>
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
    $('#suppliers_tbl').DataTable();
} );
</script>
@endsection