@extends('Dashboard.admin_dashboard')
@section('content')
<div class="card">
                                <h5 class="card-header">Medicine Category</h5>
                                <div class="card-body">
                                    <div class="table-responsive ">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Options</th>
                                                    <th scope="col">Selling Price</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Generic Name</th>
                                                    <th scope="col">Company</th>
                                                    <th scope="col">Effects</th>
                                                    <th scope="col">Expire Date</th>
                                                    <th scope="col">Options</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>tee</td>
                                                    <td>abc</td>
                                                    <td>amp</td>
                                                    <td>cap</td>

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
