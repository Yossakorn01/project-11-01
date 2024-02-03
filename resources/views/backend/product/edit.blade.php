@extends('layouts.master_backend')
@section('contant')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
<div class="bg-light rounded h-100 p-4">
    <h6 class="mb-4">Edit Product</h6>
    <form action="{{ url('admin/product/update/'.$pro->product_id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="defaultFormControlInput" class="form-label">Name</label>
            <input
              type="text"
              name="name"
              value="{{ $pro->name }}"
              class="form-control"
              id="defaultFormControlInput"
              placeholder="กรุณากรอกชื่อสินค้า"
              aria-describedby="defaultFormControlHelp"
            />

            <label for="defaultFormControlInput" class="form-label">Price</label>
            <input
                type="text"
                name="price"
                value="{{ $pro->price }}"
                class="form-control"
                id="defaultFormControlInput"
                placeholder="กรุณากรอกราคาสินค้า"
                aria-describedby="defaultFormControlHelp"
            />

            <label for="defaultFormControlInput" class="form-label">Description</label>
            <input
                type="text"
                name="description"
                value="{{ $pro->description }}"
                class="form-control"
                id="defaultFormControlInput"
                placeholder="กรุณากรอกรายละเอียดสินค้า"
                aria-describedby="defaultFormControlHelp"
             />

            <label for="exampleFormControlSelect1" class="form-label">Category</label>
            <select name="category_id" class="from-select" id="exampleFormControlSelect1" aria-label="Default select example">
                <option selected>{{ $pro->category_id }}"</option>
                <option value="1">โทรศัพท์มือถือ</option>
                <option value="2">โน๊ตบุ๊ค</option>
                <option value="3">คอมพิวเตอร์ตั้งโต๊ะ</option>
            </select>

            <label for="defaultFormControlInput" class="form-label">Images</label>
                  <div class="input-group">
                    <input name="image" {{ $pro->image }} type="file" class="form-control" id="inputGroupFile02" />
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                  </div>

            <div class="mt-4">
                <img src="{{ asset('backend/product/resize/'.$pro->image) }}" alt="">
            </div>

        <input type="submit" value="อัพเดท" class="btn btn-primary">
        <a href="{{ route('p.index') }}" class="btn btn-danger">ย้อนกลับ</a>
    </form>
</div>
</div>
@endsection




