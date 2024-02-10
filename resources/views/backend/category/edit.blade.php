@extends('layouts.master_backend')
@section('contant')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
          <h3 class="content-header-title">Ctegory</h3>
        </div>
      </div>

<section id="chartjs-bar-charts">
             <div class="col-12">
                            <div class="card">
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                            <div class="height-600">
                                                <form method="POST" action="{{  url('admin/category/update/'.$cat->category_id) }}">
                                                    @csrf
                                                    <div class="container-xxl flex-grow-1 container-p-y">
                                                      <div class="row">
                                                          <div class="col-md-12">
                                                            <div class="card mb-9">
                                                              <h5 class="card-header">Edit Product</h5>
                                                              <div class="card-body">
                                                                <div>
                                                                  <label for="defaultFormControlInput" class="form-label">Name</label>
                                                                  <input
                                                                    type="text"
                                                                    name="name"
                                                                    value="{{ $cat->name }}"
                                                                    class="form-control"
                                                                    id="defaultFormControlInput"
                                                                    placeholder="กรุณากรอกประเภทสินค้า"
                                                                    aria-describedby="defaultFormControlHelp"
                                                                  />

                                                                  <div class="mt-3">
                                                                  @error('name')
                                                                      <div class="alert alert-danger">{{ $message }}</div>
                                                                  @enderror
                                                                  </div>
                                                                  <input type="submit" value="อัพเดทข้อมูล" class="btn btn-primary mt-3">
                                                                  <a href="{{ route('c.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>

                                                    </div>

                                                    </form>
                                        <canvas id="column-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
@endsection




