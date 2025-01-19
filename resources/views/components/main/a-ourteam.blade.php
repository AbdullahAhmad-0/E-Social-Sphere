<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<style>
    #our-team-container {
        width: 100%;
        min-height: 500px;
        height: 100vh;
        position: relative;
        background: #e2e2e2;
        overflow: visible;
    }

    #our-team-holder {
        max-width: 700px;
        width: 98%;
        min-height: 360px;
        height: 360px;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
    }

    #our-team-image {
        width: 40%;
        height: 100%;
        float: left;
        position: relative;
        z-index: 200;
        background: ;
        box-shadow: 0px 40px 120px 0px rgba(0, 0, 0, .52);
        overflow: visible;
    }

    #our-team-right {
        width: 60%;
        height: 100%;
        float: right;
        position: relative;
    }

    #our-team-text {
        width: 60%;
        height: 320px;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        z-index: 100;
        background: rgba(255, 255, 255, .57);
        box-shadow: 0px 40px 120px 0px rgba(0, 0, 0, .52);
    }

    #our-team-text nav a {
        display: block;
        text-decoration: none;
        outline: none;
        outline-color: none;

    }

    #our-team-text nav {
        width: 140px;
        height: 50px;
        position: absolute;
        bottom: 0;
        left: 50%;
        margin: 0 0 -25px -70px;
        z-index: 1000;
        box-shadow: 0px 7px 24px 3px rgba(0, 0, 0, .52);
        display: none;
    }

    #our-team-leftBtn {
        width: 50%;
        height: 100%;
        float: left;
        color: rgba(255, 255, 255, .57);
        background: #232323;
        font-size: 25px;
        line-height: 200%;
        text-align: center;
        border-right: 1px solid rgba(255, 255, 255, .57);
        cursor: pointer;
        -webkit-transition: all .3s ease-in;
        -moz-transition: all .3s ease-in;
        -o-transition: all .3s ease-in;
        transition: all .3s ease-in;
    }

    #our-team-rightBtn {
        width: 50%;
        height: 100%;
        float: right;
        color: rgba(255, 255, 255, .57);
        background: #232323;
        font-size: 25px;
        line-height: 200%;
        text-align: center;
        border-left: 1px solid rgba(255, 255, 255, .57);
        cursor: pointer;
        -webkit-transition: all .3s ease-in;
        -moz-transition: all .3s ease-in;
        -o-transition: all .3s ease-in;
        transition: all .3s ease-in;
    }

    #our-team-leftBtn:hover,
    #our-team-rightBtn:hover {
        color: #fff;
    }

    #our-team-nav-cirlces {
        width: 96px;
        height: 20px;
        position: absolute;
        bottom: 8%;
        left: 50%;
        margin-left: -50px;
    }

    .our-team-circle {
        width: 20px;
        height: 100%;
        float: left;
        border-radius: 100%;
        border: 2px solid #232323;
        margin: 0 6px;
        cursor: pointer;
        -webkit-transition: all .75s cubic-bezier(.86, .3, .07, 1);
        -moz-transition: all .75s cubic-bezier(.86, .3, .07, 1);
        -o-transition: all .75s cubic-bezier(.86, .3, .07, 1);
        transition: all .75s cubic-bezier(.86, .3, .07, 1);
    }

    #our-team-centerText {
        width: 100%;
        height: 200px;
        position: absolute;
        top: 20%;
        margin-top: -100px;
        padding: 10px 0;
        overflow: visible;
    }

    #our-team-centerText p {
        width: 100%;
        height: 150px;
        position: absolute;
        top: 45px;
        left: 0;
        right: -150px;
        bottom: 0;
        margin: auto;
        font-size: 20px;
        color: #232323;
        padding: 0 25px;
        text-align: center;
        opacity: 0;
        -webkit-transition: all 2s cubic-bezier(.86, .3, .03, 1), opacity .7s cubic-bezier(.86, .3, .47, 1) .3s;
        -moz-transition: all 2s cubic-bezier(.86, .3, .03, 1), opacity .7s cubic-bezier(.86, .3, .47, 1) .3s;
        -o-transition: all 2s cubic-bezier(.86, .3, .03, 1), opacity .7s cubic-bezier(.86, .3, .47, 1) .3s;
        transition: all 2s cubic-bezier(.86, .3, .03, 1), opacity .7s cubic-bezier(.86, .3, .47, 1) .3s;
    }

    #our-team-centerText p.our-team-quote.our-team-active {
        right: 0;
        opacity: 1;
        background: transparent;
    }

    #our-team-centerText p.our-team-quote:nth-child(2) {
        top: 25px;
    }

    .our-team-active {
        background: #232323;
    }

    .our-team-img {
        width: 100%;
        height: 100%;
        position: absolute;
        right: -100%;
        background-position: center !important;
        background-size: cover !important;
        background-repeat: no-repeat !important;
        opacity: 0;
        z-index: 400;
        -webkit-transition: all 2s cubic-bezier(.86, .3, .03, 1), opacity .7s cubic-bezier(.86, .3, .47, 1) .3s;
        -moz-transition: all 2s cubic-bezier(.86, .3, .03, 1), opacity .7s cubic-bezier(.86, .3, .47, 1) .3s;
        -o-transition: all 2s cubic-bezier(.86, .3, .03, 1), opacity .7s cubic-bezier(.86, .3, .47, 1) .3s;
        transition: all 2s cubic-bezier(.86, .3, .03, 1), opacity .7s cubic-bezier(.86, .3, .47, 1) .3s;
    }

    .our-team-img.our-team-active {
        right: 0;
        opacity: 1;
        z-index: 500;
    }

    .jobs {
        background: #fff url({{asset('img/team1.jpeg')}});
    }
    
    .zuck {
        background: #fff url({{asset('img/team2.jpeg')}});
    }

    .musk {
        /* background: #fff url(https://raw.githubusercontent.com/hemantparashar/images/quote-cards/elonmusk-s.jpg); */
    }

    #our-team-bg {
        width: 100%;
        height: 100%;
        position: absolute;
    }

    .our-team-slide {
        width: 100%;
        height: 100%;
        position: absolute;
        /*right: -100%;*/
        opacity: 0;
        -webkit-transition: all 1.5s ease;
        -moz-transition: all 1.5s ease;
        -o-transition: all 1.5s ease;
        transition: all 1.5s ease;
    }

    .our-team-slide.our-team-active {
        /*right: 0%;*/
        opacity: 1;
    }

    .jobs-bg {
        background: #fff url({{asset('img/team1.png')}});
        background-size: cover;
        background-position: right;
        background-repeat: no-repeat;
    }

    .zuck-bg {
        background: #fff url({{asset('img/team2.png')}});
        background-size: cover;
        background-position: right;
        background-repeat: no-repeat;
    }

    .musk-bg {
        /* background: #fff url(https://raw.githubusercontent.com/hemantparashar/images/quote-cards/elonmusk-bg.jpg); */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    @media screen and (max-width:700px) {

        #our-team-centerText p {
            font-size: 20px;
        }
    }

    @media screen and (max-width:580px) {

        #our-team-holder {
            max-width: 700px;
            width: 100%;
            min-height: 360px;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: red;
            margin: auto;
        }

        .our-team-img {
            background-position: top center !important;
        }

        #our-team-image {
            width: 220px;
            height: 250px;
            float: left;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -280px;
            margin-left: -110px;
        }

        #our-team-right {
            width: 100%;
            height: 100%;
            float: right;
            position: relative;
            background: blue;
        }

        #our-team-text {
            width: 90%;
            height: 320px;
            position: absolute;
            top: 150px;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
        }

        #our-team-nav-cirlces {
            display: none;
        }

        #our-team-centerText {
            width: 100%;
            height: 200px;
            position: absolute;
            top: 30%;
            margin-top: -100px;
            padding: 150px 0 !important;
            overflow: visible;
        }

    }

    @media screen and (max-width:450px) {
        #our-team-image {
            width: 200px;
            height: 230px;
            float: left;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -250px;
            margin-left: -100px;
        }

        #our-team-text {
            width: 100%;
            height: 320px;
            position: absolute;
            top: 150px;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
        }

        #our-team-nav-cirlces {
            display: none;
        }

        #our-team-centerText {
            width: 100%;
            height: 200px;
            position: absolute;
            top: 30%;
            margin-top: -100px;
            padding: 120px 0 !important;
            overflow: visible;
        }

    }
