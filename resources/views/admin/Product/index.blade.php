@extends('admin.master')

@section('content')
    <div class="sl-mainpanel ">
        <nav class="breadcrumb sl-breadcrumb">
            <row class="d-flex">
                <div class="float-lg-right">
                    <a class="" href="{{ url('/Product/AddProduct') }}">Add Product</a>
                </div>
            </row>

        </nav>
        <div class="col-lg-8 float-left mt-2">
            <div class="card pd-20 pd-sm-40">
                <div class="table-wrapper">
                    <table id="datatable1" class="table table-responsive">
                        <thead class="">
                            <tr class="">
                                <th scope="col" class="col-auto">Sl</th>
                                <th scope="col"class="col-md-auto">Category Name</th>
                                <th scope="col"class="col-md-auto">Status</th>
                                <th scope="col"class="col-md-auto">Created Date </th>
                                <th scope="col"class="col-md-auto">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                         $i =1;
                        @endphp
                        @foreach ($categories as $data)
                           <tr >
                            <td>{{$i++}}</td>
                            <td class="col-md-auto">{{ $data->category_name }}</td>
                            <td>
                             @if ($data->status == 1)
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
                        @endforeach --}}
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div>
    </div>
    {{-- @include('admin.Category.Edit'); --}}
@endsection
