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
                  <table id="datatable1" class="table table-responsive">
                    <thead class="">
                      <tr class="">
                        <th scope="col" class="col-auto">Sl</th>
                        <th scope="col"class="col-md-auto">Category Name</th>
                        <th scope="col"class="col-md-auto">Brand Name</th>
                        <th scope="col"class="col-md-auto">Status</th>
                        <th scope="col"class="col-md-auto">Created Date </th>
                        <th scope="col"class="col-md-auto">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                         $i =1;
                        @endphp
                        @foreach ($categories as $data )
                           <tr >
                            <td>{{$i++}}</td>
                            <td class="col-md-auto">{{ $data->category_name }}</td>
                            <td class="col-md-auto">{{ $data->id }}</td>
                            <td>
                             @if($data->status ==1)
                              <span class="badge badge-success">Active</span>
                             @else
                                <span class="badge badge-danger">inactive</span>
                             @endif
                            </td>
                            <td>{{ $data->created_at }}</td>
                            <td>
                             <a href="{{ url('categories/edit/'.$data->id)}}" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modaldemo1"><i class="fa-regular fa-pen-to-square"></i></a>
                             <a href="{{ url('categories/delete/'.$data->id)}}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></a>
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
                    <h6 class="card-body">Add Category</h6>
                       <form action="{{ route('store.Category') }}" method="POST">
                        @csrf
                        <div class="wd-300">
                            <div class="d-md-flex mg-b-30">
                                <div class="form-group mg-b-0 ">
                                    <label>Brand <span class="text-danger">*</span></label>
                                    <select class="form-control wd-200 wd-sm-250 align-items-center" name="brand_id">
                                        <option selected disabled>Select A Brand</option>
                                        @foreach ($brands  as $brand )
                                        <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div><!-- form-group -->
                            </div>
                        <div class="d-md-flex mg-b-30">
                            <div class="form-group mg-b-0">
                            <label>Category Name: <span class="tx-danger">*</span></label>
                            <input type="text" name="category_name" class="form-control wd-200 wd-sm-250" placeholder="Enter firstname" required>
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
