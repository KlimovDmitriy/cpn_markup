ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map("map", {
            center: [59.93, 30.31],
            zoom: 10,
            controls: [],
        }),


        myPlacemark2 = new ymaps.Placemark([59.93, 30.31], {
            // Свойства.
            hintContent: 'Собственный значок метки'
        }, {
            // Опции.
            // Своё изображение иконки метки.
            iconLayout: 'default#imageWithContent',
            iconImageHref: 'img/map-icon.png',
            // Размеры метки.
            iconImageSize: [25, 30],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-3, -42]
        });

    //myMap.controls.add('smallZoomControl');
    // Добавляем все метки на карту.
    myMap.geoObjects.add(myPlacemark2)
}

$(document).ready(function () {
    var owlPosition = $("#owl-position");
    var owlSlider = $("#owl-slider");
    var owlPhoto = $("#owl-photo");
    owlPosition.owlCarousel({
        loop:true,
        margin:20,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    })
    owlSlider.owlCarousel({
        loop:true,
        margin:20,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    })
    owlPhoto.owlCarousel({
        loop:true,
        margin:20,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
    $("#position-prev").click(function(){
        owlPosition.trigger('prev.owl.carousel');
    })
    $("#position-next").click(function(){
        owlPosition.trigger('next.owl.carousel');
    })
    $("#slider-prev").click(function(){
        owlSlider.trigger('prev.owl.carousel');
    })
    $("#slider-next").click(function(){
        owlSlider.trigger('next.owl.carousel');
    })
    $("#photo-prev").click(function(){
        owlPhoto.trigger('prev.owl.carousel');
    })
    $("#photo-next").click(function(){
        owlPhoto.trigger('next.owl.carousel');
    })
})