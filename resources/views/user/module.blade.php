@extends('layout')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/dog.css') }}">
    <style>
        body {
            /* background: var(--secondary); */
            min-height: 100vh;
            min-width: 100vw;
            padding: 0;
            margin: 0;
            overflow-x: hidden;
            background-color: hsla(0, 45%, 87%, 1);
            /* background-image:
                radial-gradient(at 0% 63%, hsla(177, 96%, 78%, 0.74) 0px, transparent 50%),
                radial-gradient(at 40% 20%, hsla(28, 100%, 74%, 0.39) 0px, transparent 50%),
                radial-gradient(at 80% 0%, hsla(189, 100%, 56%, 0.64) 0px, transparent 50%),
                radial-gradient(at 80% 50%, hsla(340, 100%, 76%, 1) 0px, transparent 50%),
                radial-gradient(at 16% 83%, hsla(22, 100%, 77%, 1) 0px, transparent 50%),
                radial-gradient(at 75% 97%, hsla(240, 100%, 70%, 0.74) 0px, transparent 50%),
                radial-gradient(at 4% 21%, hsla(335, 100%, 76%, 0.77) 0px, transparent 50%); */
            background-size: cover;
            background: YellowGreen;
        }

        .title-container {
            overflow-x: hidden;
            position: relative;
            height: 100vh;
            width: 100vw;
            background-color: #52ACFF;
            background-image: linear-gradient(180deg, dodgerblue 12%, Khaki 90%, YellowGreen 90%);
        }

        .anjing {
            position: absolute;
            bottom: 20px;
        }

        .clouds {
            height: 70wh;
        }

        .cloud,
        .cloud:nth-child(6) {
            --cloud-colour: #ffffff;
            --cloud-factor: 1rem;
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
            top: 20%;
            left: -50%;
            right: auto;
            animation: cloudFloat 39s linear infinite;
            animation-delay: 5s;
        }

        .cloud:nth-child(3),
        .cloud:nth-child(4) {
            --cloud-factor: 0.6rem;
            --cloud-opacity: 0.4;
            top: 55%;
            left: -50%;
            right: auto;
            animation: cloudFloat 34s linear infinite;
        }

        .cloud:nth-child(4) {
            --cloud-opacity: 0.5;
            top: 5%;
            animation-delay: 25s;
        }

        .cloud:nth-child(5) {
            top: 55%;
            animation: cloudFloat 45s linear infinite;
            animation-delay: 15s;
        }

        .cloud:nth-child(6) {
             --cloud-opacity: 0.5;
            top: 25%;
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

        .judul {
            margin-top: -80px;
        }

        .word {
            font-family: "Lilita One", sans-serif;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto;
            width: 100%;
            font-size: 7vw;
            text-transform: uppercase;
            overflow: hidden;
            text-align: center;
            line-height: 1;
        }

        .letter {
            /* position: relative; */
            display: inline-block;
            background-clip: text;
            -webkit-text-stroke: .05em white;
            -webkit-text-fill-color: transparent;
            filter: drop-shadow(0.4vh 0.4vh 0.4vh rgba(0, 0, 0, 0.3));
            animation-duration: 0.2s;
            background-repeat: repeat;
            min-width: 0.2em;
            z-index: 1;
        }

        .module-container {
            font-family: 'Inter', sans-serif;
            color: var(--contrast);
        }

        @keyframes scatter {
            0% {
                top: 0;
            }

            50% {
                top: -10px;
            }

            100% {
                top: 0;
            }
        }

        @media (max-width: 1024px) {
            .word {
                font-size: 10vw;
            }
        }

        @media (max-width: 768px) {
            .word {
                font-size: 12vw;
            }

            .cloud {
                top: 50%;
            }

            .cloud:nth-child(3) {
                top: 75%;
            }
        }
    </style>
@endsection

@section('body')
    <section class="min-h-screen min-w-screen pb-10">
        <div class="w-full flex items-center flex-col">
            <div class="title-container py-10 flex items-center justify-center">
                <div class="clouds">
                    <div class="cloud cloud1"></div>
                    <div class="cloud cloud2"></div>
                    <div class="cloud cloud3"></div>
                    <div class="cloud cloud4"></div>
                    <div class="cloud cloud5"></div>
                    <div class="cloud cloud6"></div>
                    <div class="cloud cloud7"></div>
                </div>
                <div class="judul">
                    <div class="word">
                        <span class="letter"
                            style="background-image:url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20256%22%3E%0A%20%20%3Cdefs%2F%3E%0A%20%20%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%23fcf003%22%20d%3D%22M0%200h256v256H0z%22%2F%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%23E6D617%22%20d%3D%22M38.5%2023L49%2044H28zM100.5%2044L111%2065H90zM143%2018l10%2021h-20zM223.5%2034L234%2055h-21zM128.5%2089l10.5%2020h-21zM49%2088l10%2021H39zM100.5%20149l10.5%2021H90zM180.5%2088l10.5%2021h-21zM32.5%20210L43%20231H22zM223.5%20128l10.5%2021h-21zM110.5%20200l10.5%2020h-21zM174.5%20182l10.5%2021h-21zM223.5%20203l10.5%2021h-21zM42%20141l10%2021H32z%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E&quot;)">m</span>
                        <span class="letter"
                            style="background-image:url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20256%22%3E%0A%20%20%3Cdefs%2F%3E%0A%20%20%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%23FF9B0F%22%20d%3D%22M0%200h256v256H0z%22%2F%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%23DE8201%22%20d%3D%22M38.5%2023L49%2044H28zM100.5%2044L111%2065H90zM143%2018l10%2021h-20zM223.5%2034L234%2055h-21zM128.5%2089l10.5%2020h-21zM49%2088l10%2021H39zM100.5%20149l10.5%2021H90zM180.5%2088l10.5%2021h-21zM32.5%20210L43%20231H22zM223.5%20128l10.5%2021h-21zM110.5%20200l10.5%2020h-21zM174.5%20182l10.5%2021h-21zM223.5%20203l10.5%2021h-21zM42%20141l10%2021H32z%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E&quot;)">o</span>
                        <span class="letter"
                            style="background-image:url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20256%22%3E%0A%20%20%3Cdefs%2F%3E%0A%20%20%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%233FCDFF%22%20d%3D%22M0%200h256v256H0z%22%2F%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%23037FAA%22%20d%3D%22M26.5%2040.75l-9.698%205.099%201.852-10.8-7.846-7.648%2010.843-1.575L26.5%2016l4.849%209.826%2010.843%201.575-7.846%207.648%201.852%2010.8zM43.5%20131.75l-9.698%205.099%201.852-10.8-7.846-7.648%2010.843-1.575L43.5%20107l4.849%209.826%2010.843%201.575-7.846%207.648%201.852%2010.8zM175%2040.75l-9.992%205.099%201.908-10.8-8.084-7.648%2011.172-1.575L175%2016l4.996%209.826%2011.172%201.575-8.084%207.648%201.908%2010.8zM227.5%2098.5l-9.698%205.253%201.852-11.126-7.846-7.88%2010.843-1.624L227.5%2073l4.849%2010.123%2010.843%201.624-7.846%207.88%201.852%2011.126zM109%2091.5l-9.992%205.253%201.908-11.126-8.084-7.88%2011.172-1.624L109%2066l4.996%2010.123%2011.172%201.624-8.084%207.88%201.908%2011.126zM211%20213.75l-9.992%205.099%201.908-10.8-8.084-7.648%2011.172-1.575L211%20189l4.996%209.826%2011.172%201.575-8.084%207.648%201.908%2010.8zM141.5%20180.75l-9.698%205.099%201.852-10.8-7.846-7.648%2010.843-1.575L141.5%20156l4.849%209.826%2010.843%201.575-7.846%207.648%201.852%2010.8zM52%20222.75l-9.992%205.099%201.908-10.8-8.084-7.648%2011.172-1.575L52%20198l4.996%209.826%2011.172%201.575-8.084%207.648%201.908%2010.8z%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E&quot;)">d</span>
                        <span class="letter"
                            style="background-image:url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20256%22%3E%0A%20%20%3Cdefs%2F%3E%0A%20%20%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%239c50bf%22%20d%3D%22M0%200h256v256H0z%22%2F%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%234a225c%22%20d%3D%22M26.5%2040.75l-9.698%205.099%201.852-10.8-7.846-7.648%2010.843-1.575L26.5%2016l4.849%209.826%2010.843%201.575-7.846%207.648%201.852%2010.8zM43.5%20131.75l-9.698%205.099%201.852-10.8-7.846-7.648%2010.843-1.575L43.5%20107l4.849%209.826%2010.843%201.575-7.846%207.648%201.852%2010.8zM175%2040.75l-9.992%205.099%201.908-10.8-8.084-7.648%2011.172-1.575L175%2016l4.996%209.826%2011.172%201.575-8.084%207.648%201.908%2010.8zM227.5%2098.5l-9.698%205.253%201.852-11.126-7.846-7.88%2010.843-1.624L227.5%2073l4.849%2010.123%2010.843%201.624-7.846%207.88%201.852%2011.126zM109%2091.5l-9.992%205.253%201.908-11.126-8.084-7.88%2011.172-1.624L109%2066l4.996%2010.123%2011.172%201.624-8.084%207.88%201.908%2011.126zM211%20213.75l-9.992%205.099%201.908-10.8-8.084-7.648%2011.172-1.575L211%20189l4.996%209.826%2011.172%201.575-8.084%207.648%201.908%2010.8zM141.5%20180.75l-9.698%205.099%201.852-10.8-7.846-7.648%2010.843-1.575L141.5%20156l4.849%209.826%2010.843%201.575-7.846%207.648%201.852%2010.8zM52%20222.75l-9.992%205.099%201.908-10.8-8.084-7.648%2011.172-1.575L52%20198l4.996%209.826%2011.172%201.575-8.084%207.648%201.908%2010.8z%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E&quot;)">u</span>
                        <span class="letter"
                            style="background-image:url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20256%22%3E%0A%20%20%3Cdefs%2F%3E%0A%20%20%20%20%3Cmask%20id%3D%22myMask%22%3E%0A%20%20%20%20%3Crect%20x%3D%220%22%20y%3D%220%22%20width%3D%22256%22%20height%3D%22256%22%20fill%3D%22white%22%20%2F%3E%0A%20%20%3C%2Fmask%3E%0A%20%20%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%20mask%3D%22url(%23myMask)%22%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%2300C34C%22%20d%3D%22M0%200h256v256H0z%22%2F%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%23009239%22%20d%3D%22M0%2013.088L50.912%2064%200%20114.912-50.912%2064zM128%2013.088L178.912%2064%20128%20114.912%2077.088%2064zM61%2077.088L111.912%20128%2061%20178.912%2010.088%20128zM192%2077.088L242.912%20128%20192%20178.912%20141.088%20128zM192-50.912L242.912%200%20192%2050.912%20141.088%200zM61-50.912L111.912%200%2061%2050.912%2010.088%200zM61%20205.088L111.912%20256%2061%20306.912%2010.088%20256zM192%20205.088L242.912%20256%20192%20306.912%20141.088%20256zM255%2013.088L305.912%2064%20255%20114.912%20204.088%2064zM1%20141.088L51.912%20192%201%20242.912-49.912%20192zM129%20141.088L179.912%20192%20129%20242.912%2078.088%20192zM256%20141.088L306.912%20192%20256%20242.912%20205.088%20192z%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E&quot;)">l</span>
                    </div>
                    <div class="word">
                        <span class="letter"
                            style="background-image:url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20256%22%3E%0A%20%20%3Cdefs%2F%3E%0A%20%20%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%23fcf003%22%20d%3D%22M0%200h256v256H0z%22%2F%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%23E6D617%22%20d%3D%22M38.5%2023L49%2044H28zM100.5%2044L111%2065H90zM143%2018l10%2021h-20zM223.5%2034L234%2055h-21zM128.5%2089l10.5%2020h-21zM49%2088l10%2021H39zM100.5%20149l10.5%2021H90zM180.5%2088l10.5%2021h-21zM32.5%20210L43%20231H22zM223.5%20128l10.5%2021h-21zM110.5%20200l10.5%2020h-21zM174.5%20182l10.5%2021h-21zM223.5%20203l10.5%2021h-21zM42%20141l10%2021H32z%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E&quot;)">p</span>
                        <span class="letter"
                            style="background-image:url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20256%22%3E%0A%20%20%3Cdefs%2F%3E%0A%20%20%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%23FF9B0F%22%20d%3D%22M0%200h256v256H0z%22%2F%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%23DE8201%22%20d%3D%22M38.5%2023L49%2044H28zM100.5%2044L111%2065H90zM143%2018l10%2021h-20zM223.5%2034L234%2055h-21zM128.5%2089l10.5%2020h-21zM49%2088l10%2021H39zM100.5%20149l10.5%2021H90zM180.5%2088l10.5%2021h-21zM32.5%20210L43%20231H22zM223.5%20128l10.5%2021h-21zM110.5%20200l10.5%2020h-21zM174.5%20182l10.5%2021h-21zM223.5%20203l10.5%2021h-21zM42%20141l10%2021H32z%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E&quot;)">e</span>
                        <span class="letter"
                            style="background-image:url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20256%22%3E%0A%20%20%3Cdefs%2F%3E%0A%20%20%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%233FCDFF%22%20d%3D%22M0%200h256v256H0z%22%2F%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%23037FAA%22%20d%3D%22M26.5%2040.75l-9.698%205.099%201.852-10.8-7.846-7.648%2010.843-1.575L26.5%2016l4.849%209.826%2010.843%201.575-7.846%207.648%201.852%2010.8zM43.5%20131.75l-9.698%205.099%201.852-10.8-7.846-7.648%2010.843-1.575L43.5%20107l4.849%209.826%2010.843%201.575-7.846%207.648%201.852%2010.8zM175%2040.75l-9.992%205.099%201.908-10.8-8.084-7.648%2011.172-1.575L175%2016l4.996%209.826%2011.172%201.575-8.084%207.648%201.908%2010.8zM227.5%2098.5l-9.698%205.253%201.852-11.126-7.846-7.88%2010.843-1.624L227.5%2073l4.849%2010.123%2010.843%201.624-7.846%207.88%201.852%2011.126zM109%2091.5l-9.992%205.253%201.908-11.126-8.084-7.88%2011.172-1.624L109%2066l4.996%2010.123%2011.172%201.624-8.084%207.88%201.908%2011.126zM211%20213.75l-9.992%205.099%201.908-10.8-8.084-7.648%2011.172-1.575L211%20189l4.996%209.826%2011.172%201.575-8.084%207.648%201.908%2010.8zM141.5%20180.75l-9.698%205.099%201.852-10.8-7.846-7.648%2010.843-1.575L141.5%20156l4.849%209.826%2010.843%201.575-7.846%207.648%201.852%2010.8zM52%20222.75l-9.992%205.099%201.908-10.8-8.084-7.648%2011.172-1.575L52%20198l4.996%209.826%2011.172%201.575-8.084%207.648%201.908%2010.8z%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E&quot;)">m</span>
                        <span class="letter"
                            style="background-image:url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20256%22%3E%0A%20%20%3Cdefs%2F%3E%0A%20%20%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%239c50bf%22%20d%3D%22M0%200h256v256H0z%22%2F%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%234a225c%22%20d%3D%22M26.5%2040.75l-9.698%205.099%201.852-10.8-7.846-7.648%2010.843-1.575L26.5%2016l4.849%209.826%2010.843%201.575-7.846%207.648%201.852%2010.8zM43.5%20131.75l-9.698%205.099%201.852-10.8-7.846-7.648%2010.843-1.575L43.5%20107l4.849%209.826%2010.843%201.575-7.846%207.648%201.852%2010.8zM175%2040.75l-9.992%205.099%201.908-10.8-8.084-7.648%2011.172-1.575L175%2016l4.996%209.826%2011.172%201.575-8.084%207.648%201.908%2010.8zM227.5%2098.5l-9.698%205.253%201.852-11.126-7.846-7.88%2010.843-1.624L227.5%2073l4.849%2010.123%2010.843%201.624-7.846%207.88%201.852%2011.126zM109%2091.5l-9.992%205.253%201.908-11.126-8.084-7.88%2011.172-1.624L109%2066l4.996%2010.123%2011.172%201.624-8.084%207.88%201.908%2011.126zM211%20213.75l-9.992%205.099%201.908-10.8-8.084-7.648%2011.172-1.575L211%20189l4.996%209.826%2011.172%201.575-8.084%207.648%201.908%2010.8zM141.5%20180.75l-9.698%205.099%201.852-10.8-7.846-7.648%2010.843-1.575L141.5%20156l4.849%209.826%2010.843%201.575-7.846%207.648%201.852%2010.8zM52%20222.75l-9.992%205.099%201.908-10.8-8.084-7.648%2011.172-1.575L52%20198l4.996%209.826%2011.172%201.575-8.084%207.648%201.908%2010.8z%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E&quot;)">b</span>
                        <span class="letter"
                            style="background-image:url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20256%22%3E%0A%20%20%3Cdefs%2F%3E%0A%20%20%20%20%3Cmask%20id%3D%22myMask%22%3E%0A%20%20%20%20%3Crect%20x%3D%220%22%20y%3D%220%22%20width%3D%22256%22%20height%3D%22256%22%20fill%3D%22white%22%20%2F%3E%0A%20%20%3C%2Fmask%3E%0A%20%20%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%20mask%3D%22url(%23myMask)%22%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%2300C34C%22%20d%3D%22M0%200h256v256H0z%22%2F%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%23009239%22%20d%3D%22M0%2013.088L50.912%2064%200%20114.912-50.912%2064zM128%2013.088L178.912%2064%20128%20114.912%2077.088%2064zM61%2077.088L111.912%20128%2061%20178.912%2010.088%20128zM192%2077.088L242.912%20128%20192%20178.912%20141.088%20128zM192-50.912L242.912%200%20192%2050.912%20141.088%200zM61-50.912L111.912%200%2061%2050.912%2010.088%200zM61%20205.088L111.912%20256%2061%20306.912%2010.088%20256zM192%20205.088L242.912%20256%20192%20306.912%20141.088%20256zM255%2013.088L305.912%2064%20255%20114.912%20204.088%2064zM1%20141.088L51.912%20192%201%20242.912-49.912%20192zM129%20141.088L179.912%20192%20129%20242.912%2078.088%20192zM256%20141.088L306.912%20192%20256%20242.912%20205.088%20192z%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E&quot;)">e</span>
                        <span class="letter"
                            style="background-image:url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20256%22%3E%0A%20%20%3Cdefs%2F%3E%0A%20%20%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%23fcf003%22%20d%3D%22M0%200h256v256H0z%22%2F%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%23E6D617%22%20d%3D%22M38.5%2023L49%2044H28zM100.5%2044L111%2065H90zM143%2018l10%2021h-20zM223.5%2034L234%2055h-21zM128.5%2089l10.5%2020h-21zM49%2088l10%2021H39zM100.5%20149l10.5%2021H90zM180.5%2088l10.5%2021h-21zM32.5%20210L43%20231H22zM223.5%20128l10.5%2021h-21zM110.5%20200l10.5%2020h-21zM174.5%20182l10.5%2021h-21zM223.5%20203l10.5%2021h-21zM42%20141l10%2021H32z%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E&quot;)">l</span>
                        <span class="letter"
                            style="background-image:url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20256%22%3E%0A%20%20%3Cdefs%2F%3E%0A%20%20%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%23FF9B0F%22%20d%3D%22M0%200h256v256H0z%22%2F%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%23DE8201%22%20d%3D%22M38.5%2023L49%2044H28zM100.5%2044L111%2065H90zM143%2018l10%2021h-20zM223.5%2034L234%2055h-21zM128.5%2089l10.5%2020h-21zM49%2088l10%2021H39zM100.5%20149l10.5%2021H90zM180.5%2088l10.5%2021h-21zM32.5%20210L43%20231H22zM223.5%20128l10.5%2021h-21zM110.5%20200l10.5%2020h-21zM174.5%20182l10.5%2021h-21zM223.5%20203l10.5%2021h-21zM42%20141l10%2021H32z%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E&quot;)">a</span>
                        <span class="letter"
                            style="background-image:url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20256%22%3E%0A%20%20%3Cdefs%2F%3E%0A%20%20%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%233FCDFF%22%20d%3D%22M0%200h256v256H0z%22%2F%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%23037FAA%22%20d%3D%22M26.5%2040.75l-9.698%205.099%201.852-10.8-7.846-7.648%2010.843-1.575L26.5%2016l4.849%209.826%2010.843%201.575-7.846%207.648%201.852%2010.8zM43.5%20131.75l-9.698%205.099%201.852-10.8-7.846-7.648%2010.843-1.575L43.5%20107l4.849%209.826%2010.843%201.575-7.846%207.648%201.852%2010.8zM175%2040.75l-9.992%205.099%201.908-10.8-8.084-7.648%2011.172-1.575L175%2016l4.996%209.826%2011.172%201.575-8.084%207.648%201.908%2010.8zM227.5%2098.5l-9.698%205.253%201.852-11.126-7.846-7.88%2010.843-1.624L227.5%2073l4.849%2010.123%2010.843%201.624-7.846%207.88%201.852%2011.126zM109%2091.5l-9.992%205.253%201.908-11.126-8.084-7.88%2011.172-1.624L109%2066l4.996%2010.123%2011.172%201.624-8.084%207.88%201.908%2011.126zM211%20213.75l-9.992%205.099%201.908-10.8-8.084-7.648%2011.172-1.575L211%20189l4.996%209.826%2011.172%201.575-8.084%207.648%201.908%2010.8zM141.5%20180.75l-9.698%205.099%201.852-10.8-7.846-7.648%2010.843-1.575L141.5%20156l4.849%209.826%2010.843%201.575-7.846%207.648%201.852%2010.8zM52%20222.75l-9.992%205.099%201.908-10.8-8.084-7.648%2011.172-1.575L52%20198l4.996%209.826%2011.172%201.575-8.084%207.648%201.908%2010.8z%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E&quot;)">j</span>
                        <span class="letter"
                            style="background-image:url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20256%22%3E%0A%20%20%3Cdefs%2F%3E%0A%20%20%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%239c50bf%22%20d%3D%22M0%200h256v256H0z%22%2F%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%234a225c%22%20d%3D%22M26.5%2040.75l-9.698%205.099%201.852-10.8-7.846-7.648%2010.843-1.575L26.5%2016l4.849%209.826%2010.843%201.575-7.846%207.648%201.852%2010.8zM43.5%20131.75l-9.698%205.099%201.852-10.8-7.846-7.648%2010.843-1.575L43.5%20107l4.849%209.826%2010.843%201.575-7.846%207.648%201.852%2010.8zM175%2040.75l-9.992%205.099%201.908-10.8-8.084-7.648%2011.172-1.575L175%2016l4.996%209.826%2011.172%201.575-8.084%207.648%201.908%2010.8zM227.5%2098.5l-9.698%205.253%201.852-11.126-7.846-7.88%2010.843-1.624L227.5%2073l4.849%2010.123%2010.843%201.624-7.846%207.88%201.852%2011.126zM109%2091.5l-9.992%205.253%201.908-11.126-8.084-7.88%2011.172-1.624L109%2066l4.996%2010.123%2011.172%201.624-8.084%207.88%201.908%2011.126zM211%20213.75l-9.992%205.099%201.908-10.8-8.084-7.648%2011.172-1.575L211%20189l4.996%209.826%2011.172%201.575-8.084%207.648%201.908%2010.8zM141.5%20180.75l-9.698%205.099%201.852-10.8-7.846-7.648%2010.843-1.575L141.5%20156l4.849%209.826%2010.843%201.575-7.846%207.648%201.852%2010.8zM52%20222.75l-9.992%205.099%201.908-10.8-8.084-7.648%2011.172-1.575L52%20198l4.996%209.826%2011.172%201.575-8.084%207.648%201.908%2010.8z%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E&quot;)">a</span>
                        <span class="letter"
                            style="background-image:url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20256%22%3E%0A%20%20%3Cdefs%2F%3E%0A%20%20%20%20%3Cmask%20id%3D%22myMask%22%3E%0A%20%20%20%20%3Crect%20x%3D%220%22%20y%3D%220%22%20width%3D%22256%22%20height%3D%22256%22%20fill%3D%22white%22%20%2F%3E%0A%20%20%3C%2Fmask%3E%0A%20%20%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%20mask%3D%22url(%23myMask)%22%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%2300C34C%22%20d%3D%22M0%200h256v256H0z%22%2F%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%23009239%22%20d%3D%22M0%2013.088L50.912%2064%200%20114.912-50.912%2064zM128%2013.088L178.912%2064%20128%20114.912%2077.088%2064zM61%2077.088L111.912%20128%2061%20178.912%2010.088%20128zM192%2077.088L242.912%20128%20192%20178.912%20141.088%20128zM192-50.912L242.912%200%20192%2050.912%20141.088%200zM61-50.912L111.912%200%2061%2050.912%2010.088%200zM61%20205.088L111.912%20256%2061%20306.912%2010.088%20256zM192%20205.088L242.912%20256%20192%20306.912%20141.088%20256zM255%2013.088L305.912%2064%20255%20114.912%20204.088%2064zM1%20141.088L51.912%20192%201%20242.912-49.912%20192zM129%20141.088L179.912%20192%20129%20242.912%2078.088%20192zM256%20141.088L306.912%20192%20256%20242.912%20205.088%20192z%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E&quot;)">r</span>
                        <span class="letter"
                            style="background-image:url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20256%22%3E%0A%20%20%3Cdefs%2F%3E%0A%20%20%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%23fcf003%22%20d%3D%22M0%200h256v256H0z%22%2F%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%23E6D617%22%20d%3D%22M38.5%2023L49%2044H28zM100.5%2044L111%2065H90zM143%2018l10%2021h-20zM223.5%2034L234%2055h-21zM128.5%2089l10.5%2020h-21zM49%2088l10%2021H39zM100.5%20149l10.5%2021H90zM180.5%2088l10.5%2021h-21zM32.5%20210L43%20231H22zM223.5%20128l10.5%2021h-21zM110.5%20200l10.5%2020h-21zM174.5%20182l10.5%2021h-21zM223.5%20203l10.5%2021h-21zM42%20141l10%2021H32z%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E&quot;)">a</span>
                        <span class="letter"
                            style="background-image:url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20256%22%3E%0A%20%20%3Cdefs%2F%3E%0A%20%20%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%23FF9B0F%22%20d%3D%22M0%200h256v256H0z%22%2F%3E%0A%20%20%20%20%3Cpath%20fill%3D%22%23DE8201%22%20d%3D%22M38.5%2023L49%2044H28zM100.5%2044L111%2065H90zM143%2018l10%2021h-20zM223.5%2034L234%2055h-21zM128.5%2089l10.5%2020h-21zM49%2088l10%2021H39zM100.5%20149l10.5%2021H90zM180.5%2088l10.5%2021h-21zM32.5%20210L43%20231H22zM223.5%20128l10.5%2021h-21zM110.5%20200l10.5%2020h-21zM174.5%20182l10.5%2021h-21zM223.5%20203l10.5%2021h-21zM42%20141l10%2021H32z%22%2F%3E%0A%20%20%3C%2Fg%3E%0A%3C%2Fsvg%3E&quot;)">n</span>
                    </div>
                </div>
                <div class="container anjing">
                    <div class="body">
                        <div class="head">
                            <div class="ear"></div>
                            <div class="backEar"></div>
                            <div class="snout">
                                <div class="eye"></div>
                                <div class="nose"></div>
                            </div>
                            <div class="collar">
                                <div class="tag"></div>
                            </div>
                        </div>
                        <div class="frontLegs">
                            <div class="frontLeg"></div>
                            <div class="backLeg"></div>
                        </div>
                        <div class="backLegs">
                            <div class="frontLeg"></div>
                            <div class="backLeg"></div>
                        </div>
                        <div class="tail"></div>
                    </div>
                    <div class="shadow"></div>
                </div>
            </div>
            <div class="xl:grid grid-rows-2 grid-cols-2 w-9/12 gap-10 py-10">
                @foreach ($modules as $module)
                    <div
                        class="module-container w-full bg-[var(--primary)] flex flex-col justify-center rounded-xl shadow-xl mt-4 xl:mt-0 py-4 sm:py-3">
                        <div class="flex items-center flex-col sm:flex-row">
                            <div class="xl:pl-7">
                                <img src="{{ asset($module['image']) }}" class="w-[150px]">
                            </div>
                            <div class="h-full flex flex-col justify-center px-7">
                                <h2 class="text-xl font-bold py-2">{{ $module['title'] }}</h2>
                                <p class="max-w-[400px]">{{ $module['description'] }}</p>
                            </div>
                        </div>
                        <div class="w-full flex px-7 py-4">
                            <a class="w-1/2 mr-3 border-white border-4 rounded-lg bg-[var(--neutral)] hover:bg-[var(--secondary)] transition-all duration-300 ease-in-out h-[40px] font-semibold flex justify-center
                                                items-center"
                                href="{{ $module['module'] }}">Modul</a>
                            <a class="w-1/2 border-white border-4 rounded-lg bg-[var(--neutral)] hover:bg-[var(--secondary)] transition-all duration-300 ease-in-out h-[40px] font-semibold flex justify-center
                                                items-center"
                                href="{{ $module['assessment'] }}">Latihan Soal</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
