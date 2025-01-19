<style>    
    .btn-container {
        display: flex;
        justify-content: center;
    }
    
    .trusted-section {
        font-family: "Poppins", sans-serif;
        margin: 50px 0px;
    }

    .t-section-header {
        text-align: center;
        margin: 40px;
    }

    .t-section-title {
        font-weight: bold;
        font-size: 30px;
        margin: 0;
    }

    .t-section-subtitle {
        margin: 0 auto;
        width: 30%;
        color: #888;
        font-size: 20px;
    }

    .t-section-body {
        width: 80%;
        margin: 0 auto;
    }

    .t-section-row {
        margin: 0 auto;
        display: flex;
        flex-wrap: nowrap;
        overflow-x: hidden;
        align-items: center;
    }

    .t-section-row img {
        width: 200px;
        margin: 20px;
    }

    @media (max-width: 1000px) {
        .t-section-body {
            width: 100%;
        }

        .t-section-row img {
            width: 100px;
            margin: 20px;
        }

        .t-section-subtitle {
            width: 100%;
        }
    }
</style>
<div class="trusted-section">
    <div class="t-section-header">
        <h2 class="t-section-title">Trusted By The Best</h2>
        <p class="t-section-subtitle">Our team has been trusted with thousands of events for the world's best companies, big or small.</p>
    </div>
    <div class="t-section-body">
        <div class="t-section-row t-section-row1">
        </div>
    </div>
</div>
<script>
    function scrollWindow() {
        var scroll = document.querySelector('.t-section-row');
        if (scroll.offsetWidth + scroll.scrollLeft == scroll.scrollWidth) {
            var container = document.createElement("div");
            container.classList.add("t-section-column");

            var image1 = document.createElement("img");
            image1.src = images[imageIndex];

            container.appendChild(image1);

            scroll.appendChild(container);

            if (imageIndex == images.length - 1) {
                imageIndex = 0;
            } else {
                imageIndex +=1;
            }
        }
        scroll.scrollLeft += 1;
    }

    function handleScroll() {
        if (scrollStatus == false) {
            startScroll();
            scrollStatus = true;
        } else {
            stopScroll();
            scrollStatus = false;
        }
    }

    function startScroll() {
        timeout = setInterval(scrollWindow, 20);
        scrollStatus = true;
    }

    function stopScroll() {
        clearInterval(timeout);
        scrollStatus = false;
    }
    const images = [
        "{{ asset('img/clients/1.jpeg') }}",
        "{{ asset('img/clients/2.jpeg') }}",
        "{{ asset('img/clients/3.jpeg') }}",
        "{{ asset('img/clients/4.jpeg') }}",
        "{{ asset('img/clients/5.jpeg') }}",
        "{{ asset('img/clients/1.jpeg') }}",
        "{{ asset('img/clients/2.jpeg') }}",
        "{{ asset('img/clients/3.jpeg') }}",
        "{{ asset('img/clients/4.jpeg') }}",
        "{{ asset('img/clients/5.jpeg') }}",
        // "https://cdn.d1baseball.com/logos/teams/256/georgemas.png",
        // "https://logos-download.com/wp-content/uploads/2016/06/Lockheed_Martin_logo.png",
        // "https://www.freepnglogos.com/uploads/google-logo-png/file-google-logo-svg-wikimedia-commons-23.png",
        // "https://1000logos.net/wp-content/uploads/2019/11/facebook-logo-png.png",
        // "https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg",
        // "https://appcmsprod.viewlift.com/07f03878-2e8b-4f70-a4d9-ebb2a920da80/images/eagle-bank-arena.png",
        // "https://logodix.com/logo/1810537.png",
        // "https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Deloitte.svg/1280px-Deloitte.svg.png",
        // "https://www.cs.umd.edu/cscareerfair/sites/default/files/cs.umd.edu.openhouse/images/company/mitre_0.png",
        // "https://cdn.discordapp.com/attachments/620652013088407595/697112575271239811/GMU_foundation.png",
        // "https://media.discordapp.net/attachments/620652013088407595/697112610730016778/Sodexo_logo.png",
    ];
    var scrollStatus = false;
    var imageIndex = 0;
    handleScroll();
    document.querySelector('.t-section-row').addEventListener("click", function() {
        handleScroll();
    })
</script>
