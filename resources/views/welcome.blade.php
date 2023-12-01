 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('App_icons/brand.svg') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
 </head>

    <body class="flex w-full m-auto bg-[url('/public/App_icons/Landing_page.png')] bg-cover bg-fixed  h-screen">
        <section class="w-full h-full text-text font-satoshi pl-[20px] pr-[20px]">
            @include('components.Header-landing-page')
            <div class="flex w-full h-screen">
                <div class="flex flex-col w-1/2 h-full ">
                    <p class=" text-[38px] flex h-min grow w-full items-center font-bold">
                        Leatn a new way to manage your money
                    </p>
                </div>
                <div class="flex flex-col w-1/2 h-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="m-auto " width="206" height="214" viewBox="0 0 33 34" fill="none">
                        <path d="M21.7045 22.0833C21.7045 20.439 17.4309 19.1071 12.1591 19.1071M21.7045 22.0833C21.7045 23.7277 17.4309 25.0595 12.1591 25.0595C6.88727 25.0595 2.61364 23.7277 2.61364 22.0833M21.7045 22.0833V29.4301C21.7045 31.125 17.4309 32.5 12.1591 32.5C6.88727 32.5 2.61364 31.1265 2.61364 29.4301V22.0833M21.7045 22.0833C26.9191 22.0833 31.25 20.6146 31.25 19.1071V4.22619M12.1591 19.1071C6.88727 19.1071 2.61364 20.439 2.61364 22.0833M12.1591 19.1071C6.13455 19.1071 1.25 17.6384 1.25 16.131V8.69048M12.1591 5.71429C6.13455 5.71429 1.25 7.04613 1.25 8.69048M1.25 8.69048C1.25 10.3348 6.13455 11.6667 12.1591 11.6667C12.1591 13.1741 16.595 14.6429 21.8095 14.6429C27.0227 14.6429 31.25 13.1741 31.25 11.6667M31.25 4.22619C31.25 2.58185 27.0227 1.25 21.8095 1.25C16.595 1.25 12.3691 2.58185 12.3691 4.22619M31.25 4.22619C31.25 5.87054 27.0227 7.20238 21.8095 7.20238C16.5964 7.20238 12.3691 5.87054 12.3691 4.22619M12.3691 4.22619V19.3542" stroke="white" stroke-width="2.5"/>
                    </svg>
                </div>
            </div>


            <div class="flex flex-col w-full h-min ">
                <h1 class="font-bold text-[20px]">Our Services</h1>
                <div class="flex w-full gap-5">
                    @component('components.feature-holder')
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="27" viewBox="0 0 25 27" fill="none">
                        <path d="M0 7.25H22.5M17.5 1L22.3358 5.83579C23.1168 6.61683 23.1168 7.88316 22.3358 8.66421L17.5 13.5M25 19.75H2.5M7.5 13.5L2.66421 18.3358C1.88317 19.1168 1.88316 20.3832 2.66421 21.1642L7.5 26" stroke="white" stroke-width="2"/>
                    </svg>
                    <h1 class="font-bold text-red-800 titulo">asd</h1>
                    <p class=" content"></p>
                    @endcomponent

                    @component('components.feature-holder')
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M22 21V19C22 17.1362 20.7252 15.5701 19 15.126M15.5 3.29076C16.9659 3.88415 18 5.32131 18 7C18 8.67869 16.9659 10.1159 15.5 10.7092M17 21C17 19.1362 17 18.2044 16.6955 17.4693C16.2895 16.4892 15.5108 15.7105 14.5307 15.3045C13.7956 15 12.8638 15 11 15H8C6.13623 15 5.20435 15 4.46927 15.3045C3.48915 15.7105 2.71046 16.4892 2.30448 17.4693C2 18.2044 2 19.1362 2 21M13.5 7C13.5 9.20914 11.7091 11 9.5 11C7.29086 11 5.5 9.20914 5.5 7C5.5 4.79086 7.29086 3 9.5 3C11.7091 3 13.5 4.79086 13.5 7Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h1 class="font-bold text-red-800 titulo">asd</h1>
                    <p class=" content">asd</p>
                    @endcomponent

                    @component('components.feature-holder')
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M16 8V5L19 2L20 4L22 5L19 8H16ZM16 8L12 11.9999M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2M17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h1 class="font-bold text-red-800 titulo">asd</h1>
                    <p class=" content">asd</p>
                    @endcomponent

                    @component('components.feature-holder')
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                        <path d="M12.9999 13.5417C11.9943 13.5417 11.0299 13.9412 10.3188 14.6522C9.60773 15.3633 9.20825 16.3277 9.20825 17.3333C9.20825 18.339 9.60773 19.3034 10.3188 20.0145C11.0299 20.7255 11.9943 21.125 12.9999 21.125C14.0055 21.125 14.97 20.7255 15.681 20.0145C16.3921 19.3034 16.7916 18.339 16.7916 17.3333C16.7916 16.3277 16.3921 15.3633 15.681 14.6522C14.97 13.9412 14.0055 13.5417 12.9999 13.5417ZM11.3749 17.3333C11.3749 16.9024 11.5461 16.489 11.8509 16.1843C12.1556 15.8795 12.5689 15.7083 12.9999 15.7083C13.4309 15.7083 13.8442 15.8795 14.149 16.1843C14.4537 16.489 14.6249 16.9024 14.6249 17.3333C14.6249 17.7643 14.4537 18.1776 14.149 18.4824C13.8442 18.7871 13.4309 18.9583 12.9999 18.9583C12.5689 18.9583 12.1556 18.7871 11.8509 18.4824C11.5461 18.1776 11.3749 17.7643 11.3749 17.3333Z" fill="white"/>
                        <path d="M19.9568 5.21163C19.7031 5.29812 19.5762 5.34136 19.4553 5.35191C19.1872 5.3753 18.9209 5.2896 18.7168 5.11419C18.6247 5.03514 18.5469 4.926 18.3912 4.70773L16.769 2.43339C16.1936 1.6267 15.906 1.22336 15.4798 1.16392C15.0537 1.10449 14.6666 1.41371 13.8924 2.03216L3.0225 10.7158C2.93002 10.7897 2.81485 10.8294 2.69649 10.8281L2.18295 10.8226C2.17995 10.8225 2.1775 10.8249 2.1775 10.8279C2.1775 10.8309 2.17509 10.8333 2.17211 10.8333H1.90125C1.74868 10.8333 1.625 10.957 1.625 11.1096V21.8333C1.625 22.7761 1.625 23.2475 1.91789 23.5404C2.21079 23.8333 2.68219 23.8333 3.625 23.8333H22.375C23.3178 23.8333 23.7892 23.8333 24.0821 23.5404C24.375 23.2475 24.375 22.7761 24.375 21.8333V11.441C24.375 11.1054 24.1029 10.8333 23.7673 10.8333C23.5075 10.8333 23.2764 10.6681 23.1923 10.4222L21.7044 6.06982C21.591 5.7379 21.5342 5.57193 21.4469 5.451C21.2522 5.18149 20.9363 5.02636 20.604 5.03709C20.4549 5.0419 20.2889 5.09848 19.9568 5.21163ZM20.3833 8.9016C20.5698 9.44702 20.663 9.71973 20.6393 9.9403C20.6018 10.2884 20.3851 10.5915 20.0679 10.7395C19.8669 10.8333 19.5786 10.8333 19.0022 10.8333H18.7287C16.8503 10.8333 15.9111 10.8333 15.6596 10.6662C15.1769 10.3455 15.0671 9.68288 15.4205 9.22355C15.6046 8.98423 16.4936 8.68121 18.2715 8.07516L18.5574 7.98367C18.9579 7.85554 19.1581 7.79148 19.338 7.79989C19.6213 7.81313 19.8856 7.94602 20.0652 8.16548C20.1793 8.30486 20.2473 8.50378 20.3833 8.9016ZM15.8731 4.90805C16.0466 5.15139 16.1333 5.27306 16.1772 5.38016C16.3619 5.83077 16.1951 6.34887 15.7822 6.60712C15.6841 6.66849 15.5426 6.7167 15.2598 6.81311C14.2543 7.15584 13.7515 7.32721 13.5767 7.32413C12.8029 7.3105 12.3372 6.46067 12.7422 5.80107C12.8336 5.6521 13.2486 5.32058 14.0786 4.65752C14.2674 4.5067 14.3618 4.43128 14.4516 4.38531C14.8264 4.19363 15.281 4.25709 15.5889 4.54407C15.6627 4.6129 15.7329 4.71128 15.8731 4.90805ZM4.98204 20.4245C4.29293 19.7512 3.94837 19.4146 3.87002 19.2285C3.79167 19.0424 3.79167 18.7848 3.79167 18.2696V16.3946C3.79167 15.8797 3.79167 15.6223 3.86994 15.4362C3.94822 15.2502 4.29266 14.9134 4.98155 14.2397C4.99002 14.2315 4.99845 14.2231 5.00684 14.2147C5.01542 14.2062 5.02395 14.1975 5.03242 14.1889C5.7059 13.5006 6.04263 13.1564 6.2286 13.0782C6.41456 13 6.67187 13 7.18649 13H18.8131C19.328 13 19.5854 13 19.7714 13.0783C19.9574 13.1565 20.2941 13.5008 20.9675 14.1894C20.9759 14.1981 20.9845 14.2067 20.9931 14.2153C21.0016 14.2239 21.0103 14.2324 21.0189 14.2409C21.7075 14.9142 22.0518 15.2509 22.1301 15.4369C22.2083 15.6229 22.2083 15.8804 22.2083 16.3952V18.2715C22.2083 18.7863 22.2083 19.0437 22.1301 19.2297C22.0518 19.4157 21.7075 19.7524 21.0189 20.4258C21.0103 20.4343 21.0016 20.4428 20.9931 20.4514C20.9845 20.46 20.9759 20.4686 20.9675 20.4773C20.2941 21.1658 19.9574 21.5101 19.7714 21.5884C19.5854 21.6667 19.328 21.6667 18.8131 21.6667H7.18896C6.67406 21.6667 6.4166 21.6667 6.23056 21.5884C6.04452 21.5101 5.70794 21.1658 5.03478 20.4773C5.026 20.4683 5.01716 20.4594 5.00827 20.4505C4.99957 20.4418 4.99083 20.4331 4.98204 20.4245Z" fill="white"/>
                      </svg>
                    <h1 class="font-bold text-red-800 titulo">asd</h1>
                    <p class=" content">asd</p>
                    @endcomponent
                </div>
            </div>

        </section>
    </body>
 </html>
