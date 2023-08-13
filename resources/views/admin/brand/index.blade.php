@extends('admin.master')

@section('content')
          <div class="sl-mainpanel ">
             <nav class="breadcrumb sl-breadcrumb">
              <a class="breadcrumb-item" href="index.html">Starlight</a>
              <a class="breadcrumb-item" href="index.html">Tables</a>
              <span class="breadcrumb-item active">Data Table</span>
               </nav>
               <div class="col-lg-8 float-left mt-2">
                  <div class="card pd-20 pd-sm-40">
                  <div class="table-wrapper">
                  <table id="datatable1" class="table">
                    <thead class="">
                      <tr class="">
                        <th class="wd-15p">Sl</th>
                        <th class="wd-15p">Category Name</th>
                        <th class="wd-15p">Status</th>
                        <th class="wd-20p">Created Date </th>
                        <th class="wd-15p">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                         $i =1;
                        @endphp
                        @foreach ($brands as $data )
                           <tr >
                            <td>{{$i++}}</td>
                            <td>{{ $data->brand_name }}</td>
                            <td>
                             @if($data->status ==1)
                              <span class="badge badge-success">Active</span>
                             @else
                                <span class="badge badge-danger">inactive</span>
                             @endif
                            </td>
                            <td>{{ $data->created_at }}</td>
                            <td>
                             <a href="{{ url('brand/edit/'.$data->id)}}" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modaldemo1"><i class="fa-regular fa-pen-to-square"></i></a>
                             <a href="{{ url('brand/delete/'.$data->id)}}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                           </tr>
                        @endforeach
                    </tbody>
                  </table>
                  </div><!-- table-wrapper -->
                  </div><!-- card -->
                </div>
              <div class="col-lg-4 float-lg-right mt-2">
                <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body">Add Brand</h6>
                       <form action="{{ route('store.Brand') }}" method="POST">
                        @csrf
                        <div class="wd-300">
                        <div class="d-md-flex mg-b-30">
                            <div class="form-group mg-b-0">
                            <label>Brand Name: <span class="tx-danger">*</span></label>
                            <input type="text" name="brand_name" class="form-control wd-200 wd-sm-250" placeholder="Enter firstname" required>
                            </div><!-- form-group -->
                        </div><!-- d-flex -->
                        <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                        </form>
                    </div><!-- card -->
              </div>
            </div>
           {{-- @include('admin.Category.Edit'); --}}

@endsection
