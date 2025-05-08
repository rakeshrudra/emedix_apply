const contents = [
    {
        text: "Our franchise partners gain access to a diverse portfolio of 7 lakh+ SKUs, covering prescription medicines, OTC products, and healthcare essentials, ensuring a one-stop solution for customers",
        image: "/images/icon2/icon2.svg"
    },
    {
        text: "We source all our medicines from trusted and certified manufacturers, ensuring that customers receive safe, high-quality, and authentic pharmaceutical products at competitive prices.",
        image: "/images/icon2/icon1.svg"
    },
    {
        text: "We have been a trusted name in the pharmaceutical industry since 2015, offering a strong foundation for franchise partners.",
        image: "/images/icon2/icon3.svg"
    },
    {
        text: "Our deep understanding of local markets helps us support franchise partners with smarter stocking strategies, customer preferences, pricing and more.",
        image: "/images/icon2/icon4.svg"
    },
    {
        text: "eMedix’s business blueprint is tried and tested, with successful partners already thriving in regions like Ranchi, Ramnagri, Raxaul, etc.",
        image: "/images/icon2/icon5.svg"
    },
    {
        text: "You own 100% of your store with no commissions, royalties, or binding lock-in periods. That means full profits, full freedom, and no pressure to continue if you choose to exit.",
        image: "/images/icon2/icon6.svg"
    }
];

function setActive(index) {
    const items = document.querySelectorAll("#menu li");
    items.forEach((item, i) => {
        item.classList.remove("font-semibold", "text-black", "border-black");
        item.classList.add("text-gray", "border-[rgba(0,0,0,0.1)]");

        if (i === index) {
            item.classList.remove("text-gray", "border-[rgba(0,0,0,0.1)]");
            item.classList.add("font-semibold", "text-black", "border-black");
        }
    });

    document.getElementById("contentText").innerText = contents[index].text;
    document.getElementById("icon").setAttribute('src', contents[index].image);
}

lucide.createIcons();
document.addEventListener('alpine:init', () => {
    Alpine.effect(() => {
        lucide.createIcons();
    });
});


$(document).ready(function () {
    $('.news-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        infinite: true,
        autoPlay: true,
        autoplaySpeed: 2000,
        centerMode: false,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                centerMode: false
            }
        },
        {
            breakpoint: 640,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: '20%'
            }
        }
        ]
    });
    $('.prev-slide').click(function () {
        $('.news-slider').slick('slickPrev');
    });

    $('.next-slide').click(function () {
        $('.news-slider').slick('slickNext');
    });
});

$(document).ready(function () {
    $('.brand-slider').slick({
        slidesToShow: 8,
        slidesToScroll: 1,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        rows: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 640,
                settings: {
                    dots: false,
                    slidesToShow: 3,
                }
            }
        ]
    });
});

$(document).ready(function () {
    $('.investment').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                    centerPadding: '15%'
                }
            }
        ]
    });
    $('.prev-slide').click(function () {
        $('.investment').slick('slickPrev');
    });

    $('.next-slide').click(function () {
        $('.investment').slick('slickNext');
    });
});


$(document).ready(function () {
    $('.story-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: $('.prev-story'),
        nextArrow: $('.next-story'),
        dots: false,
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                    centerPadding: '5%'
                }
            }
        ]
    });
});
$(window).on('load', function () {
    $("#loading").fadeOut("slow");
});