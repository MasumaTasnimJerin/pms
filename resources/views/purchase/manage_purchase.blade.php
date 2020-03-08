@extends('Dashboard.admin_dashboard')
@section('content')
<div class="card">
                                <h5 class="card-header">Manage Purchase</h5>
                                <div class="card-body">
                                    <div class="table-responsive ">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">SL</th>
                                                    <th scope="col">Invoice No</th>
                                                    <th scope="col">Purchase ID</th>
                                                    <th scope="col">Manufacturer Name</th>
                                                    <th scope="col">Purchase Date</th>
                                                    <th scope="col">Totall Amount</th>
                                                    <th scope="col">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>123</td>
                                                    <td>1244</td>
                                                    <td>@234</td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td colspan="2">Larry the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
@endsection
