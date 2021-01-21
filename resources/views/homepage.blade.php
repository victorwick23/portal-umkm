@extends('layouts.hometemplate')

@section('content')
<div class="row container-hero container-wrap-body">
    <div class="col-xl-6">
        <div class="">
            <p class="text-title-hero">Selamat Datang di Portal UMKM</p>
            <p class="text-sub-hero">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut scelerisque gravida
                tellus quis placerat.</p>
        </div>
    </div>
    <div class="col-xl-6">
        <div>
            <img class="img img-fluid" src="{{asset('images/illustration.png')}}" alt="">
        </div>
    </div>
</div>

<div style="margin-top: 84px;">
    <div class="row container-wrap-body container-body " style="background: #fcfcfc;">
        <div class="col-xl-9">
            <div>
                <p class="txt-title-section">Berita Terbaru</p>
                <div class="line-underline"></div>
            </div>
            <div class="card-article">
                <div>
                    <img class="img img-fluid img-news" src="{{asset('images/img-news-1.jpg')}}" alt="">
                    <div class="box-text-news">
                        <p class="txt-title-news">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut scelerisque
                            gravida tellus quis placerat.</p>
                        <div class="row container-time-created">
                            <img class="img img-fluid icon-clock" src="{{asset('images/clock.png')}}" alt="">
                            <p class="txt-time-news">Senin, 20 Januari 2020 | 13.00 WIB</p>
                        </div>
                    </div>
                    <div class="container-content-news">
                        <p class="txt-content-news">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in
                            voluptate velit esse c..</p>
                        <div class="offset-xl-9 ">
                            <a href="">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <p class="txt-see-news">Selanjutnya</p>
                                    </div>
                                    <div class="col-xl-3"><img class="img img-fluid" src="{{asset('images/right1.png')}}"
                                            alt=""></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-article">
                <div>
                    <img class="img img-fluid img-news" src="{{asset('images/img-news-2.jpg')}}" alt="">
                    <div class="box-text-news">
                        <p class="txt-title-news">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut scelerisque
                            gravida tellus quis placerat.</p>
                        <div class="row container-time-created">
                            <img class="img img-fluid icon-clock" src="{{asset('images/clock.png')}}" alt="">
                            <p class="txt-time-news">Senin, 20 Januari 2020 | 13.00 WIB</p>
                        </div>
                    </div>
                    <div class="container-content-news">
                        <p class="txt-content-news">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in
                            voluptate velit esse c..</p>
                        <div class="offset-xl-9 ">
                            <a href="">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <p class="txt-see-news">Selanjutnya</p>
                                    </div>
                                    <div class="col-xl-3"><img class="img img-fluid" src="{{asset('images/right1.png')}}"
                                            alt=""></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-article">
                <div>
                    <img class="img img-fluid img-news" src="{{asset('images/img-news-3.jpg')}}" alt="">
                    <div class="box-text-news">
                        <p class="txt-title-news">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut scelerisque
                            gravida tellus quis placerat.</p>
                        <div class="row container-time-created">
                            <img class="img img-fluid icon-clock" src="{{asset('images/clock.png')}}" alt="">
                            <p class="txt-time-news">Senin, 20 Januari 2020 | 13.00 WIB</p>
                        </div>
                    </div>
                    <div class="container-content-news">
                        <p class="txt-content-news">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in
                            voluptate velit esse c..</p>
                        <div class="offset-xl-9 ">
                            <a href="">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <p class="txt-see-news">Selanjutnya</p>
                                    </div>
                                    <div class="col-xl-3"><img class="img img-fluid" src="{{asset('images/right1.png')}}"
                                            alt=""></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="col-xl-3">
            <div>
                <p class="txt-section-best-news">Berita Pilihan</p>
                <div style="border-bottom: 3px solid #5465FF;width: 96px;"></div>
            </div>
            <div class="card-news-best">
                <div class="row container-list-news">
                    <div class="col-xl-4" style="padding-left: 0px;padding-right: 0px;"><img class="img img-fluid"
                            src="{{asset('images/img-square2.jpg')}}" alt=""></div>
                    <div class="col-xl-8">
                        <p class="txt-title-bestnews"> Lorem ipsum dolor sit amet, conse....</p>
                    </div>
                </div>
                <div class="row container-list-news">
                    <div class="col-xl-4" style="padding-left: 0px;padding-right: 0px;"><img class="img img-fluid"
                            src="{{asset('images/img-square3.jpg')}}" alt=""></div>
                    <div class="col-xl-8">
                        <p class="txt-title-bestnews"> Lorem ipsum dolor sit amet, conse....</p>
                    </div>
                </div>
                <div class="row container-list-news">
                    <div class="col-xl-4" style="padding-left: 0px;padding-right: 0px;"><img class="img img-fluid"
                            src="{{asset('images/img-square1.jpg')}}" alt=""></div>
                    <div class="col-xl-8">
                        <p class="txt-title-bestnews"> Lorem ipsum dolor sit amet, conse....</p>
                    </div>
                </div>
                <div class="row container-list-news">
                    <div class="col-xl-4" style="padding-left: 0px;padding-right: 0px;"><img class="img img-fluid"
                            src="{{asset('images/img-square.jpg')}}" alt=""></div>
                    <div class="col-xl-8">
                        <p class="txt-title-bestnews"> Lorem ipsum dolor sit amet, conse....</p>
                    </div>
                </div>
                <div class="row container-list-news">
                    <div class="col-xl-4" style="padding-left: 0px;padding-right: 0px;"><img class="img img-fluid"
                            src="{{asset('images/img-square1.jpg')}}" alt=""></div>
                    <div class="col-xl-8">
                        <p class="txt-title-bestnews"> Lorem ipsum dolor sit amet, conse....</p>
                    </div>
                </div>
                <div class="row container-list-news">
                    <div class="col-xl-4" style="padding-left: 0px;padding-right: 0px;"><img class="img img-fluid"
                            src="{{asset('images/img-square2.jpg')}}" alt=""></div>
                    <div class="col-xl-8">
                        <p class="txt-title-bestnews"> Lorem ipsum dolor sit amet, conse....</p>
                    </div>
                </div>
                <div class="row container-list-news">
                    <div class="col-xl-4" style="padding-left: 0px;padding-right: 0px;"><img class="img img-fluid"
                            src="{{asset('images/img-square3.jpg')}}" alt=""></div>
                    <div class="col-xl-8">
                        <p class="txt-title-bestnews"> Lorem ipsum dolor sit amet, conse....</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
