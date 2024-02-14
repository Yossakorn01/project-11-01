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
                                <div class="height-700">
                                    <div class="container-xxl flex-grow-1 container-p-y">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card mb-9">
                                                    <h5 class="card-header">Product</h5>
                                                    <div class="card-body">
                                                        <form action="{{ url('admin/product/update/' . $pro->product_id) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div>
                                                                <label for="defaultFormControlInput"
                                                                    class="form-label">Name</label>
                                                                <input type="text" name="name" class="form-control"
                                                                    value="{{ $pro->name }}" id="defaultFormControlInput"
                                                                    placeholder="กรุณากรอกชื่อสินค้า"
                                                                    aria-describedby="defaultFormControlHelp" />


                                                                <label for="defaultFormControlInput"
                                                                    class="form-label">Price</label>
                                                                <input type="text" name="price"
                                                                    value="{{ $pro->price }}" class="form-control"
                                                                    id="defaultFormControlInput"
                                                                    placeholder="กรุณากรอกราคาสินค้า"
                                                                    aria-describedby="defaultFormControlHelp" />



                                                                <label for="defaultFormControlInput"
                                                                    class="form-label">Description</label>
                                                                <input type="text" name="description"
                                                                    value="{{ $pro->description }}" class="form-control"
                                                                    id="defaultFormControlInput"
                                                                    placeholder="กรุณากรอกรายละเอียดสินค้า"
                                                                    aria-describedby="defaultFormControlHelp" />


                                                                <div class="form-group">
                                                                    <label for="exampleInputphone">Category</label>
                                                                    <select name="category_id" class="form-control"
                                                                        id="exampleInputphone">
                                                                        @foreach ($cat as $c)
                                                                            <option value="{{ $c->category_id }}"
                                                                                @if ($c->category_id == $pro->category_id)
                                                                                selected
                                                                                @endif>
                                                                                {{ $c->name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <label for="defaultFormControlInput"
                                                                    class="form-label">Images</label>
                                                                <div class="input-group">
                                                                    <input name="image" {{ $pro->image }} type="file"
                                                                        class="form-control" id="inputGroupFile02" />
                                                                    <label class="input-group-text"
                                                                        for="inputGroupFile02">Upload</label>
                                                                </div>

                                                                <div class="mt-4">
                                                                    <img src="{{ asset('backend/product/resize/' . $pro->image) }}"
                                                                        alt="">
                                                                </div>
                                                                <br>
                                                                <input type="submit" value="อัพเดท"
                                                                    class="btn btn-primary">
                                                                <a href="{{ route('p.index') }}"
                                                                    class="btn btn-danger">ย้อนกลับ</a>
                                                            </div>
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
