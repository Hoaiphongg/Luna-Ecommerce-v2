<div class="container-fluid page-body-wrapper">
    @livewire('admin.left-navbar-component')
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
            
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Orders Management</h4>
                <div class="table-responsive">
                  @if ( Session::has('message'))
                    <div class="alert alert-danger">{{ Session::get('message') }}</div>
                  @endif
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Subtotal</th>
                        <th>Discount</th>
                        <th>Tax</th>
                        <th>Total</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Zip Code</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ( $orders as $order)
                      <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->subtotal }}</td>
                        <td>{{ $order->discount }}</td>
                        <td>{{ $order->tax }}</td>
                        <td>{{ $order->total }}</td>
                        <td>{{ $order->firstname}}</td>
                        <td>{{ $order->lastname }}</td>
                        <td>{{ $order->mobile }}</td>
                        <td>{{ $order->email }}</td>
                        <td>{{ $order->zipcode }}</td>
                        <td>{{ $order->status}}</td>
                        <td>{{ $order->created_at }}</td>
                        <td>
  
                          <div class="template-demo mt-2">
                            <button type="button" class="btn btn-secondary btn-icon-text">
                              <a href="{{ route('admin.orderdetail',['order_id'=>$order->id]) }}" style="text-decoration: none; color: black">Detail</a>
                              <i class="ti-file btn-icon-append"></i>                          
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