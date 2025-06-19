<style>
     *{
        margin: 0;
        padding: 0;
    }

    section{
        position:relative;
        width: 100%;
        height: 0vh;
        background: #000000;
    }

    section .wave{
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100px;
        background: url(images/blogs/wave.png);
        background-size: 1000px 100px;
    }

    section .wave.wave1{
        animation: animate-1 30s linear infinite;
        z-index: 1000;
        opacity: 1;
        animation-delay: 0s;
        bottom: 0;
    }

    @keyframes animate-1{
        0%{
            background-position-x: 0;
        }
        100%{
            background-position-x: 1000px;
        }
    }


    section .wave.wave2{
        animation: animate-2 20s linear infinite;
        z-index: 999;
        opacity: 0.7;
        animation-delay: -3s;
        bottom: 10px;
    }

    @keyframes animate-2{
        0%{
            background-position-x: 0;
        }
        100%{
            background-position-x: -1000px;
        }
    }
    section .wave.wave3{
        animation: animate-3 10s linear infinite;
        z-index: 998;
        opacity: 0.5;
        animation-delay: -2s;
        bottom: 15px;
    }

    @keyframes animate-3{
        0%{
            background-position-x: 0;
        }
        100%{
            background-position-x: 1000px;
        }
    }
    section .wave.wave4{
        animation: animate-4 5s linear infinite;
        z-index: 997;
        opacity: 0.3;
        animation-delay: -1s;
        bottom: 20px;
    }

    @keyframes animate-4{
        0%{
            background-position-x: 0;
        }
        100%{
            background-position-x: 1000px;
        }
    }
</style>




<section>
        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="wave wave4"></div>
</section>