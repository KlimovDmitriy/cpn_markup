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