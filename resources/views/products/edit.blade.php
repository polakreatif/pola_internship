@extends('layouts.admin')

@section('head')
  <title>ShopTronik | Edit Product </title>
  @include('components.admin.head_form_advance')
@endsection

@section('script')
  @include('components.admin.script_form_advance')
@endsection

@section('content-header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Edit Product</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/dashboard">Dasboard</a></li>
          <li class="breadcrumb-item active">Product</li>
        </ol>
      </div>
    </div>
  </div>
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-body">
            
            <form role="form">
              <!-- Media -->
              <div class="row justify-content-center">
                
                <div class="col-12 col-md-6">
                  <div 
                    type="button" 
                    class="card form-img-modal-btn shadow" 
                    data-toggle="modal" 
                    data-target="#media-upload"
                  >
                    <div class="card-body text-center">
                      <i class="far fa-images fa-4x"></i>
                    </div>
                  </div>

                  <div class="modal fade" id="media-upload" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="media-uploadLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">

                        <form>
                          <div class="modal-header">
                            <h5 class="modal-title" id="media-uploadLabel">Upload Media</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            
                            <div class="d-flex justify-content-center">
                              <label for="media" class="btn btn-outline-dark cp">
                                <i>pilih media</i>
                              </label>
                            </div>

                            <div class="d-none">
                              <input type="file" id="media" name="media" >
                            </div>
                              
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">upload</button>
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>

                </div>
                  
              </div>
              <!-- Close Media -->

              <!--  -->
              <div class="form-group">
                <label class="col-form-label" for="name">
                  Name
                </label>
                <input 
                  type="text" 
                  class="form-control" 
                  id="name"
                  name="name" 
                  placeholder="Name product...."
                  value="Name product"
                >
              </div>

              <div class="row mb-3">
                <div class="col-6">
                  <label>Price</label>
                  
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Rp.</span>
                    </div>
                    <input type="text" class="form-control" placeholder="199"
                      value="199"
                    >
                    <div class="input-group-append">
                      <span class="input-group-text">.00</span>
                    </div>
                  </div>
                </div>

                <div class="col-3">
                  <label>Discount?</label>

                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="30" value="0">
                    <div class="input-group-append">
                      <span class="input-group-text">%</span>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <label>Category</label>
                <select 
                  class="select2" 
                  multiple="multiple" 
                  data-placeholder="Select categories" 
                  style="width: 100%;"
                >
                  <option>Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>

              

              <div class="form-group">
                <label class="col-form-label" for="description">
                  Description
                </label>
                <textarea
                  type="text"
                  rows="9" 
                  class="form-control" 
                  id="description" 
                  name="description" 
                  placeholder="Write some text here....."
                >Some desc</textarea>
              </div>

              <button
                class="btn btn-primary w-100"
                style="border-radius: 15px;"
              >
                Add
              </button>
            </form>

          </div> <!-- End Card Body-->
        </div> <!-- End Card -->

      </div> <!-- Close Col -->
    </div> <!-- Close Row -->
  </div>  <!-- End Container -->
@endsection