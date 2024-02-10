@extends('layouts.master_backend')
@section('contant')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">

        <div class="col-lg-12 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">


                            </div>
                            <span class="fw-semibold d-block mb-1">User</span>
                            <h3 class="card-title mb-2"> {{ $u->count() }} คน</h3>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-12 col-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">


                            </div>
                            <span class="fw-semibold d-block mb-1">Category</span>
                            <h3 class="card-title mb-2"> {{ $c->count() }} ประเภท</h3>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-12 col-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">


                            </div>
                            <span class="fw-semibold d-block mb-1">Product</span>
                            <h3 class="card-title mb-2"> {{ $p->count() }} ชิ้น</h3>
                        </div>
                    </div>

                </div>

            </div>

        </div>

@endsection

