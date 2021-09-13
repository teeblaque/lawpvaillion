<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Law Firm</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="{{ route('index') }}">
						<div class="parent-icon"><i class='bx bx-user-pin' ></i>
						</div>
						<div class="menu-title">View Clients</div>
					</a>
				</li>
				<li>
					<a href="{{ route('user.store') }}">
						<div class="parent-icon"> <i class="bx bx-video-recording"></i>
						</div>
						<div class="menu-title">Create Client</div>
					</a>
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
