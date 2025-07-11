<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Start your own pharmacy business with eMedix. Low investment, high returns, and comprehensive support. Join our franchise network today!">
    <meta name="keywords"
        content="pharmacy franchise, eMedix, start pharmacy business, low investment pharmacy, franchise opportunity">
    <meta name="author" content="eMedix Wellness Pvt Ltd">
    <meta name="robots" content="index, follow">
    <title>Start Your Own Pharmacy Business</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />


    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="icon" href="https://www.emedix.in/wp-content/uploads/2024/11/cropped-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://www.emedix.in/wp-content/uploads/2024/11/cropped-favicon-192x192.png"
        sizes="192x192" />
    <link rel="apple-touch-icon" href="https://www.emedix.in/wp-content/uploads/2024/11/cropped-favicon-180x180.png" />
    <meta name="msapplication-TileImage"
        content="https://www.emedix.in/wp-content/uploads/2024/11/cropped-favicon-270x270.png" />



    <link rel="stylesheet" href="style.css" />
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5S4JGR');</script>
    <!-- End Google Tag Manager -->
    <script>
        dataLayer.push({
          'event':'EC_FormSubmit',
          'enhanced_conversion_data': {
            "email": '<?= $data->email;?>',  
            "phone_number": '<?= $data->contact;?>'
          }
        })
      </script>
      

</head>

<body class="font-sans text-gray-800" x-data="{ open: false }">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5S4JGR" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <div id="loading">
        <div class="loader"></div>
    </div>
    <!-- Header -->
    <header class="shadow-[0_4px_7.4px_rgba(61, 65, 76, 0.03)] bg-white ">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <img src="images/logo.png" alt="eMedix Logo" class="h-10">
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="contact" class="py-10 pt-[168px] pt-md-0 md:py-16 bg-cover bg-center"
        style="background-image: url('images/banner.jpg');">
        <div class="container mx-auto px-4 flex justify-between flex-col md:flex-row items-center"
            style="max-width: 800px;">

            <div class="md:w-3/3 bg-white p-6 rounded-lg shadow-lg hidden md:block">
                <h2 class="text-xl font-bold mb-4">Easy-to-start business opportunity!</h2>
                <p class="text-gray-600 mb-4">Fill in your details and let our team get back to you.</p>
                <iframe src="https://www.emedix.in/crm/lead/qualify" frameborder="0" scrolling="no"
                    onload="resizeIframe(this)" style="width: 100%; height: 1000px;" id="myIframe"> </iframe>
            </div>
            <script>
                var loc = window.location.toString(),
                    params = loc.split('?')[1],
                    iframe = document.getElementById('myIframe');

                iframe.src = iframe.src + '?' + params; 
            </script>
        </div>
    </section>
    <section class="pt-[14px] pb-[50px]block  md:hidden" id="contact">
        <div class="container px-4">
            <div class="md:w-1/3 bg-white p-6 rounded-xl shadow-lg block shadow-md ">
                <h2 class="text-xl font-bold mb-4">Easy-to-start business opportunity!</h2>
                <p class="text-gray-600 mb-4">Fill in your details and let our team get back to you.</p>
                <iframe src="https://www.emedix.in/crm/lead/qualify" frameborder="0" scrolling="no"
                    onload="resizeIframe(this)" style="width: 100%; height: 1000px;" id="myIframe4"> </iframe>
            </div>
            <script>
                var loc = window.location.toString(),
                    params = loc.split('?')[1],
                    iframe = document.getElementById('myIframe4');

                iframe.src = iframe.src + '?' + params; 
            </script>
        </div>
        </div>
    </section>




    <!-- FAQs -->

    <section class="max-w-6xl mx-auto px-4 pt-[70px] pb-[79px]">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl md:text-4xl montserrat font-bold text-black text-center w-full mb-[30px]">FAQs</h2>
        </div>

        <div x-data="{ selected: 1 }" class="space-y-4">
            <!-- Item 1 -->
            <div class="border-b pb-4 border-[#AFAFAF]">
                <button @click="selected === 1 ? selected = 0 : selected = 1"
                    class="w-full flex justify-between items-center text-left">
                    <span class="font-semibold text-lg montserrat w-[90%]">Where is the company located?</span>
                    <div class="w-6 h-6 rounded-full border border-black flex items-center justify-center">
                        <svg x-show="selected !== 1" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14m7-7H5" />
                        </svg>
                        <svg x-show="selected === 1" x-cloak class="w-4 h-4" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                        </svg>
                    </div>
                </button>
                <p x-show="selected === 1" x-transition class="text-gray roboto font-normal text-md mt-[11px] mb-[16]">
                    EMEDIX WELLNESS PVT LTD is a registered company under ROC and is located in Patna Bihar.
                </p>
            </div>

            <!-- Item 2 -->
            <div class="border-b pb-4 border-[#AFAFAF]">
                <button @click="selected === 2 ? selected = 0 : selected = 2"
                    class="w-full flex justify-between items-center text-left">
                    <span class="font-semibold text-lg montserrat w-[90%]">How much area is required to open a
                        pharmacy?</span>
                    <div class="w-6 h-6 rounded-full border border-black flex items-center justify-center">
                        <svg x-show="selected !== 2" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14m7-7H5" />
                        </svg>
                        <svg x-show="selected === 2" x-cloak class="w-4 h-4" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                        </svg>
                    </div>
                </button>
                <p x-show="selected === 2" x-transition class="text-gray roboto font-normal text-md mt-[11px] mb-[16]">
                    The minimum area required for a medicine store is 108 sq feet however we recommend 120 square feet
                    or more.
                </p>
            </div>

            <!-- Item 3 -->
            <div class="border-b border-[#AFAFAF] pb-4">
                <button @click="selected === 3 ? selected = 0 : selected = 3"
                    class="w-full flex justify-between items-center text-left">
                    <span class="font-semibold text-lg montserrat w-[90%]">What about drug license?</span>
                    <div class="w-6 h-6 rounded-full border border-black flex items-center justify-center">
                        <svg x-show="selected !== 3" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14m7-7H5" />
                        </svg>
                        <svg x-show="selected === 3" x-cloak class="w-4 h-4" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                        </svg>
                    </div>
                </button>
                <p x-show="selected === 3" x-transition class="text-gray roboto font-normal text-md mt-[11px] mb-[16]">
                    A drug license can be obtained by applying for it at your local drug office. We will assist you with
                    all the paperwork and requirements of the drug license.
                </p>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-primary text-white py-3">
        <div class="container mx-auto px-4 text-center">
            <p class="text-base montserrat font-medium">&copy; eMedix Wellness Pvt Ltd 2024. All rights reserved.</p>
        </div>
    </footer>
    <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-black/50 flex items-center justify-center z-50" @click="open = false">
        <!-- Modal Content -->
        <div x-show="open" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95" class="bg-white rounded-lg shadow-xl max-w-md w-full mx-4"
            @click.stop>
            <!-- Modal Header -->
            <div class="flex justify-between items-center p-4 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-800">Easy-to-start business opportunity!</h2>
                <button @click="open = false" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="py-4 px-8">
                <p class="text-gray-600 mb-4">Fill in your details and let our team get back to you.</p>
                <iframe loading="lazy" src="https://www.emedix.in/crm/lead?undefined" frameborder="0" scrolling="no"
                    onload="resizeIframe(this)" style="width: 100%; height: 450px;" id="myIframe"> </iframe>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="script.js" defer></script>
</body>

</html>