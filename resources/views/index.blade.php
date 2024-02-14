@extends('layouts.layout')

    @section('style') <link rel="stylesheet" href="{{ asset('css/index.css') }}"> @endsection

@section('title') Ebalo - main page @endsection

@section('main_content')
    <main>
        <section class="main">
            <div class="welcome__container">
                <div class="info__container">
                    <svg xmlns="http://www.w3.org/2000/svg" width="189" height="189" viewBox="0 0 189 189" fill="none">
                        <path
                            d="M84.8426 71.0896C86.5242 69.9782 88.092 68.9328 89.5154 68.0714C92.9045 66.0235 93.9944 61.6139 91.9395 58.226C89.8962 54.8365 85.485 53.7551 82.0983 55.7984C80.5172 56.7522 78.7743 57.9061 76.9136 59.1376C70.8953 63.1278 61.7411 69.3377 56.6044 67.8858C52.8497 66.8247 52.3968 64.2384 51.161 62.364C48.5014 57.4559 42.8506 54.1983 37.7443 54.3048C37.7443 54.3048 33.19 54.3048 27.6418 56.4877C2.64091 65.4036 2.5742 71.3185 2.57732 74.2114C2.58083 76.8496 2.63506 79.3989 10.0358 83.7027H0.0237955L0.00285518 157.065C0.00127844 162.589 4.47889 167.068 10.0029 167.068H62.4401L66.5848 128.914C66.5848 128.914 45.8808 127.389 35.5695 125.896C23.1815 124.102 21.0153 112.682 21.0153 112.682L14.5683 86.0971C18.2628 87.8966 23.0594 89.9605 29.3917 92.4013C30.2394 92.727 31.1093 92.8819 31.9663 92.8819C34.8471 92.8819 37.5613 91.1343 38.6606 88.2894C40.0837 84.5917 38.2405 80.4396 34.5452 79.0177C30.6474 77.5159 26.285 75.6758 22.6724 74.0133C23.2911 73.7281 23.9706 73.4348 24.6404 73.1387L34.6552 77.1172C40.7004 79.4515 42.3891 84.3421 40.6017 88.9896C39.2672 92.4563 35.2395 96.7734 28.1711 93.9824C25.9886 93.121 24.0233 92.3557 22.1614 91.588L25.2716 111.797C26.1575 117.549 29.6886 120.528 35.8071 122.176C38.7624 123.41 70.7954 125.841 70.7954 125.841C69.7168 138.391 67.5202 158.982 67.2557 161.39C66.5376 166.395 69.7781 171.19 74.7892 172.32C75.5132 172.481 76.238 172.558 76.9452 172.558C81.4187 172.558 85.4527 169.468 86.4755 164.923C86.9057 163.007 90.6639 118.179 90.6994 117.733C90.9252 115.015 89.8872 112.052 88.0475 110.041C85.6863 107.459 83.5697 105.177 58.4144 104.325L54.9964 82.1361C56.0196 82.2898 57.0432 82.392 58.0687 82.392C67.7999 82.3924 77.4862 75.9692 84.8426 71.0896Z"
                            fill="white" />
                        <path
                            d="M34.76 53.3807C44.9607 53.3807 53.23 45.1114 53.23 34.9107C53.23 24.71 44.9607 16.4407 34.76 16.4407C24.5593 16.4407 16.29 24.71 16.29 34.9107C16.29 45.1114 24.5593 53.3807 34.76 53.3807Z"
                            fill="white" />
                        <path
                            d="M188.977 83.7027H178.965C186.365 79.3989 186.42 76.8496 186.423 74.2114C186.426 71.3185 186.36 65.4036 161.359 56.4877C155.81 54.3048 151.256 54.3048 151.256 54.3048C146.15 54.1983 140.499 57.4559 137.84 62.364C136.603 64.2384 136.151 66.8251 132.396 67.8858C127.259 69.3381 118.105 63.1278 112.087 59.1376C110.226 57.9065 108.484 56.7522 106.902 55.7984C103.516 53.7548 99.1046 54.8365 97.0609 58.226C95.0051 61.6139 96.0954 66.0235 99.4849 68.0714C100.908 68.9328 102.477 69.9782 104.158 71.0896C111.514 75.9692 121.2 82.3924 130.931 82.3924C131.957 82.3924 132.981 82.2902 134.004 82.1365L130.586 104.325C105.431 105.178 103.314 107.46 100.952 110.042C99.1124 112.052 98.0747 115.015 98.301 117.733C98.3365 118.18 102.095 163.007 102.524 164.923C103.548 169.469 107.582 172.559 112.055 172.559C112.762 172.559 113.487 172.481 114.211 172.321C119.222 171.191 122.462 166.396 121.745 161.39C121.479 158.983 119.282 138.391 118.205 125.842C118.205 125.842 150.238 123.411 153.193 122.176C159.311 120.528 162.842 117.55 163.729 111.797L166.839 91.5884C164.977 92.3561 163.011 93.121 160.829 93.9827C153.76 96.7734 149.733 92.4563 148.398 88.99C146.61 84.3425 148.3 79.4519 154.345 77.1176L164.359 73.1391C165.03 73.4352 165.709 73.7281 166.328 74.0137C162.715 75.6762 158.353 77.5163 154.455 79.0181C150.759 80.44 148.916 84.5921 150.339 88.2898C151.439 91.1347 154.153 92.8823 157.033 92.8823C157.89 92.8823 158.761 92.7274 159.609 92.4017C165.941 89.9613 170.737 87.8974 174.432 86.0975L167.985 112.683C167.985 112.683 165.818 124.103 153.43 125.896C143.119 127.39 122.416 128.915 122.416 128.915L126.56 167.068H178.997C184.521 167.068 188.999 162.59 188.997 157.066L188.977 83.7027Z"
                            fill="white" />
                        <path
                            d="M154.241 53.3807C164.442 53.3807 172.711 45.1114 172.711 34.9107C172.711 24.71 164.442 16.4407 154.241 16.4407C144.04 16.4407 135.771 24.71 135.771 34.9107C135.771 45.1114 144.04 53.3807 154.241 53.3807Z"
                            fill="white" />
                    </svg>
                </div>
                <div class="title__container">
                    <h4 class="title">WELCOME TO EBALO</h4>
                    <h5 class="subtitle">the best messenger in the whole world</h5>
                </div>
            </div>
            <div class="news__container">
                <h3 class="title">NEWS</h3>
                <div class="list__container">
                    <div class="news__block">
                        <div class="image"><img style="width: 358px; height: 256px;" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.pngmart.com%2Ffiles%2F22%2FPiplup-Pokemon-PNG-Photo.png&f=1&nofb=1&ipt=2e7a619d7d580e3ec7998afe6e0215489cfa1cb6681eff90d580e0ddd8c0c996&ipo=images"></div>
                        <h5 class="title">OUR PLATFORM IS VERY GOOD</h5>
                    </div>
                    <div class="news__block">
                        <div class="image"><img style="width: 358px; height: 256px;" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.pngmart.com%2Ffiles%2F22%2FPiplup-Pokemon-PNG-Photo.png&f=1&nofb=1&ipt=2e7a619d7d580e3ec7998afe6e0215489cfa1cb6681eff90d580e0ddd8c0c996&ipo=images"></div>
                        <h5 class="title">OUR PLATFORM IS VERY GOOD</h5>
                    </div>
                    <div class="news__block">
                        <div class="image"><img style="width: 358px; height: 256px;" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.pngmart.com%2Ffiles%2F22%2FPiplup-Pokemon-PNG-Photo.png&f=1&nofb=1&ipt=2e7a619d7d580e3ec7998afe6e0215489cfa1cb6681eff90d580e0ddd8c0c996&ipo=images"></div>
                        <h5 class="title">OUR PLATFORM IS VERY GOOD</h5>
                    </div>
                    <div class="news__block">
                        <div class="image"><img style="width: 358px; height: 256px;" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.pngmart.com%2Ffiles%2F22%2FPiplup-Pokemon-PNG-Photo.png&f=1&nofb=1&ipt=2e7a619d7d580e3ec7998afe6e0215489cfa1cb6681eff90d580e0ddd8c0c996&ipo=images"></div>
                        <h5 class="title">OUR PLATFORM IS VERY GOOD</h5>
                    </div>
                    <div class="news__block">
                        <div class="image"><img style="width: 358px; height: 256px;" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.pngmart.com%2Ffiles%2F22%2FPiplup-Pokemon-PNG-Photo.png&f=1&nofb=1&ipt=2e7a619d7d580e3ec7998afe6e0215489cfa1cb6681eff90d580e0ddd8c0c996&ipo=images"></div>
                        <h5 class="title">OUR PLATFORM IS VERY GOOD</h5>
                    </div>
                    <div class="news__block">
                        <div class="image"><img style="width: 358px; height: 256px;" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.pngmart.com%2Ffiles%2F22%2FPiplup-Pokemon-PNG-Photo.png&f=1&nofb=1&ipt=2e7a619d7d580e3ec7998afe6e0215489cfa1cb6681eff90d580e0ddd8c0c996&ipo=images"></div>
                        <h5 class="title">OUR PLATFORM IS VERY GOOD</h5>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
