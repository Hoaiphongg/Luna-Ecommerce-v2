<div class="container-fluid page-body-wrapper">
    @livewire('admin.left-navbar-component')
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
            
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Coupons Management</h4>
                <div class="table-responsive">
                  @if ( Session::has('message'))
                    <div class="alert alert-danger">{{ Session::get('message') }}</div>
                  @endif
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Coupon Code</th>
                        <th>Coupon Type</th>
                        <th>Coupon Value</th>
                        <th>Coupon Cart Value</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ( $coupons as $coupon)
                      <tr>
                        <td>{{ $coupon->id }}</td>
                        <td>{{ $coupon->code }}</td>
                        <td>{{ $coupon->type }}</td>
                        @if($coupon->type == 'fixed')
                            <td>%{{ $coupon->value }}</td>
                        @else
                            <td>{{ $coupon->value }}%</td>
                        @endif
                        <td>{{ $coupon->cart_value }}</td>
                        <td>
  
                          <div class="template-demo mt-2">
                            <button type="button" class="btn btn-secondary btn-icon-text">
                              <a href="{{ route('admin.editcoupon',['coupon_id'=>$coupon->id]) }}" style="text-decoration: none; color: black">Edit</a>
                              <i class="ti-file btn-icon-append"></i>                          
                            </button>
                            <button type="button" class="btn btn-success btn-icon-text">
                              <a href="#" wire:click.prevent="DeleteCoupon({{ $coupon->id }})" style="text-decoration: none;color: black">Delete</a>
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