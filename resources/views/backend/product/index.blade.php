@extends('layouts.master_backend')
@section('contant')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
          <h3 class="content-header-title">Products</h3>
        </div>
      </div>

<section id="chartjs-bar-charts">
             <div class="col-12">
                            <div class="card">
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                            <div class="height-600">
                                                <div class="table-responsive text-nowrap">
                                                    <a href="{{ route('p.create') }}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
                                                  <table class="table mt-4">
                                                    <thead class="table-dark">
                                                      <tr>
                                                        <th>No</th>
                                                        <th>Name</th>
                                                        <th>images</th>
                                                        <th>Price</th>
                                                        <th>Description</th>
                                                        <th>Created_at</th>
                                                        <th>Updated_at</th>
                                                        <th>Actions</th>
                                                      @foreach ($product as $pro)
                                                      </tr>
                                                    </thead>
                                                    <tbody class="table-border-bottom-0">
                                                      <tr>
                                                      <td>{{ $product->firstItem() + $loop->index }}</td>
                                                      <td>{{ $pro->name}}</td>
                                                      <td>
                                                        <img src="{{ asset('backend/product/resize/'.$pro->image) }}" width="30%" alt="">
                                                      </td>
                                                      <td> {{$pro->price}}</td>
                                                      <td>{{$pro->description}}</td>
                                                      <td>{{$pro->created_at}}</td>
                                                      <td>{{$pro->updated_at}}</td>
                                                      <td>
                                                        <a href="{{ route('p.edit',$pro->product_id) }}"><i class='btn btn-outline-success btn-fw'>Edit</i></a>
                                                        <a href="{{ url('admin/product/delete/'.$pro->product_id) }}"><i class='btn btn-outline-danger btn-fw'>Delete</i></a>
                                                      </td>
                                                      </tr>
                                                      @endforeach
                                                    </tbody>
                                                  </table>
                                                </div>
                                        <canvas id="column-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
@endsection




