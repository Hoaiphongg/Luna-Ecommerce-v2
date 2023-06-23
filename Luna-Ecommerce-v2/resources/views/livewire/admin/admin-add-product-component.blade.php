
<div class="container-fluid page-body-wrapper">
    @livewire('admin.left-navbar-component')
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Adding New Product</h4>
                    @if ( Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif
                    <form class="forms-sample" enctype="multipart/form-data" wire:submit.prevent="addProduct">
                      <div class="form-group">
                        <label for="exampleInputName1">Product Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="exampleInputName1"
                          placeholder="Name"
                          wire:model="name"
                          wire:keyup="generateSlug"
                        />
                      </div>
                      <div class="form-group" >
                        <label for="exampleInputEmail3">Short Description</label>
                        <textarea class="form-control " name="" cols="30" rows="10" wire:model="short_description">
                        
                        </textarea>
                      </div>
                      <div class="form-group" >
                        <label for="exampleInputEmail3">Description</label>
                          <textarea class="form-control " name=""  cols="30" rows="10" wire:model="description">
                            
                          </textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Regular Price</label>
                        <input
                          type="text"
                          class="form-control"
                          id="exampleInputPassword4"
                          placeholder="Price"
                          wire:model="regular_price"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Sale Price</label>
                        <input
                          type="text"
                          class="form-control"
                          id="exampleInputPassword4"
                          placeholder="Sale Price"
                          wire:model="sale_price"
                        />
                      </div>
                      <div class="form-group">
                        <label>Product Image</label>
                        <input
                          type="file"
                          name="img[]"
                          class="file-upload-default"
                          wire:model="image"
                        />
                        <div class="input-group col-xs-12">
                          <input
                            type="text"
                            class="form-control file-upload-info"
                            disabled
                            placeholder="Upload Image"
                          />
                          <span class="input-group-append">
                            <button
                              class="file-upload-browse btn btn-primary"
                              type="button"
                            >
                              Upload
                            </button>
                          </span>
                        </div>
                        @if ( $image)
                            <img src="{{ $image->temporaryUrl() }}" alt="" width="100px" height="100px">
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Stock</label>
                        <select class="form-control" id="exampleSelectGender" wire:model="stock">
                          <option value="instock">Instock</option>
                          <option value="outofstock">Out of stock</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleSelectGender">Feature</label>
                        <select class="form-control" id="exampleSelectGender" wire:model="featured">
                          <option value="0">No</option>
                          <option value="1">Yes</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputCity1">Quantity</label>
                        <input
                          type="text"
                          class="form-control"
                          id="exampleInputCity1"
                          placeholder="Quantity"
                          wire:model="quantity"
                        />
                      </div>

                      <div class="form-group">
                        <label for="exampleSelectGender">Category</label>
                        <select class="form-control" id="exampleSelectGender" wire:model="category_id">
                          <option value="">Select Category</option>
                          @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </br>

                      <button type="submit" class="btn btn-primary mr-2">
                        Submit
                      </button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>