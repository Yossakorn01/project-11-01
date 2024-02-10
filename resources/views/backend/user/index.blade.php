@extends('layouts.master_backend')
@section('contant')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
          <h3 class="content-header-title">User</h3>
        </div>
      </div>

<section id="chartjs-bar-charts">
             <div class="col-12">
                            <div class="card">
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                            <div class="height-600">
                                                <table class="table">
                                                    <thead class="table-dark">
                                                      <tr>
                                                        <th>No</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody class="table-border-bottom-0">
                                                      @foreach ($u as $user)
                                                      <tr>
                                                      <td>{{$user->id}}</td>
                                                      <td>{{$user->name}}</td>
                                                      <td>{{$user->email}}</td>
                                                      <td>{{$user->phone}}</td>
                                                      </tr>
                                                      @endforeach
                                                    </tbody>
                                                  </table>
                                        <canvas id="column-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
@endsection

