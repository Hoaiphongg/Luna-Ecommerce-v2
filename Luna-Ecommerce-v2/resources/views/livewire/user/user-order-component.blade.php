<div class="container page-body-wrapper">

      <div class="content-wrapper">
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">My Order</h4>
                <div class="table-responsive">
                  @if ( Session::has('message'))
                    <div class="alert alert-danger">{{ Session::get('message') }}</div>
                  @endif
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Discount</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ( $orders as $order)
                      <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->discount }}</td>
                        <td>{{ $order->total }}</td>
                        <td>{{ $order->status}}</td>
                        <td>{{ $order->created_at }}</td>
                        <td>
  
                          <div class="template-demo mt-2">
                            <button type="button" class="btn btn-secondary btn-icon-text">
                              <a href="{{ route('user.orderdetail',['order_id'=>$order->id]) }}" style="text-decoration: none; color: black">Detail</a>
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
