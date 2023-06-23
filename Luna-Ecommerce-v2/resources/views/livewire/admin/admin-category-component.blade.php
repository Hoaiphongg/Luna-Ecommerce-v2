<div class="container-fluid page-body-wrapper">
  @livewire('admin.left-navbar-component')
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Categories Management</h4>
              <div class="table-responsive">
                @if ( Session::has('message'))
                  <div class="alert alert-danger">{{ Session::get('message') }}</div>
                @endif
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Category Name</th>
                      <th>Slug</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ( $categories as $category)
                    <tr>
                      <td>{{ $category->id }}</td>
                      <td>{{ $category->name }}</td>
                      <td>{{ $category->slug }}</td>
                      <td>

                        <div class="template-demo mt-2">
                          <button type="button" class="btn btn-secondary btn-icon-text">
                            <a href="{{ route('admin.editcategory',['category_slug'=>$category->slug]) }}" style="text-decoration: none; color: black">Edit</a>
                            <i class="ti-file btn-icon-append"></i>                          
                          </button>
                          <button type="button" class="btn btn-success btn-icon-text">
                            <a href="#" wire:click.prevent="DeleteCategory({{ $category->id }})" style="text-decoration: none;color: black">Delete</a>
                            <i class="ti-alert btn-icon-prepend"></i>                                                    
                          </button>
                        </div>

                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>    
      </div>
    </div>
  </div>
</div>