<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Categories</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.category') }}">Categories</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.addcategory') }}">New Category</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <i class="icon-columns menu-icon"></i>
          <span class="menu-title">Products</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.product') }}">Products</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.addproduct') }}">New Product</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a
          class="nav-link"
          data-toggle="collapse"
          href="#charts"
          aria-expanded="false"
          aria-controls="charts"
        >
          <i class="icon-bar-graph menu-icon"></i>
          <span class="menu-title">Coupons</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.coupon') }}"
                >Coupons</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.addcoupon') }}"
                >New Coupon</a
              >
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a
          class="nav-link"
          data-toggle="collapse"
          href="#tables"
          aria-expanded="false"
          aria-controls="tables"
        >
          <i class="icon-grid-2 menu-icon"></i>
          <span class="menu-title">Orders</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a
                class="nav-link"
                href="{{ route('admin.orders') }}"
                >Orders</a
              >
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
          <i class="icon-contract menu-icon"></i>
          <span class="menu-title">Contacts</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="icons">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.contact') }}">Contacts</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
