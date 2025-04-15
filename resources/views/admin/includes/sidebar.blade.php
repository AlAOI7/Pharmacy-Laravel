<!-- Sidebar -->
<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			
			<ul>
				<li class="menu-title"> 
					<span>الرئيسي</span>
				</li>
				<li class="{{ route_is('dashboard') ? 'active' : '' }}"> 
					<a href="{{route('dashboard')}}"><i class="fe fe-home"></i> <span>لوحة التحكم</span></a>
				</li>
				
				@can('view-category')
				<li class="{{ route_is('categories.*') ? 'active' : '' }}"> 
					<a href="{{route('categories.index')}}"><i class="fe fe-layout"></i> <span>الفئات</span></a>
				</li>
				@endcan

				@can('view-purchase')
				<li class="submenu">
					<a href="#"><i class="fe fe-star-o"></i> <span> شراء</span> <span class="fas fa-chevron-down"></span></a>
					<ul style="display: none;">
						<li><a class="{{ route_is('purchases.*') ? 'active' : '' }}" href="{{route('purchases.index')}}">شراء</a></li>
						@can('create-purchase')
						<li><a class="{{ route_is('purchases.create') ? 'active' : '' }}" href="{{route('purchases.create')}}">اضافة شراء</a></li>
						@endcan
					</ul>
				</li>
				@endcan
				
				@can('view-products')
				<li class="submenu">
					<a href="#"><i class="fe fe-document"></i> <span> المنتجات</span> <span class="fas fa-chevron-down"></span></a>
					<ul style="display: none;">
						<li><a class="{{ route_is(('products.*')) ? 'active' : '' }}" href="{{route('products.index')}}">منتجاتي</a></li>
						@can('create-product')<li><a class="{{ route_is('products.create') ? 'active' : '' }}" href="{{route('products.create')}}">اضافة منتج</a></li>@endcan
						@can('view-outstock-products')<li><a class="{{ route_is('outstock') ? 'active' : '' }}" href="{{route('outstock')}}">المخزون</a></li>@endcan
						@can('view-expired-products')<li><a class="{{ route_is('expired') ? 'active' : '' }}" href="{{route('expired')}}">منتهي الصلاحية</a></li>@endcan
					</ul>
				</li>
				@endcan
				
				
				@can('view-sales')
				<li class="submenu">
					<a href="#"><i class="fe fe-activity"></i> <span> بيع</span> <span class="fas fa-chevron-down"></span></a>
					<ul style="display: none;">
						<li><a class="{{ route_is('sales.*') ? 'active' : '' }}" href="{{route('sales.index')}}">مبيعات</a></li>
						@can('create-sale')
						<li><a class="{{ route_is('sales.create') ? 'active' : '' }}" href="{{route('sales.create')}}">اضافة مبيعات</a></li>
						@endcan
					</ul>
				</li>
				@endcan
				
				@can('view-supplier')
				<li class="submenu">
					<a href="#"><i class="fe fe-user"></i> <span> المورد</span> <span class="fas fa-chevron-down"></span></a>
					<ul style="display: none;">
						<li><a class="{{ route_is('suppliers.*') ? 'active' : '' }}" href="{{route('suppliers.index')}}">الموردون</a></li>
						@can('create-supplier')<li><a class="{{ route_is('suppliers.create') ? 'active' : '' }}" href="{{route('suppliers.create')}}">اضافة مورد</a></li>@endcan
					</ul>
				</li>
				@endcan

				@can('view-reports')
				<li class="submenu">
					<a href="#"><i class="fe fe-document"></i> <span> التقارير</span> <span class="fas fa-chevron-down"></span></a>
					<ul style="display: none;">
						<li><a class="{{ route_is('sales.report') ? 'active' : '' }}" href="{{route('sales.report')}}">تقرير البيع</a></li>
						<li><a class="{{ route_is('purchases.report') ? 'active' : '' }}" href="{{route('purchases.report')}}">تقرير الشراء</a></li>
					</ul>
				</li>
				@endcan

				@can('view-access-control')
				<li class="submenu">
					<a href="#"><i class="fe fe-lock"></i> <span> التحكم في الوصول</span> <span class="fas fa-chevron-down"></span></a>
					<ul style="display: none;">
						@can('view-permission')
						<li><a class="{{ route_is('permissions.index') ? 'active' : '' }}" href="{{route('permissions.index')}}">الاذونات</a></li>
						@endcan
						@can('view-role')
						<li><a class="{{ route_is('roles.*') ? 'active' : '' }}" href="{{route('roles.index')}}">الادوار</a></li>
						@endcan
					</ul>
				</li>					
				@endcan

				@can('view-users')
				<li class="{{ route_is('users.*') ? 'active' : '' }}"> 
					<a href="{{route('users.index')}}"><i class="fe fe-users"></i> <span>المستخدمين</span></a>
				</li>
				@endcan
				
				<li class="{{ route_is('profile') ? 'active' : '' }}"> 
					<a href="{{route('profile')}}"><i class="fe fe-user-plus"></i> <span>الملف الشخصي</span></a>
				</li>
				<li class="{{ route_is('backup.index') ? 'active' : '' }}"> 
					<a href="{{route('backup.index')}}"><i class="material-icons">النسخة الاحتياطية</i></a>
				</li>
				@can('view-settings')
				<li class="{{ route_is('settings') ? 'active' : '' }}"> 
					<a href="{{route('settings')}}">
						<i class="material-icons">الاعدادات</i>
					
					</a>
				</li>
				@endcan
			</ul>
		</div>
	</div>
</div><!-- Visit codeastro.com for more projects -->
<!-- /Sidebar -->