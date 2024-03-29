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
                                    <div class="container-xxl flex-grow-1 container-p-y">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card mb-9">
                                                    <h5 class="card-header">Product</h5>
                                                    <div class="card-body">
                                                        <form action="{{ url('admin/product/insert') }}" method="post"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div>
                                                                <label for="defaultFormControlInput"
                                                                    class="form-label">Name</label>
                                                                <input type="text" name="name" class="form-control"
                                                                    id="defaultFormControlInput"
                                                                    placeholder="กรุณากรอกชื่อสินค้า"
                                                                    aria-describedby="defaultFormControlHelp" />
                                                                <div class="mt-3">
                                                                    @error('name')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <label for="defaultFormControlInput"
                                                                    class="form-label">Price</label>
                                                                <input type="text" name="price" class="form-control"
                                                                    id="defaultFormControlInput"
                                                                    placeholder="กรุณากรอกราคาสินค้า"
                                                                    aria-describedby="defaultFormControlHelp" />

                                                                <div class="mt-3">
                                                                    @error('price')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <label for="defaultFormControlInput"
                                                                    class="form-label">Description</label>
                                                                <input type="text" name="description"
                                                                    class="form-control" id="defaultFormControlInput"
                                                                    placeholder="กรุณากรอกรายละเอียดสินค้า"
                                                                    aria-describedby="defaultFormControlHelp" />

                                                                <div class="mt-3">
                                                                    @error('description')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>



                                                                <div class="form-group">
                                                                    <label for="exampleInputphone">Category</label>
                                                                    <select name="category_id" class="form-control" id="exampleInputphone">
                                                                        <option selected>กรุณาเลือกประเภทสินค้า</option>
                                                                        @foreach ($category as $cat)
                                                                            <option value="{{ $cat->category_id }}">{{ $cat->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>


                                                                <label for="defaultFormControlInput"
                                                                    class="form-label">Images</label>
                                                                <div class="input-group">
                                                                    <input name="image" type="file"
                                                                        class="form-control" id="inputGroupFile02" />
                                                                    <label class="input-group-text"
                                                                        for="inputGroupFile02">Upload</label>
                                                                </div>

                                                                <div class="mt-3">
                                                                    @error('images')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <input type="submit" value="บันทึก"
                                                                    class="btn btn-primary mt-3">
                                                                <a href="{{ url('admin/product/index') }}"
                                                                    class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
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
