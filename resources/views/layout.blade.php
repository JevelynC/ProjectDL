<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Pembelajaran YCKIT</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/css/tw-elements.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{--
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" /> --}}
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Geologica&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lilita+One&display=swap');

        ::selection {
            background: var(--secondary);
            /* color: white; */
        }


        ::-moz-selection {
            background: var(--secondary);
            /* color: white; */
        }

        ::-webkit-scrollbar {
            width: 15px;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background: var(--secondary);
        }

        ::-webkit-scrollbar-thumb {
            background-color: var(--neutral);
            background-image: -webkit-gradient(linear,
                    left bottom,
                    left top,
                    color-stop(0.44, rgb(122, 153, 217)),
                    color-stop(0.72, rgb(73, 125, 189)),
                    color-stop(0.86, rgb(28, 58, 148)));
            border-radius: 10px;
        }

        :root {
            --primary: #E2D2FE;
            --secondary: #BAE5F4;
            --neutral: #FCCDCD;
            --contrast: rgba(0, 0, 90);
            --white: #fefefe;
            --cream: rgb(255, 247, 226);
        }

        body {
            background-image: linear-gradient(180deg, dodgerblue 12%, Khaki 90%, YellowGreen 90%);
            overflow-x: hidden z-index: 10;
        }

        .clouds {
            height: 200wh;
        }

        .cloud,
        .cloud:nth-child(6) {
            z-index: 0 !important;
            --cloud-colour: #ffffff;
            --cloud-factor: 1.5rem;
            --cloud-opacity: 0.6;
            position: absolute;
            top: 40%;
            left: calc(-20 * var(--cloud-factor));
            right: auto;
            background-color: var(--cloud-colour);
            opacity: var(--cloud-opacity);
            width: calc(20 * var(--cloud-factor));
            height: calc(6 * var(--cloud-factor));
            border-radius: calc(3 * var(--cloud-factor));
            animation: cloudFloat 45s linear infinite;
        }

        .cloud:before {
            content: "";
            position: absolute;
            left: calc(3.2 * var(--cloud-factor));
            bottom: calc(3.2 * var(--cloud-factor));
            background-color: var(--cloud-colour);
            width: calc(8 * var(--cloud-factor));
            height: calc(8 * var(--cloud-factor));
            border-radius: 50%;
        }

        .cloud:after {
            content: "";
            position: absolute;
            left: calc(8.7 * var(--cloud-factor));
            bottom: calc(2.2 * var(--cloud-factor));
            background-color: var(--cloud-colour);
            width: calc(7.5 * var(--cloud-factor));
            height: calc(7.5 * var(--cloud-factor));
            border-radius: 50%;
        }

        .cloud:nth-child(2),
        .cloud:nth-child(5) {
            --cloud-factor: 0.75rem;
            --cloud-opacity: 0.5;
            top: 150%;
            left: -70%;
            right: auto;
            animation: cloudFloat 39s linear infinite;
            animation-delay: 5s;
        }

        .cloud:nth-child(3),
        .cloud:nth-child(4) {
            --cloud-factor: 0.6rem;
            --cloud-opacity: 0.4;
            top: 75%;
            left: -70%;
            right: auto;
            animation: cloudFloat 34s linear infinite;
        }

        .cloud:nth-child(6) {
            --cloud-opacity: 0.5;
            top: 100%;
            animation-delay: 25s;
        }

        .cloud:nth-child(5) {
            top: 190%;
            animation: cloudFloat 45s linear infinite;
            animation-delay: 15s;
        }

        .cloud:nth-child(4) {
            --cloud-opacity: 0.5;
            top: 250%;
            animation-delay: 20s;
        }

        @keyframes cloudFloat {
            0% {
                transform: translate3d(0, 0, 0);
            }

            100% {
                transform: translate3d(150vmax, 0, 0);
            }
        }

        .title-container,
        .soal-container,
        .number-container,
        .color-container,
        button {
            z-index: 10;
        }
    </style>


    @yield('head')
</head>

<body>
    @yield('body')

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/js/tw-elements.umd.min.js"></script>
    {{--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
    @yield('script')
</body>

</html>