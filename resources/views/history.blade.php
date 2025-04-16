@extends('layout')
@section('title', 'History Transaction')
@section('content-title', 'History')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">History Transaction Database</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Transaction ID</th>
                        <th>Item Id</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Transaction ID</th>
                        <th>Item Id</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @forelse ($transaction_details as $transaction_detail)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$transaction_detail->transaction_id}}</td>
                        <td>{{$transaction_detail->item_id}}</td>
                        <td>{{$transaction_detail->qty}}</td>
                        <td>{{$transaction_detail->subtotal}}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger">
                        Belum ada data
                    </div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection