<div class="container-fluid page-body-wrapper">
    @livewire('admin.left-navbar-component')
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Adding New Coupon</h4>
                    @if ( Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif
                    <form class="forms-sample" wire:submit.prevent="storeCoupon">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Coupon Code</label>
                        <input
                          type="text"
                          class="form-control"
                          id="exampleInputUsername1"
                          placeholder="Input Coupon Code"
                          wire:model="code"
                        />
                      </div>

                      <div class="form-group">
                        <label for="exampleSelectGender">Coupon Type</label>
                        <select class="form-control" id="exampleSelectGender" wire:model="type">
                          <option value="fixed">Fixed</option>
                          <option value="percent">Percent</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Coupon Value</label>
                        <input
                          type="text"
                          class="form-control"
                          id="exampleInputEmail1"
                          placeholder="Value"
                          wire:model="value"
                        />
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Coupon Cart Value</label>
                        <input
                          type="text"
                          class="form-control"
                          id="exampleInputEmail1"
                          placeholder="Cart Value"
                          wire:model="cart_value"
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