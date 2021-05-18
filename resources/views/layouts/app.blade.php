<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kilo.Health test day - Dominykas Smolskis - 2021-05-18</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    {{-- Slick slider --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
</head>

<body>
    <section class="top">
        <header class="header global-container">
            <div class="mobile-logo">
                <a href="{{ route('home') }}" class="logo"><img src="{{ asset('img/logos/kc_logo.svg') }}"
                        alt="logo"></a>
            </div>
            <nav class="nav">
                <a href="{{ route('home') }}" class="logo"><img src="{{ asset('img/logos/kc_logo.svg') }}"
                        alt="logo"></a>
                <ul>
                    <li><a href="">About</a></li>
                    <li><a href="">Reviews</a></li>
                    <li><a href="">Blog</a></li>
                    <li class="my-plan"><a href="" class="btn btn--white btn--small">Access my plan</a></li>
                </ul>
            </nav>

        </header>

        <div class="hero">
            <div class="global-container">
                <div class="info">
                    <h4 class="subtitle">Ending the run of fad diets. For real this time.</h4>
                    <h1 class="title">Find out how much weight you can lose with Keto</h1>
                    <p class="desc">Take the 2-minute quiz to find your custom-tailored keto diet plan. No more
                        tasteless meals. No
                        more
                        random pimples. No more weight relapses.</p>
                    <p class="overline">Select your gender:</p>
                </div>
                <div class="btn-wrap">
                    <a href="" class="btn btn--green">Male</a>
                    <a href="" class="btn btn--purple">Female</a>
                </div>

                <div class="scroll-down" id="scroll-down">
                    <button><img src="{{ asset('img/arrow-down.svg') }}" alt="arrow-down"></button>
                </div>
            </div>
        </div>
        <div class="global-container">
            <div class="slider" id="main">
                <div class="info">
                    <div class="meta">
                        <h1 class="title">01. what is keto</h1>
                        <p class="desc">1The keto diet is a low-carb, high-fat diet created to induce the fat-burning
                            state of ketosis. Ketosis is a completely natural metabolic process. When your body isn’t
                            getting enough carbs from the foods you eat, your cells start burning fat for energy. As a
                            part of this process, it makes small fuel molecules called ketones. <strong>In human words,
                                your fat supplies are being used for energy, not stored as jelly on your hips.</strong>
                        </p>
                    </div>
                    <div class="slider-nav">
                        <div class="prev">
                            <img src="{{ asset('img/prev-btn.png') }}" alt="">
                        </div>
                        <div class="next">
                            <img src="{{ asset('img/next-btn.png') }}" alt="">

                        </div>
                    </div>
                </div>

                <div class="slider-cont">
                    <div class="slider-about">
                        <div class="before">
                            <img src="{{ asset('img/decors/grad1.png') }}" alt="">
                            <h3>Before</h3>
                        </div>
                        <div class="meta">
                            <div class="weight">-78lbs</div>
                            <img src="{{ asset('img/decors/four-bubbles.png') }}" alt="">
                        </div>
                        <div class="after">
                            <img src="{{ asset('img/decors/grad2.png') }}" alt="">
                            <h3>After</h3>
                        </div>
                    </div>
                    <div class="top-slider">
                        <div class="slick-slideshow__slide" data-title="01. What is keto"
                            data-desc="1The keto diet is a low-carb, high-fat diet created to induce the fat-burning state of ketosis. Ketosis is a completely natural metabolic process. When your body isn’t getting enough carbs from the foods you eat, your cells start burning fat for energy. As a part of this process, it makes small fuel molecules called ketones. <strong>In human words, your fat supplies are being used for energy, not stored as jelly on your hips.</strong>">
                            <img src="https://via.placeholder.com/386x350" alt="">
                        </div>
                        <div class="slick-slideshow__slide" data-title="02. What is keto"
                            data-desc="2The keto diet is a low-carb, high-fat diet created to induce the fat-burning state of ketosis. Ketosis is a completely natural metabolic process. When your body isn’t getting enough carbs from the foods you eat, your cells start burning fat for energy. As a part of this process, it makes small fuel molecules called ketones. <strong>In human words, your fat supplies are being used for energy, not stored as jelly on your hips.</strong>.">
                            <img src="https://via.placeholder.com/386x350" alt="">
                        </div>
                        <div class="slick-slideshow__slide" data-title="03. What is keto"
                            data-desc="3The keto diet is a low-carb, high-fat diet created to induce the fat-burning state of ketosis. Ketosis is a completely natural metabolic process. When your body isn’t getting enough carbs from the foods you eat, your cells start burning fat for energy. As a part of this process, it makes small fuel molecules called ketones. <strong>In human words, your fat supplies are being used for energy, not stored as jelly on your hips.</strong>.">
                            <img src="https://via.placeholder.com/386x350" alt="">
                        </div>
                        <div class="slick-slideshow__slide" data-title="04. What is keto"
                            data-desc="4The keto diet is a low-carb, high-fat diet created to induce the fat-burning state of ketosis. Ketosis is a completely natural metabolic process. When your body isn’t getting enough carbs from the foods you eat, your cells start burning fat for energy. As a part of this process, it makes small fuel molecules called ketones. <strong>In human words, your fat supplies are being used for energy, not stored as jelly on your hips.</strong>.">
                            <img src="https://via.placeholder.com/386x350" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" global-container placeholder">
            <h1>Dummy content</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi doloribus cumque reiciendis, totam
                nulla, facere pariatur explicabo beatae aliquam, accusantium expedita corrupti blanditiis fuga ducimus?
                Incidunt veniam quibusdam saepe soluta!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi doloribus cumque reiciendis, totam
                nulla, facere pariatur explicabo beatae aliquam, accusantium expedita corrupti blanditiis fuga ducimus?
                Incidunt veniam quibusdam saepe soluta!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi doloribus cumque reiciendis, totam
                nulla, facere pariatur explicabo beatae aliquam, accusantium expedita corrupti blanditiis fuga ducimus?
                Incidunt veniam quibusdam saepe soluta!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi doloribus cumque reiciendis, totam
                nulla, facere pariatur explicabo beatae aliquam, accusantium expedita corrupti blanditiis fuga ducimus?
                Incidunt veniam quibusdam saepe soluta!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi doloribus cumque reiciendis, totam
                nulla, facere pariatur explicabo beatae aliquam, accusantium expedita corrupti blanditiis fuga ducimus?
                Incidunt veniam quibusdam saepe soluta!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi doloribus cumque reiciendis, totam
                nulla, facere pariatur explicabo beatae aliquam, accusantium expedita corrupti blanditiis fuga ducimus?
                Incidunt veniam quibusdam saepe soluta!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi doloribus cumque reiciendis, totam
                nulla, facere pariatur explicabo beatae aliquam, accusantium expedita corrupti blanditiis fuga ducimus?
                Incidunt veniam quibusdam saepe soluta!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi doloribus cumque reiciendis, totam
                nulla, facere pariatur explicabo beatae aliquam, accusantium expedita corrupti blanditiis fuga ducimus?
                Incidunt veniam quibusdam saepe soluta!</p>
        </div>
    </section>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
