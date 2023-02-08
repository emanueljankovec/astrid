<div class="footer_holder">
	<div class="container footer">
		<div class="footer_item footer_menu">
			<div class="footer_header">Istraži</div>
			<div class="footer_bottom">
				<a href="/">
					<div class="footer_items home">Početna</div>
				</a>
				<a href="/contact">
					<div class="footer_items contact">Kontakt</div>
				</a>
				<a href="/about_us">
					<div class="footer_items about_us">O nama</div>
				</a>
				<a href="/portfolio">
					<div class="footer_items portfolio">Portfolio</div>
				</a>
			</div>
		</div>
		<div class="footer_item">
			<div class="footer_header">Kontakt</div>
			<div class="footer_bottom">
				<div class="street_adress">Nemanjina 13, <br> 18000, Niš</div>
				<div class="email_adress">contact@astrid.com</div>
				<div class="social_icons_holder">
					<img src="{{ url('/icons/instagram.svg') }}" alt="Instagram">
					<img src="{{ url('/icons/facebook.svg') }}" alt="Facebook">
					<img src="{{ url('/icons/behance.svg') }}" alt="Behance">
					<img src="{{ url('/icons/dribbble.svg') }}" alt="Dribbble">
					<img src="{{ url('/icons/linkedin.svg') }}" alt="LinkedIn">
				</div>
			</div>
		</div>
		<div class="footer_item">
			<div class="footer_header">Tražiš posao? <span>Pridruži se!</span></div>
			<div class="footer_bottom">
				<div class="footer_items join_us">
					Imaš iskustva u poslovima kojima se bavi naša kompanija? Pridruži nam se.
				</div>
				<div class="footer_items email_hire">wearehiring@astrid.com</div>
			</div>
		</div>
		<div class="footer_item">
			<div class="footer_header information_header">Želite neke informacije u inbox?</div>
			<form class="footer_send_email_holder" action="" method="">
				<div class="email_holder field">
					<input type="email" class="email_field" placeholder="Email adresa" name="email" id='email' required />
					<label for="email" class="eamil_label">Email adresa</label>
				</div>
				<input class="btn_send" type="submit" value="Pošalji">
			</form>
		</div>
	</div>
</div>	

<div class="body_dark_overlay"></div>

<script src="{{ url("js/jquery-3.6.0.min.js") }}"></script>
<script src="{{ url("js/myscript.js") }}"></script>

</body>
</html>

