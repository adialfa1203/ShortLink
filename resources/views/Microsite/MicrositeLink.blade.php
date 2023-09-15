@extends('layout.guest.app')
@section('title', 'Example Microsite Name')
@section('style')
<link href="{{ asset('template/themesbrand.com/steex/layouts/assets/css/link.css') }}" rel="stylesheet" type="text/css">


<div id="__next">
    <section class="MicrositeContainer_Main__h7wfn MicrositeContainer_Main_isNotBuilder__R1vOP MicrositeContainer_ButtonSizeLg__WNJnp" style="background-color:rgb(209 213 219 / 1);--dark-color:#000;--light-color:#fff;--text-color:#111827;--link-color:255, 255, 255;--link-background:118, 124, 131;--link-shadow:#fff;--link-border:#fff;--divider-color:255, 255, 255">
        <div class="fixed top-0 left-0 w-full h-full overflow-hidden">
            <div class="bg-center bg-repeat absolute -left-10 -right-10 -bottom-10 -top-10 blur-xl bg-cover" style="background-image:url(../cdn.s.id/images/8cc9c75d-641e-4947-ad9f-42f31e408caf_1000x1500.webp.jpeg)">
            </div>
        </div>
        <style>
            body,
            html {
                overscroll-behavior-y: none;
            }
        </style>
        <div class="fixed top-3 right-3 z-50"><button class="transition-all bg-white bg-opacity-80 rounded-full p-3 hover:bg-opacity-100"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 text-gray-900">
                    <path fill-rule="evenodd" d="M15.75 4.5a3 3 0 11.825 2.066l-8.421 4.679a3.002 3.002 0 010 1.51l8.421 4.679a3 3 0 11-.729 1.31l-8.421-4.678a3 3 0 110-4.132l8.421-4.679a3 3 0 01-.096-.755z" clip-rule="evenodd"></path>
                </svg></button></div>
        <div class="fixed top-0 left-0 right-0 bottom-0 h-full flex">
            <div class="MicrositeContainer_Container__btcXO">
                <div class="MicrositeContainer_StyledBackgroundFilter__5pVB_"></div>
                <div class="MicrositeContainer_StyledBackground__1ENPs bg-center bg-cover" style="background-image:url('{{ asset('component/' . $accessMicrosite->component->cover_img )}}')">
                </div>
            </div>
        </div>
        <div class="MicrositeContainer_Container__btcXO">
            <div class="MicrositeContainer_ComponentContainer__c7L7p">
                <div class="flex flex-wrap -m-2 relative z-10">
                    <div id="mcomp-64cfcae6a66629863dc47840" class="w-28 mx-auto relative mb-3">
                        <div class="w-24 h-24 sm:w-28 sm:h-28 flex items-center justify-center bg-gray-200 mx-auto overflow-hidden bg-center bg-cover bg-no-repeat rounded-full">
                            <img src="{{ asset(Auth::user()->profile_picture ) }}" alt="">
                        </div>
                    </div>
                    <div id="" class="Text_Text__v_8Om Text_Text_center__40OcD Text_Text_lg__sLpoO"><span style="font-weight:bold">{{ $accessMicrosite->name }}</span></div>
                    <div id="" class="Text_Text__v_8Om Text_Text_center__40OcD"><span>
                            <p>{!! $accessMicrosite->description !!}</p>
                        </span></div>
                    <div class="mt-3 w-full"></div>
                    <div class="HorizontalLink_Container__R74h3">
                        <a href="https://tiktok.com/" target="_blank" rel="noopener noreferrer" class="HorizontalLink_Link__7IF9Z HorizontalLink_Link_circle__S9cau">
                        <i class="fa-brands fa-twitter"></i>
                        </a>
                        </div>
                    <div class="Link_LinkContainer__8XFkh">
                        <div class="Link_LinkOuter__CacTs"><a href="https://wa.me/+6283104185095" target="_blank" rel="noopener noreferrer" class="Link_Link__lcSrg Link_Variant_fullRound__IEVkw Link_Variant_fullRound_whShadow__heIK0">
                            <div class="Link_Icon__WjzGo Link_Icon_fullRound__JzoQ1"><i class="fa-brands fa-twitter"></i></div>
                                <div class="Link_TextOuter__i2D1Z">
                                    <div style="font-family:&#x27;Montserrat&#x27;, sans-serif" class="Link_Text__hNUN8 Link_Text_center__ZehB9"><strong>WhatsApp</strong>
                                    </div>
                                </div>
                                <div class="Link_Dummy__e6G9_"></div>
                            </a></div>
                    </div>
                    <div id="" style="font-size:1em" class="Text_Text__v_8Om Text_Text_center__40OcD">
                        <p node="[object Object]"><strong>Write Your Company Name Here!</strong></p>
                    </div>
                    <div id="" style="font-size:1em" class="Text_Text__v_8Om Text_Text_center__40OcD">
                        <p node="[object Object]">Write Your Company Address Here!</p>
                    </div>
                </div>
            </div>
            <!-- <div class="w-full flex flex-col items-center mt-10 font-worksans">
                    <div class="py-1.5 px-4 rounded-full mb-10 shadow-lg bg-white z-10 hover:-translate-y-1 transition-all">
                        <div class="text-sm font-medium text-center w-full flex items-center justify-center z-10 relative">
                            <p class="text-gray-700">Powered by</p><img src="https://microsite.s.id/images/sid-neu-logo-dark.svg" class="h-7 ml-2 mr-0.5" alt="s.id logo" /><a href="https://home.s.id/?utm_source=sid-microsite&amp;utm_medium=Gmbssss" target="_blank" rel="noopener noreferrer" class="absolute left-0 top-0 w-full h-full"><span class="link"></span></a>
                        </div>
                    </div>
                </div> -->
        </div>
    </section>
    <div style="position:fixed;z-index:999999999;top:16px;left:16px;right:16px;bottom:16px;pointer-events:none">
    </div>
</div>