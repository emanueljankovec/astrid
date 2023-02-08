@section('css')
	<link rel="stylesheet" type="text/css" href="{{ url('css/about_us.css') }}">
@endsection

@include('parts.header')
@include('parts.top_menu')

	<div class="container about-us-page">
		<div class="who-we-are-row">
			<div class="who-we-are-text">
				<div class="who-we-are-text-header">
					Ko smo mi?
					<div class="orange-bar"></div>
				</div>

				<div class="who-we-are-text-description">
					<span>Astrid Solutions</span> je nastao 2021. godine u Nišu kao projekat i dvojice mladih IT stručnjaka. Nastao je u cilju da se što jednostavnije,a što bolje,unikatnije i upečatljivije stvori brend na bilo kom tržištu. Brend je nešto po čemu trebate biti prepoznatljivi i tu smo da vam u tome što više pomognemo.Profesionalizam je kod nas zagarantovan i kroz praksu se to i pokazalo. Praćenje procesa od strane klijenta nam je jako važno i deo je celokupnog procesa,da bi krajnje rešenje i proizvod bio što kvalitetniji. Na kraju nam je najbitnije da je klijent zadovoljan.
				</div>
			</div>

			<img src="{{ url("img/logo_big.png") }}" class="who-we-are-image">
		</div>

		<div class="we-do-it">
			#We do IT.
		</div>

		<div class="staff-row">
			<div class="nenad">
				<div class="nenad-img">
					<img src="{{ url("img/nenad.png") }}">
				</div>
				<div class="nenad-header-text">
					<div class="nenad-name">Nenad Nikolov</div>
					<div class="nenad-profession">grafički dizajner</div>

					<div class="nenad-description">
						Odgovoran za vizualni identitet svakog projekta.Uvek spreman za saradnju i dogovor.Radujem se svakom novom zadatku!
					</div>

					<div class="nenad-hashtags">
						#graficdesigner #openforwork #astriddesgner #haveaquestion
					</div>

					<img src="/icons/logo.png" class="nenad-logo">

				</div>
			</div>

			<div class="staff-office">
				<img src="{{ url("/img/staff1.png") }}">
			</div>
		</div>
	</div>

@include('parts.footer')
