@extends('layouts.master_backend')
@section('contant')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
          <h3 class="content-header-title">Category</h3>
        </div>
      </div>

<section id="chartjs-bar-charts">
             <div class="col-12">
                            <div class="card">
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                            <div class="height-600">
                                                <div class="container-xxl flex-grow-1 container-p-y">
                                                    <div class="card">
                                                        <div class="table-responsive text-nowrap">
                                                            <a href="{{ route('c.create') }}"class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
                                                          <table class="table mt-4">
                                                            <thead class="table-dark">
                                                              <tr>
                                                                <th>No</th>
                                                                <th>Name</th>
                                                                <th>Created_at</th>
                                                                <th>Update_at</th>
                                                                <th>Actions</th>
                                                              </tr>
                                                            </thead>
                                                            <tbody class="table-border-bottom-0">
                                                              @foreach ($category as $cat)
                                                              <tr>
                                                              <td>{{ $category->firstItem() + $loop->index }}</td>
                                                              <td>{{ $cat->name }}</td>
                                                              <td>{{ $cat->created_at }}</td>
                                                              <td>{{ $cat->updated_at }}</td>
                                                              <td>
                                                                  <a href="{{ url('admin/category/edit/'.$cat->category_id) }}"><i class='btn btn-outline-success btn-fw'>Edit</i></a>
                                                                  <a href="{{ url('admin/category/delete/'.$cat->category_id) }}"><i class='btn btn-outline-danger btn-fw'>Delete</i></a>
                                                              </td>
                                                              </tr>
                                                              @endforeach
                                                            </tbody>
                                                          </table>
                                                        </div>
                                                        <div class="me-3">
                                                          {{ $category->links('pagination::bootstrap-5') }}
                                                        </div>
                                                      </div>
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




