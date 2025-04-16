@extends('layout')
@section('title', 'Transaction')
@section('content-title', 'Transaction')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Transaction Database</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>User ID</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Pay Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>User ID</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Pay Total</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @forelse ($transactions as $transaction)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$transaction->user_id}}</td>
                        <td>{{$transaction->date}}</td>
                        <td>{{$transaction->total}}</td>
                        <td>{{$transaction->pay_total}}</td>
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
