<div>
    <div class="container page-body-wrapper">
      <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    @if (Session::has('password_success'))
                        <div class="alter alter-success">
                            <strong>Success</strong> {{ Session::get('password_success') }}
                        </div>
                    @endif
                    @if (Session::has('password_error'))
                        <div class="alter alter-danger">
                            <strong>Success</strong> {{ Session::get('password_error') }}
                        </div>
                    @endif
                  <div class="card-body">
                    <h4 class="card-title">Change Password</h4>
                    <form class="forms-sample" wire:submit.prevent="changePassword">
                      <div class="form-group row">
                        <label
                          for="exampleInputPassword2"
                          class="col-sm-3 col-form-label"
                          >Current Password</label
                        >
                        <div class="col-sm-9">
                          <input
                            type="password"
                            class="form-control"
                            id="exampleInputPassword2"
                            placeholder="Current Password"
                            wire:model="currentPassword"
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label
                          for="exampleInputPassword2"
                          class="col-sm-3 col-form-label"
                          >New Password</label
                        >
                        <div class="col-sm-9">
                          <input
                            type="password"
                            class="form-control"
                            id="exampleInputPassword2"
                            placeholder="New Password"
                            wire:model="newPassword"
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label
                          for="exampleInputConfirmPassword2"
                          class="col-sm-3 col-form-label"
                          >Confirm Password</label
                        >
                        <div class="col-sm-9">
                          <input
                            type="password"
                            class="form-control"
                            id="exampleInputConfirmPassword2"
                            placeholder="Confirm Password"
                            wire:model="confirmPassword"
                          />
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">
                        Submit
                      </button>
                    </form>
                  </div>
                </div>
              </div>
        </div>
      </div>
</div>
</div>