</style>

<div id="our-team-container">

    <div id="our-team-holder">

        <div id="our-team-image">
            <div class="our-team-img jobs"><h4 style="color: white;">Syed zain ul hassan</h4></div>
            <div class="our-team-img zuck"><h4>Aqib Javed</h4></div>
            {{-- <div class="our-team-img musk"></div> --}}
        </div>

        <div id="our-team-right"></div>

        <div id="our-team-text">
            <div id="our-team-centerText">
                <p class="our-team-quote">
                    <i class='fa fa-quote-left' style='font-size:30px;color:blue'></i>
                    I'm Zain, a pro at running advertising campaigns. For the past two years, I've been developing Facebook, Instagram, and TikTok ad campaigns, and I'd be delighted to work with you. I'll set up and oversee your campaigns frequently and get you better results.
                    <i class='fa fa-quote-right' style='font-size:30px;color:blue'></i>
                </p>
                <p class="our-team-quote">
                    <i class='fa fa-quote-left' style='font-size:30px;color:blue'></i>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis dignissimos in ut corporis aspernatur iste, beatae exercitationem velit blanditiis consequatur temporibus. Molestiae, veritatis corporis placeat cumque suscipit natus illo unde?
                    <i class='fa fa-quote-right' style='font-size:30px;color:blue'></i>
                </p>
            </div>

            <nav>
                <a id="our-team-leftBtn" class="prev"><i class="fa fa-arrow-left"></i></a>
                <a id="our-team-rightBtn" class="next"><i class="fa fa-arrow-right"></i></a>
            </nav>
        </div>
    </div>

    <div id="our-team-bg">
        <div class="our-team-slide jobs-bg">
            <h2 class="heading-common">Our Team</h2>
        </div>
        <div class="our-team-slide zuck-bg">
            <h2 class="heading-common">Our Team</h2>
        </div>
        {{-- <div class="our-team-slide musk-bg"></div> --}}
    </div>

    <div id="our-team-nav-cirlces">
        <div class="our-team-circle"></div>
        <div class="our-team-circle"></div>
        {{-- <div class="our-team-circle"></div> --}}
    </div>

