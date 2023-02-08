<div class="top_menu">
	<div class="logo">
		<img src="{{ url('/icons/logo.png') }}" alt="Astrid">
	</div>
	<div class="menu_options">
		<img class="mobile_hamburger_close" src="{{ url('icons/X.png') }}">
		<div class="menu_box home @if(Request::segment(1) == "") active @endif">
			<a href="/">
				<span class="menu_option">Početna</span>
			</a>
		</div>
		
		<div class="menu_box contact @if(Request::segment(1) == "contact") active @endif">
			<a href="/contact">
				<span class="menu_option">Kontakt</span>
			</a>
		</div>
		
		<div class="menu_box about_us @if(Request::segment(1) == "about_us") active @endif">
			<a href="/about_us">
				<span class="menu_option">O nama</span>
			</a>
		</div>
		<div class="menu_box portfolio @if(Request::segment(1) == "portfolio") active @endif">
			<a href="/portfolio">
				<span class="menu_option">Portfolio</span>
			</a>
		</div>
		<div class="language_option">SRB</div>
	</div>
	<img class="mobile_hamburger" src="{{ url('icons/hamburger.png') }}">
</div>