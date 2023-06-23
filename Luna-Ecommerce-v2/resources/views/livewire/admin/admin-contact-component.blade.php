<div class="container-fluid page-body-wrapper">
    @livewire('admin.left-navbar-component')
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
            
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Contacts Management</h4>
                <div class="table-responsive">
                  @if ( Session::has('message'))
                    <div class="alert alert-danger">{{ Session::get('message') }}</div>
                  @endif
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Comment</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ( $contacts as $contact)
                      <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->content }}</td>
                        <td>{{ $contact->created_at }}</td>
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