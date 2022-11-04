@extends('web.layouts.web_layout')

@section('title','Odt - Home')

@section('content')
<div class="slider-revoluation fullpage" id="fullpage3">

    <section>

        <div id="rev_slider_11_1_wrapper" class="rev_slider_wrapper fullscreen-container"
            data-alias="home-vertical-slide-portfolio" data-source="gallery"
            style="background:transparent;padding:0px;">

            <!-- START REVOLUTION SLIDER 5.4.7 fullscreen mode -->

            <div id="rev_slider_11_1" class="rev_slider fullscreenbanner" style="display:none;"
                data-version="5.4.7">

                <ul>

                    <!-- SLIDE  -->

                    <li data-index="rs-21" data-transition="fade" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                        data-easeout="default" data-masterspeed="300" data-rotate="0"
                        data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                        data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                        data-param8="" data-param9="" data-param10="" data-description="">

                        <!-- MAIN IMAGE -->

                        <img src="{{ asset('web_assets/img/revoulation/home-vertical-slide-portfolio-slide-01-bg.jpg') }}"
                            alt="" data-bgposition="center center" data-kenburns="on"
                            data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100"
                            data-scaleend="110" data-rotatestart="0" data-rotateend="0"
                            data-blurstart="0" data-blurend="0" data-offsetstart="0 0"
                            data-offsetend="0 0" class="rev-slidebg" data-no-retina>

                        <h2 class="d-none">Slider</h2>

                        <!-- LAYERS -->



                        <!-- LAYER NR. 1 -->

                        <div class="tp-caption     rev_group" id="slide-21-layer-5"
                            data-x="['left','left','left','left']" data-hoffset="['150','80','50','563']"
                            data-y="['bottom','bottom','bottom','bottom']"
                            data-voffset="['122','80','70','349']" data-width="180" data-height="55"
                            data-whitespace="nowrap" data-visibility="['on','on','on','off']"
                            data-type="group" data-basealign="slide" data-responsive_offset="off"
                            data-responsive="off"
                            data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                            data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 7; min-width: 180px; max-width: 180px; max-width: 55px; max-width: 55px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">

                            <!-- LAYER NR. 2 -->

                            <a class="tp-caption  " href="#section-portfolio-featured-01" target="_self"
                                id="slide-21-layer-3" data-x="['left','left','left','left']"
                                data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="text" data-actions=''
                                data-responsive_offset="off" data-responsive="off"
                                data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 8; white-space: nowrap; font-size: 18px; line-height: 20px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Poppins;text-decoration: none;">Scroll

                                for more </a>



                            <!-- LAYER NR. 3 -->

                            <a class="tp-caption rev-scroll-btn " href="#section-portfolio-featured-01"
                                target="_self" id="slide-21-layer-4"
                                data-x="['right','right','right','right']"
                                data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                data-voffset="['0','0','0','0']" data-width="35" data-height="55"
                                data-whitespace="nowrap" data-type="button" data-actions=''
                                data-responsive_offset="off" data-responsive="off"
                                data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 9; min-width: 35px; max-width: 35px; max-width: 55px; max-width: 55px; white-space: nowrap; font-weight: 400; color: transparent; background-color:rgba(0,0,0,0);border-color:rgb(255,255,255);border-style:solid;border-width:3px 3px 3px 3px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">

                                <span>

                                </span>

                            </a>

                        </div>



                        <!-- LAYER NR. 4 -->

                        <div class="tp-caption     rev_group" id="slide-21-layer-8"
                            data-x="['center','center','right','center']"
                            data-hoffset="['0','0','50','606']"
                            data-y="['bottom','bottom','bottom','bottom']"
                            data-voffset="['100','80','70','309']" data-width="['140','160','160','160']"
                            data-height="40" data-whitespace="nowrap"
                            data-visibility="['on','on','on','off']" data-type="group"
                            data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                            data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                            data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 10; min-width: 140px; max-width: 140px; max-width: 40px; max-width: 40px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">

                            <!-- LAYER NR. 5 -->

                        </div>



                        <!-- LAYER NR. 11 -->

                        <div class="tp-caption   tp-resizeme" id="slide-21-layer-1"
                            data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']"
                            data-voffset="['-2','-70','-80','-80']" data-fontsize="['90','80','65','50']"
                            data-lineheight="['100','90','72','56']"
                            data-width="['700','700','700','370']" data-height="none"
                            data-whitespace="normal" data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['center','center','center','center']"
                            data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 5; min-width: 700px; max-width: 700px; white-space: normal; font-size: 90px; line-height: 100px; font-weight: 700; color: #ffffff; letter-spacing: 0px;">
                            Odt. </div>

                    </li>

                </ul>

                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>

            </div>

        </div>

    </section>



    <section id="section-portfolio-featured-01">

        <div class="fullscreen-slider-wrapper">

            <div class="feature-wrapper">

                <div class="fullscreen-inner feature-info">

                    <div class="inner">

                        <h2 class="section-heading">함께 보기<span class="text-secondary">,</span> <br> 즐기기
                            <span class="text-secondary">.</span></h2>

                    </div>

                </div>

                <div class="fullscreen-inner feature-thumbnail">

                    <div class="section-content-wrapper">

                        <div class="section-dot"></div>

                        <h3 class="section-sub-heading mb-4">여운으로 남을 소설이다,<br>'재밌었다'로 마무리하기 좋은 영화다.</h3>

                        <p class="section-text mb-0">오디티는 문학, 예술, 영화, 사진, 음악, 그 어떤 것 같기도 하고,<br>함께 느끼고,
                            경험하고 싶은 사람들을 모아, 그 장면을 기록으로<br>엮는 소셜 플랫폼입니다.</p>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <section id="section-portfolio-featured-02">

        <div class="fullscreen-slider-wrapper">

            <div class="feature-wrapper">

                <div class="fullscreen-inner feature-info">

                    <div class="inner">

                        <h2 class="section-heading">감상하고<span class="text-secondary">,</span> <br> 나누고
                            <span class="text-secondary">,</span> <br>남기세요 <span
                                class="text-secondary">.</span></h2>

                    </div>

                </div>

                <div class="fullscreen-inner feature-thumbnail">

                    <div class="section-content-wrapper">

                        <div class="section-dot"></div>

                        <h3 class="section-sub-heading mb-4">단순히 모여서, 나누고 끝나기엔,<br>당신의 시간은 소중합니다.</h3>

                        <p class="section-text mb-0">작품을 감상하고, 글을 적고, 한 데 모여서 이야기를 나눕니다.<br>그리고 모임이 끝나면
                            흩어져버리죠. 우리는 생각했습니다<br>그 모든 과정과 현장이 단순히 버려져서는 안될 것이라고.</p>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <section id="section-portfolio-featured-03">

        <div class="fullscreen-slider-wrapper">

            <div class="feature-wrapper">

                <div class="fullscreen-inner feature-info">

                    <div class="inner">

                        <img src="{{ asset('web_assets/img/image1.png') }}" class="img-fluid" style="height: 450px;"
                            alt="image">

                    </div>

                </div>

                <div class="fullscreen-inner feature-thumbnail">

                    <div class="section-content-wrapper">

                        <div class="section-dot"></div>

                        <h3 class="section-sub-heading mb-4">당신이 원하는 주제,<br>장소와 시간으로.</h3>

                        <p class="section-text mb-0">더 이상 사람과 공간으로 골머리 앓을 필요가 없습니다.<br>당신의 시간을 오롯히 당신의 품으로.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <section id="section-portfolio-featured-04" class="section-dark">

        <div class="fullscreen-slider-wrapper">

            <div class="feature-wrapper">

                <div class="fullscreen-inner feature-info">

                    <div class="inner">

                        <h2 class="section-heading text-theme">헤어지면<br>끝이라는 말<br>이젠 안녕!</h2>

                    </div>

                </div>

                <div class="fullscreen-inner feature-thumbnail">

                    <div class="section-content-wrapper">

                        <div class="section-dot"></div>

                        <h3 class="section-sub-heading mb-4 text-theme">단순히 모여서, 나누고 끝나기엔,<br>이대로 그냥 끝내버리면
                            섭섭하죠.</h3>

                        <p class="section-text mb-0">Oddity는 당신이 감상하고, 적고, 그린 과정과 현장의 포착에 집중합니다.</p>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <section id="section-portfolio-featured-05" class="section-dark">

        <div class="fullscreen-slider-wrapper">

            <div class="feature-wrapper">

                <div class="fullscreen-inner feature-info">

                    <div class="inner">

                        <img src="{{ asset('web_assets/img/images2.png') }}" class="img-fluid" style="height: 450px;"
                            alt="image">

                    </div>

                </div>

                <div class="fullscreen-inner feature-thumbnail">

                    <div class="section-content-wrapper">

                        <div class="section-dot"></div>

                        <h3 class="section-sub-heading mb-4 text-theme">가볍게 여행을 가는 것처럼<br>티켓 한 장 들고.</h3>

                        <p class="section-text mb-0">Oddity는 당신이 감상하고, 적고, 그린 과정과 현장의 포착에 집중합니다.</p>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <section id="section-portfolio-featured-06" class="section-dark">

        <div class="fullscreen-slider-wrapper">

            <div class="feature-wrapper">

                <div class="fullscreen-inner feature-info">

                    <div class="inner">

                        <img src="{{ asset('web_assets/img/images3.png') }}" class="img-fluid" style="height: 450px;"
                            alt="image">

                    </div>

                </div>

                <div class="fullscreen-inner feature-thumbnail">

                    <div class="section-content-wrapper">

                        <div class="section-dot"></div>

                        <h3 class="section-sub-heading mb-4 text-theme">책장 한 켠에<br>자신의 기록을</h3>

                        <p class="section-text mb-0">Oddity는 모든 경험이 의미있게 책으로 만들어 보답합니다</p>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <section id="section-portfolio-featured-06" class="footer">

        <div class="fullscreen-slider-wrapper">

            <div class="feature-wrapper">

                <div class="fullscreen-inner feature-info">

                    <div class="inner">

                        <div class="d-flex footer-columns align-items-center justify-content-center">



                            <div class="footer-heading">



                                <h2 class="mb-0">odt.</h2>



                            </div>



                            <div class="footer-content">



                                <p class="mb-2">오디티닷</p>



                                <p class="mb-2">사업자등록번호 : 769-07-02542</p>



                                <p class="mb-2">대표 : 오인재</p>



                                <p class="mb-2">경기도 성남시 수정구 복정로134번길 18, 202호(복정동)</p>



                            </div>



                        </div>

                    </div>

                </div>

                <div class="fullscreen-inner feature-thumbnail" style="align-items: center !important;">

                    <p class="mb-0 footer-copyright-text">Copyright 2022. SSSDC. All rights reserved</p>

                </div>

            </div>

        </div>

    </section>



</div>
@endsection