@extends('admin.master')

@section('content')
          <div class="sl-mainpanel ">
             <nav class="breadcrumb sl-breadcrumb navbar navbar-light bg-light px-3" id="#navbar-example2">
              <a class="breadcrumb-item" href="index.html">Starlight</a>
              <a class="breadcrumb-item" href="index.html">Tables</a>
              <span class="breadcrumb-item active">Data Table</span>
               </nav>
              <div class="col-lg-12  mt-2">
                <div class="card pd-15 pd-sm-15">
                    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                       <form action="{{ url('store/Product') }}" method="POST">
                            @csrf
                            <div class="row row-sm mg-t-h-9">
                              <div class="col-xl-8">
                               <div class="card pd-5 pd-sm-5 form-layout form-layout-4">
                                <div class="row">
                                  <label class="col-sm-3 float-lg-right">Firstname: <span class="tx-danger">:</span></label>
                                  <div class="col-sm-4 mg-t-0 mg-sm-t-0">
                                    <input class="form-control form-control-sm" type="text"  placeholder="Enter firstname">
                                  </div>
                                </div><!-- row -->
                                <div class="row mg-t-20">
                                  <label class="col-sm-3">Lastname: <span class="tx-danger">:</span></label>
                                  <div class="col-sm-4 mg-t-10 mg-sm-t-0">
                                    <input  class="form-control form-control-sm" type="text" placeholder="Enter lastname">
                                  </div>
                                </div>
                                <div class="row mg-t-20">
                                  <label class="col-sm-3">Email: <span class="tx-danger">:</span></label>
                                  <div class="col-sm-4 mg-t-10 mg-sm-t-0">
                                    <input class="form-control form-control-sm" type="text"  placeholder="Enter email address">
                                  </div>
                                </div>

                              </div><!-- card -->
                              <div class="col-sl-2">

                              </div>
                            </div><!-- col-6 -->
                            <div class="col-xl-2 items-center">
                              <div class="card pd-2 pd-sm-2">
                                  <div class="">
                                    <img src="{{ asset('frontend') }}/img/latest-product/lp-2.jpg""/>
                                  </div>
                                  <input type="file">
                              </div><!-- card -->
                            </div><!-- col-6 -->
                           </div><!-- row -->
                           <div class="Product col-sm-12 table-responsive-sm Product">
                              <table class="table">
                                <thead class="items-center">
                                    <tr>
                                        <th>sl</th>
                                        <th>Color</th>
                                        <th>Qty</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="p-0">
                                    <tr class="p-1">
                                        <td>1</td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm" placeholder="Small input">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm" placeholder="Small input">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm" placeholder="Small input">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm" placeholder="Small input">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm" placeholder="Small input">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm" placeholder="Small input">
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm" placeholder="Small input">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm" placeholder="Small input">
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                              </table>
                           </div>
                           <div class="mg-t-30 float-lg-right mg-r-15-force">
                            <button class="btn btn-info">Submit Form</button>
                            <button class="btn btn-secondary">Cancel</button>
                          </div><!
                        </form>
                    </div>
                </div><!-- card -->
              </div>
            </div>
           {{-- @include('admin.Category.Edit'); --}}

@endsection
