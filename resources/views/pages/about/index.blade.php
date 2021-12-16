@extends('layouts.master')

@section('title', __('About us'))

@section('content')
    <main class="about-page">
        <section class="vitrin">
            <img class="vitrin-img" src="{{asset('img/about-vitrin-bg.jpg')}}">
            <div class="container vitrin-container">
                <div class="vitrin-left">
                    <h1 class="vitrin-title">{{__('About us')}}</h1>
                    <p class="vitrin__text">
                        {{__('To achieve our goals in the field of healthcare, we work together with representatives of large pharmacy chains and medical structures from different countries.')}}
                    </p>
                    <div class="vitrin__link-wrap">
                        <a class="button vitrin__link" href="{{route('contacts')}}#cooperation">{{__('Cooperate with us')}}</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-history" id="history">
            <div class="container">
                <h2 class="our-history-title">{{__('Our history')}}</h2>
                <ul class="histories" data-family="history">
                    @foreach ($histories as $key => $history)
                        <li class="histories__item" data-row="" data-family="history">
                            <h3 class="histories__title" data-family="history">
                                {{$history->title}}
                                <span class="histories__year" data-family="history">{{$history->year}}</span>
                            </h3>
                            <div class="histories__inner" data-family="history">
                                <p class="histories__text" data-family="history">{{$history->text}}</p>
                                <button class="histories__button" type="button" data-family="history">
                                    {{__('Learn more')}}
                                    <svg data-family="history" xmlns="http://www.w3.org/2000/svg" width="4" height="8.182" viewBox="0 0 4 8.182"><path data-family="history" id="Expand_More" d="M7.477.108,4.091,3.115.7.107a.45.45,0,0,0-.584,0,.339.339,0,0,0,0,.519L3.8,3.893h0a.45.45,0,0,0,.584,0L8.061.626a.339.339,0,0,0,0-.519A.45.45,0,0,0,7.477.108Z" transform="translate(0 8.182) rotate(-90)" fill="#8f8f8f"/></svg>
                                </button>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <button class="our-history__view-all-btn" type="button" data-family="history">
                    <span class="our-history__view-all-text" data-family="history">
                        {!!__('View all <br> <b>Years</b>')!!}
                    </span>
                    <span class="our-history__view-all-icon" data-family="history">
                        <svg data-family="history" xmlns="http://www.w3.org/2000/svg" width="20.008" height="9.782" viewBox="0 0 20.008 9.782"><path data-family="history" id="Expand_More" d="M18.286.264,10,7.617,1.724.263A1.1,1.1,0,0,0,.3.263a.829.829,0,0,0,0,1.269L9.29,9.519h0a1.1,1.1,0,0,0,1.427,0l8.995-7.987a.83.83,0,0,0,0-1.27A1.1,1.1,0,0,0,18.286.264Z" transform="translate(0)" fill="#fff"/></svg>
                    </span>
                </button>
            </div>
        </section>
        <section class="present-time">
            <div class="container present-time__container">
                <h2 class="present-time__title">{{__('Present time')}}</h2>
                <b class="present-time__notation">{{__('SPEY is an international pharmaceutical company founded in 2001')}}.</b>
                <p>{{__('Our company is engaged in the development and marketing of high-quality and innovative pharmaceutical products for the needs of a wide range of therapeutic areas. All products are manufactured at production facilities equipped with advanced technology and approved by the world quality standards of the World Health Organization (WHO) and Good Manufacturing Practice (GMP)')}}.</p><br>
                <p>{{__('In a short period of time, SPEY has become one of the most dynamically developing global pharmaceutical companies, with business connections in more than 20 countries around the world. Among them: Russia, Armenia, Azerbaijan, Georgia, CIS countries (Kazakhstan, Tajikistan, Uzbekistan, Turkmenistan and Kyrgyzstan), India, Nepal, Mongolia, Southeast Asian countries (Philippines, Vietnam, Cambodia, Myanmar) and markets in Africa and Latin America')}}.</p><br>
                <p>{{__("In today's society, SPEY strives to improve the quality of life of people with effective and affordable medicines. We are sure that successful projects are born from good ideas and their high-quality execution together with great talent")}}.</p>
            </div>
        </section>
        <section class="company-in-numbers">
            <div class="container">
                <h2 class="company-numbers__title">{{__('Company in numbers')}}</h2>
                <div class="company-carousel-wrap">
                    <div class="owl-carousel company-carousel">
                        <div class="company-numbers-item">
                            <span class="company-numbers-value">50 000</span>
                            <h3 class="company-numbers-title">{{__('medications')}}</h3>
                            <p class="company-numbers-text">
                                {{__('Such a number of our products are produced annually on the production lines of our partners, and this figure continues to grow.')}}
                            </p>
                        </div>
                        <div class="company-numbers-item">
                            <span class="company-numbers-value">450</span>
                            <h3 class="company-numbers-title">{{__('employees')}}</h3>
                            <p class="company-numbers-text">
                                {{__('Our main asset is our close-knit team of medical representatives, distributors and marketing and sales specialists.')}}
                            </p>
                        </div>
                        <div class="company-numbers-item">
                            <span class="company-numbers-value">300</span>
                            <h3 class="company-numbers-title">{{__('items')}}</h3>
                            <p class="company-numbers-text">
                                {{__('We have already produced more than 300 well-established registered names of drugs on the market.')}}
                            </p>
                        </div>
                        <div class="company-numbers-item">
                            <span class="company-numbers-value">15</span>
                            <h3 class="company-numbers-title">{{__('branches')}}</h3>
                            <p class="company-numbers-text">
                                {{__("The company's work around the world is supported by 15 of our branches-representative offices, which allows us to ensure uninterrupted supply of the necessary volumes of medicines.")}}
                            </p>
                        </div>
                        <div class="company-numbers-item">
                            <span class="company-numbers-value">20</span>
                            <h3 class="company-numbers-title">{{__('countries of presence')}}</h3>
                            <p class="company-numbers-text">
                                {{__('Large regular deliveries of SPEY products are carried out in 5 regions of the world, such as Europe, Africa, Latin America, Southeast Asia and Central Asia.')}}
                            </p>
                        </div>
                    </div>
                    <span class="company-carousel__icon company-carousel__prev-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14.525" viewBox="0 0 8 14.525"><g id="download" transform="translate(0 14.525) rotate(-90)"><path id="Expand_More" d="M13.276.216,7.263,6.229,1.251.215A.733.733,0,0,0,.214,1.253l6.53,6.532h0a.732.732,0,0,0,1.036,0l6.53-6.532A.733.733,0,1,0,13.276.216Z" fill="#fff"/></g></svg>
                    </span>
                    <span class="company-carousel__icon company-carousel__next-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14.525" viewBox="0 0 8 14.525"><g id="download" transform="translate(0 14.525) rotate(-90)"><path id="Expand_More" d="M13.276.216,7.263,6.229,1.251.215A.733.733,0,0,0,.214,1.253l6.53,6.532h0a.732.732,0,0,0,1.036,0l6.53-6.532A.733.733,0,1,0,13.276.216Z" fill="#fff"/></g></svg>
                    </span>
                </div>
                <ul class="mission-vision">
                    <li class="mission-vision-item">
                        <div class="mission-vision-content">
                            <h3 class="mission-vision-title">{{__('Our mission')}}</h3>
                            <p class="mission-vision-text">
                                {{__('To contribute to improving the health and well-being of people.')}}
                            </p>
                        </div>
                    </li>
                    <li class="mission-vision-item">
                        <div class="mission-vision-content">
                            <h3 class="mission-vision-title">{{__('Our vision')}}</h3>
                            <p class="mission-vision-text">
                                {{__('To be a leading company, recognized for quality and innovation.')}}
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="about-page-values">
            <div class="container">
                <h2 class="about-page-values__title">{{__('Our values')}}</h2>
                <div class="owl-carousel values-carousel">
                    <div class="values-item">
                        <h3 class="values-title">{{__('Life')}}</h3>
                        <p class="values-text">{{__('We recognize life as a gift that needs to be cherished.')}}</p>
                    </div>
                    <div class="values-item">
                        <h3 class="values-title">{{__('Creation')}}</h3>
                        <p class="values-text">{{__('We are discovering new facets of the possible.')}}</p>
                    </div>
                    <div class="values-item">
                        <h3 class="values-title">{{__('Responsibility')}}</h3>
                        <p class="values-text">{{__('We are responsible for the well-being of society.')}}</p>
                    </div>
                    <div class="values-item">
                        <h3 class="values-title">{{__('Team spirit')}}</h3>
                        <p class="values-text">{{__('We are united and achieve our goals.')}}</p>
                    </div>
                    <div class="values-item">
                        <h3 class="values-title">{{__('Professionalism')}}</h3>
                        <p class="values-text">{{__('We show a high level of working skills.')}}</p>
                    </div>
                    <div class="values-item">
                        <h3 class="values-title">{{__('Relationship')}}</h3>
                        <p class="values-text">{{__("We value everyone's opinion.")}}</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="rdp-areas">
            <div class="container">
                <h2 class="rdp-areas__heading">{{__('Research, development and production areas')}}</h2>
                <div class="rdp-areas-carousel__wrap">
                    <div class="owl-carousel rdp-areas-carousel">
                        <img class="rdp-areas-carousel__img" src="{{asset('img/rdp-areas.jpg')}}">
                        <img class="rdp-areas-carousel__img" src="{{asset('img/rdp-areas.jpg')}}">
                        <img class="rdp-areas-carousel__img" src="{{asset('img/rdp-areas.jpg')}}">
                    </div>
                    <span class="more-icon rdp-areas-carousel__prev-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14.525" viewBox="0 0 8 14.525"><g id="download" transform="translate(0 14.525) rotate(-90)"><path id="Expand_More" d="M13.276.216,7.263,6.229,1.251.215A.733.733,0,0,0,.214,1.253l6.53,6.532h0a.732.732,0,0,0,1.036,0l6.53-6.532A.733.733,0,1,0,13.276.216Z" fill="#fff"/></g></svg>
                    </span>
                    <span class="more-icon rdp-areas-carousel__next-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14.525" viewBox="0 0 8 14.525"><g id="download" transform="translate(0 14.525) rotate(-90)"><path id="Expand_More" d="M13.276.216,7.263,6.229,1.251.215A.733.733,0,0,0,.214,1.253l6.53,6.532h0a.732.732,0,0,0,1.036,0l6.53-6.532A.733.733,0,1,0,13.276.216Z" fill="#fff"/></g></svg>
                    </span>
                </div>
                <p>{{__('In the pharmaceutical industry, it is always important to move forward - this is what the employees of our research centers in different countries are doing.')}}</p><br>
                <p>{{__('Specialists in the creation of new dosage forms have modern equipment and high-precision analytical devices at their disposal. SPEY already has many achievements in the pharmaceutical industry, and drug development continues.')}}</p><br>
                <h2 class="rdp-areas__title">{{__('Today, the company is developing more than 30 new drugs in various dosage forms.')}}</h2><br>
                <p>{{__('The creative approach is based on the work of scientists and excellent equipment of laboratories - this is how we create new products and move the entire healthcare industry forward. All types of research are available to us, from research in the field of analytical chemistry to the evaluation of the final product on focus groups of patients.')}}</p><br>
                <p>{{__('We pay great attention to the issue of the production of drugs and choose the most modern production sites, which are located in several European countries, proven by time and quality control system. All of them work together with research centers and are equipped according to the standards of the World Health Organization and Good Manufacturing Practice.')}}</p><br>
                <p>{{__('These production sites are serviced by qualified employees - they are responsible for the production of really effective dosage forms. The production sites of our partners are constantly being improved, modern technological processes are being introduced on them. Quality audits are also regularly conducted, in which representatives of partner companies from different countries and state regulatory authorities take part.')}}</p>
            </div>
        </section>
        <section class="geography-presence" id="geography">
            <div class="container">
                <h2 class="geography-presence__title" id="geography-presence">{{__('Geography of presence')}}</h2>
            </div>
            <div class="map-wrap">
                {!!$siteMap!!}
            </div>
            <div class="geography-container">
                <ul class="geography-countries">
                    @foreach ($speySites as $site)
                        <li class="countries-item">
                            <a class="countries-link {{$siteID == $site->id ? 'current' : ''}}" href="{{route('about')}}?site={{$site->id}}#geography-presence">{{$site->location}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </main>
@endsection