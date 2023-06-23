<div class="container-fluid page-body-wrapper">
    @livewire('admin.left-navbar-component')
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Adding New Category</h4>
                    @if ( Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif
                    <form class="forms-sample" wire:submit.prevent="storeCategory">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Categrory Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="exampleInputUsername1"
                          placeholder="Input Category Name"
                          wire:model="name"
                          wire:keyup="generateslug"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Category Slug</label>
                        <input
                          type="text"
                          class="form-control"
                          id="exampleInputEmail1"
                          placeholder="Slug"
                          wire:model="slug"
                        />
                      </div>
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