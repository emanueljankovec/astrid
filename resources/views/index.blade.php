@section('css')
	<link rel="stylesheet" type="text/css" href="{{ url('css/index.css') }}">
@endsection

@include('parts/header')
@include('parts/top_menu')
<div class="container home_page">
    <div class="home_top_section">
        <div class="home_left">
            <div class="home_header">Kreirajmo <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; nešto upečatljivo!</div>
            <div class="home_description">Zajedno možemo mnogo toga. <br> Budimo tim koji pobeđuje. Sve na jednom mestu. <br> Vaše ideje biće sprovedene onako kako ste zamislili. <br> U samo par koraka počinjemo!</div>
            <div class="orange_bar"></div>
        </div>
        <div class="home_right">
            <div class="home_imac">
                <img src="{{ url('/icons/iMac.png') }}" alt="iMac">
                <div class="home_imac_ellipse"></div>
            </div>
        </div>
    </div>
    <div class="home_quote_holder">
        
        <div class="home_quote_text">
            <img class="home_quote_img_up" src="{{ url('img/quote-gornja.png') }}">
            Uspeh nije konačan; neuspeh nije fatalan: važna je hrabrost za nastavak.
            <img class="home_quote_img_down" src="{{ url('img/quote-donja.png') }}">
        </div>
        
        <div class="home_quote_autor">
            -Winston Churchill
        </div>
    </div>
    <div class="home_learn_more_holder">
        <div class="home_mobile_image">
            <img src="{{ url('/icons/iPad.png') }}" alt="">
        </div>
        {{-- <div class="home_pluses_holder">
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
        </div> --}}
        <img class="pluses-img" src="{{ url('img/plusevi.png') }}">
        <div class="home_learn_more_description_holder">
            <div class="home_learn_more_title">
                Dizajniramo zajedno!
            </div>
            <div class="home_learn_more_description">
                Proces je jako jednostavan i cela ideja jeste da Vi <br> budete zadovoljni krajnjim proizvodom.
            </div>
            <button class="home_learn_more_btn">Saznajte više</button>
        </div>
    </div>
    <div class="home_astrid_solutions_holder">
        <img src="{{url('/icons/logo_gray.png')}}" alt="Astrid Logo">
        <div class="home_astrid_solutions_text">Astrid Solutions</div>
        <div class="vertical-line">|</div>
        <div class="home_astrid_solutions_text">We do IT.</div>
    </div>
    <div class="home_offers_holder">
        <div class="home_offers_title">Vaš biznis. <span>Vaša odluka</span></div>
        <div class="home_offers_cards_holder">
            <div class="home_offers_card">
                <img src="{{url('/icons/branding.png')}}" alt="Branding">
                <div class="home_offers_bottom_holder">
                    <div class="home_offers_bottom">
                        <div class="home_offers_card_title">Logo dizajn <span>&</span> branding</div>
                        <div class="home_offers_card_description">Pravimo nešto sasvim unikatno za vaš brend što će vas staviti u poziciju da budete prepoznatljivi.</div>
                    </div>
                    <span class="home_offers_card_btn">Pročitaj više <img class="orange-arrow" src="{{ url('/img/orange-arrow.png') }}"></span>
                </div>
            </div>
            <div class="home_offers_card">
                <img src="{{url('/icons/devices.png')}}" alt="Devices">
                <div class="home_offers_bottom_holder">
                    <div class="home_offers_bottom">
                        <div class="home_offers_card_title">Izrada <span>&</span> dizajn web sajta</div>
                        <div class="home_offers_card_description">Pristupačnost vašem brendu će biti lakše vašim potrošačima i moći će da na jedinstvenoj adresi nađu baš vaše proizvode.</div>
                    </div>
                    <span class="home_offers_card_btn">Pročitaj više <img class="orange-arrow" src="{{ url('/img/orange-arrow.png') }}"></span>
                </div>
            </div>
            <div class="home_offers_card">
                <img src="{{url('/icons/support.png')}}" alt="Support">
                <div class="home_offers_bottom_holder">
                    <div class="home_offers_bottom">
                        <div class="home_offers_card_title">Održavanje sistema</div>
                        <div class="home_offers_card_description">Kako bi vaši klijenti ili potrošači mogli stalno da pristupaju sadržaju mi ćemo Vam i to omogućiti.</div>
                    </div>
                    <span class="home_offers_card_btn">Pročitaj više <img class="orange-arrow" src="{{ url('/img/orange-arrow.png') }}"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="home_right_text">
    <span>D</span>
    <span>I</span>
    <span>R</span>
    <span>T</span>
    <span>S</span>
    <span>A</span>
</div>
@include('parts.footer')