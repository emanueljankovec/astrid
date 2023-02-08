@section('css')
	<link rel="stylesheet" type="text/css" href="{{ url('css/contact.css') }}">
@endsection

@include('parts.header')
@include('parts.top_menu')

<div class="container contact-page">
	<div class="contact-text-row">
		<div class="blue-circle desktop">
			<div class="orange-circle">
				<div class="red-circle">
					<div class="white-circle"></div>
				</div>
			</div>
			<div class="orange-bar"></div>
		</div>

		<div class="contact-info">
			<div class="contact-info-header">
				<div class="blue-circle mobile">
					<div class="orange-circle">
						<div class="red-circle">
							<div class="white-circle"></div>
						</div>
					</div>
					<div class="orange-bar"></div>
				</div>
				<div>Budimo <span class="new-line"></span>u kontaktu!</div>
			</div>

			<div class="contact-info-message">
				Najbitniji deo izrade u nekom projektu jeste komunikacija koju klijent treba imati sa nama. <span>Zašto?</span> Lako je. Upravo tako je moguće da pratite kako napreduje vaš projekat,kako ga možemo unaprediti a naravno sve u cilju izrade najboljeg i unikatnog rešenja.
			</div>

			<div class="contact-info-details">
				<div class="contact-info-details-address">
					Nemanjina 13 , 18000 , Niš
					
				</div>
				<div class="vertical-line">|</div>
				<div class="contact-info-details-phone">+381 60/0420-958</div>
			</div>
		</div>
	</div>

	<div class="contact-form-row">
		<div class="gray-logo-mobile">
			<img src="{{ url('icons/logo_gray.png') }}">
			<span>Astrid Solutions</span>
		</div>

		<form action="" class="contact-form" name="contact" method="POST">
			<input type="text" name="email" placeholder="Vaš e-mail">
			<input type="text" name="topic" placeholder="Tema">
			<textarea  type="textarea" name="topic_description" placeholder="Vaša poruka" rows="10"></textarea>

			<button type="submit">Pošalji</button>
		</form>

		<div class="contact-form-image-holder">
			<img src="{{ url('/img/pencil.png') }}" class="contact-form-image">
			<div class="pluses-holder">
				<div class="pluses-row">
					<div class="plus">+</div>
					<div class="plus">+</div>
					<div class="plus">+</div>
					<div class="plus">+</div>
					<div class="plus">+</div>
				</div>
				<div class="pluses-row">
					<div class="plus">+</div>
					<div class="plus">+</div>
					<div class="plus">+</div>
					<div class="plus">+</div>
					<div class="plus">+</div>
				</div>
				<div class="pluses-row">
					<div class="plus">+</div>
					<div class="plus">+</div>
					<div class="plus">+</div>
					<div class="plus">+</div>
					<div class="plus">+</div>
				</div>
				<div class="pluses-row">
					<div class="plus">+</div>
					<div class="plus">+</div>
					<div class="plus">+</div>
					<div class="plus">+</div>
					<div class="plus">+</div>
				</div>
				<div class="pluses-row">
					<div class="plus">+</div>
					<div class="plus">+</div>
					<div class="plus">+</div>
					<div class="plus">+</div>
					<div class="plus">+</div>
				</div>
			</div>
		</div>
	</div>
</div>

@include('parts.footer')