<div class="col-lg-3 col-12">
   <div class="card mb-3">
      <div class="card-body">
         <ul class="sidebar_menu">
            <li><a class="{{ Request::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li><a class="{{ Request::is('brand*') ? 'active' : '' }}" href="{{ route('brand.index') }}">Brand</a>
            </li>
            <li><a class="{{ Request::is('category*') ? 'active' : '' }}"
                  href="{{ route('category.index') }}">Category</a></li>
            <li><a class="{{ Request::is('subcategory*') ? 'active' : '' }}" href="{{ route('subcategory.index') }}">Sub
                  Category</a></li>
            <li><a class="{{ Request::is('product*') ? 'active' : '' }}" href="#">Product</a></li>
            <li><a class="{{ Request::is('') ? 'active' : '' }}" href="#">Order List</a></li>
         </ul>
      </div>
   </div>
</div>
