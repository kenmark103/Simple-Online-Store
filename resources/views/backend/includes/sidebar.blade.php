
<div class="nav-side-menu">
  <div class="brand"><i class="fa fa-home fa-lg" aria-hidden="true"></i></div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
          @include('backend.includes.search')
          
            <ul id="menu-content" class="menu-content collapse out text-white">
              <a href="{{route('admin.dashboard')}}" class="{{ Request::is('/home') ? 'active' : '' }}">
                <li class="text-white"><i class="fa fa-dashboard"></i> Admins Dashboard</li>
              </a>
              <a href="{{route('admin.products.index')}}" class="{{ Request::is('/admin/products') ? 'active' : '' }}">
                <li class="text-white"><i class="fa fa-amazon"></i> My Products</li>
              </a>
              <a href="{{route('admin.products.create')}}" class="{{ Request::is('/admin/products') ? 'active' : '' }}">
                <li class="text-white"><i class="fa fa-shopping-basket"></i> Add Item</li>
              </a>
              <a href="{{route('admin.customers')}}" class="{{ Request::is('/admin/customers') ? 'active' : '' }}">
                <li class="text-white"><i class="fa fa-user-secret"></i> Customers</li>
              </a>
              <a href="{{route('admin.orders')}}" class="{{ Request::is('/admin/orders') ? 'active' : '' }}">
                <li class="text-white"><i class="fa fa-cc"></i> Orders</li>
              </a>
            </ul>
     </div>
  </div>

