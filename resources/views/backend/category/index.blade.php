@extends('layouts.backend')


@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-6">
            <div class="card bg-danger">
                <div class="card-header">
                    <h3>รายการ</h3>
                </div>
                <div class="card-body">
                    <table class="table table-dark table-striped elevation-5">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">หมวดสินค้า</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card bg-primary">
                <div class="card-header">
                    <h3>รายการสินค้า</h3>
                </div>
                <div class="card-body">
                    <h3>{{ $orderCount }}</h3>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card bg-success">
                <div class="card-header">
                    <h3>รวม ไอดี</h3>
                </div>
                <div class="card-body">
                    <p>{{ $cat2->name }} _ {{$cat2->created_at}} _ {{$cat2->updated_at}}</p>
                    <h3>{{ $AID }}</h3>
                </div>
            </div>
        </div>

        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->


@endsection
