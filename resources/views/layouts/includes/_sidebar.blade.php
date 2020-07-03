<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="#" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						@if(auth()->user()->role == 'admin')
						<li><a href="/admin/profile" class=""><i class="lnr lnr-user"></i><span>Profile</span></a></li>
						<li><a href="/admin" class=""><i class="lnr lnr-users"></i> <span>List Member</span></a></li>
						<li><a href="/posts" class=""><i class="lnr lnr-tag"></i><span>Event</span></a></li>
						<!-- <li><a href="#" class=""><i class="lnr lnr-bookmark"></i><span>Bookmarks</span></a></li> -->
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Footer</a></li>
								</ul>
							</div>
						</li>
						
						@endif

						@if(auth()->user()->role == 'member')
						<li><a href="/member/profile" class=""><i class="lnr lnr-user"></i><span>Profile</span></a></li>
						<li><a href="member/dataMember" class=""><i class="lnr lnr-users"></i><span>List Member</span></a></li>
						<li><a href="#" class=""><i class="lnr lnr-tag"></i><span>Event</span></a></li>
						<!-- <li><a href="#" class=""><i class="lnr lnr-bookmark"></i><span>Bookmarks</span></a></li>
						<li><a href="#" class=""><i class="lnr lnr-cog"></i> <span>Pengaturan</span></a></li> -->
						@endif

						<!-- <li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Panels</span></a></li>
						<li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
									<li><a href="page-login.html" class="">Login</a></li>
									<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li>
						<li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						<li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
						<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li> -->
					</ul>
				</nav>
			</div>
		</div>