</div>

<script>
    $(window).load(function() {
        $(".our-team-circle")
            .first()
            .addClass("our-team-active");
        $("#our-team-bg .our-team-slide")
            .first()
            .addClass("our-team-active");
        $("#our-team-image .our-team-img")
            .first()
            .addClass("our-team-active");
        $(".our-team-quote")
            .first()
            .addClass("our-team-active");

        var animate = setInterval(function() {
            var $this = $(".our-team-circle"),
                currentActiveBubble = $("#our-team-nav-cirlces").find(".our-team-active"),
                position = $("#our-team-nav-cirlces")
                .children()
                .index(currentActiveBubble),
                num = $(".our-team-circle").length;

            if (position < num - 1) {
                $(".our-team-active")
                    .removeClass("our-team-active")
                    .next()
                    .addClass("our-team-active");
            } else {
                $(".our-team-circle")
                    .removeClass("our-team-active")
                    .first()
                    .addClass("our-team-active");
                $("#our-team-bg .our-team-slide")
                    .removeClass("our-team-active")
                    .first()
                    .addClass("our-team-active");
                $("#our-team-image .our-team-img")
                    .removeClass("our-team-active")
                    .first()
                    .addClass("our-team-active");
                $(".our-team-quote")
                    .removeClass("our-team-active")
                    .first()
                    .addClass("our-team-active");
            }
            position++;
        }, 4500);

        $(".our-team-circle").click(function() {
            clearInterval(animate);

            var $this = $(this),
                $siblings = $this.parent().children(),
                position = $siblings.index($this);

            $(".our-team-circle")
                .removeClass("our-team-active")
                .eq(position)
                .addClass("our-team-active");
            $("#our-team-bg .our-team-slide")
                .removeClass("our-team-active")
                .eq(position)
                .addClass("our-team-active");
            $("#our-team-image .our-team-img")
                .removeClass("our-team-active")
                .eq(position)
                .addClass("our-team-active");
            $(".our-team-quote")
                .removeClass("our-team-active")
                .eq(position)
                .addClass("our-team-active");
        });

        $("#our-team-rightBtn , #our-team-leftBtn").click(function() {
            clearInterval(animate);

            var $this = $(this),
                currentActiveBubble = $("#our-team-nav-cirlces").find(".our-team-active"),
                position = $("#our-team-nav-cirlces")
                .children()
                .index(currentActiveBubble),
                num = $(".our-team-circle").length;

            if ($this.hasClass("next")) {
                if (position < num - 1) {
                    $(".our-team-active")
                        .removeClass("our-team-active")
                        .next()
                        .addClass("our-team-active");
                } else {
                    $(".our-team-circle")
                        .removeClass("our-team-active")
                        .first()
                        .addClass("our-team-active");
                    $("#our-team-bg .our-team-slide")
                        .removeClass("our-team-active")
                        .first()
                        .addClass("our-team-active");
                    $("#our-team-image .our-team-img")
                        .removeClass("our-team-active")
                        .first()
                        .addClass("our-team-active");
                    $(".our-team-quote")
                        .removeClass("our-team-active")
                        .first()
                        .addClass("our-team-active");
                }
            } else {
                if (position === 0) {
                    $(".our-team-circle")
                        .removeClass("our-team-active")
                        .last()
                        .addClass("our-team-active");
                    $("#our-team-bg .our-team-slide")
                        .removeClass("our-team-active")
                        .last()
                        .addClass("our-team-active");
                    $("#our-team-image .our-team-img")
                        .removeClass("our-team-active")
                        .last()
                        .addClass("our-team-active");
                    $(".our-team-quote")
                        .removeClass("our-team-active")
                        .last()
                        .addClass("our-team-active");
                } else {
                    $(".our-team-active")
                        .removeClass("our-team-active")
                        .prev()
                        .addClass("our-team-active");
                }
            }
        });
    });
</script>
