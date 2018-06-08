    var map, head, insertBefore, appendChild, mapApi;

    head = document.getElementsByTagName('head')[0];
    insertBefore = head.insertBefore;
    appendChild = head.appendChild;

    if(document.getElementById('map') !== null) {
        mapApi = document.createElement('script');
        mapApi.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyC_XaLtOX8vgeRAIeqgdfHh9q1lNTIS3Y0&callback=initMap'; // set the source of the script to your script
        document.getElementsByTagName('head')[0].appendChild(mapApi);
    }

    function initMap() {
      var SS = {lat: 50.428115, lng: 30.520229};
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: SS,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        draggable: true,
        styles:

    [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]

      });

     var marker = new google.maps.Marker({
        //icon: 'http://brist.webiart.com.ua/mt-content/uploads/2016/10/logo3.png',
       // position: new google.maps.LatLng(50.433464, 30.513194),
        map: map,
        title: 'Bristol map'
        //animation: google.maps.Animation.BOUNCE,
        //label: 'B',
        //fillColor : 'black'
        //icon: 'target.png'
      });
        /*marker.addListener('click', function() {
        infowindow.open(map, marker);
        });*/

    var polygonCoords = [
    new google.maps.LatLng(50.433919, 30.513405),
    new google.maps.LatLng(50.433924, 30.512895),
    new google.maps.LatLng(50.433408, 30.512668),
    new google.maps.LatLng(50.433336, 30.513424),
    new google.maps.LatLng(50.433919, 30.513405)
    ];

    // Настройки для полигона
    var polygon = new google.maps.Polygon({
    path: polygonCoords, // Координаты
    strokeColor: '#FF0000',
    strokeOpacity: 0,
    strokeWeight: 2,
    fillColor: '#FF0000',
    fillOpacity: 0

    });


    // Добавляем на карту
    polygon.setMap(map);
    //polygon2.setMap(map);

    var infoBubble, infoBubble2, infoBubble3, infoBubble4, infoBubble5, infoBubble6, infoBubble7, infoBubble8, infoBubble9,
    infoBubble10, infoBubble11, infoBubble12;
    var marker = new google.maps.Marker({
    map: map,
    position: new google.maps.LatLng(50.426528, 30.514185),
    //draggable: true,
    //animation: google.maps.Animation.BOUNCE,
    icon: '/img/pin/xbr33.png',
    width: 50,
    });
    infoBubble = new InfoBubble({
    map: map,
    content: '<div class="phoneytext" style="text-align:center;">New York Concept house'+
    '<hr>'+
    '<img src="/img/pin/ny.jpg" alt="ny" width="130"/>'+
    '</div>',
    //position: new google.maps.LatLng(50.408537, 30.525904),
    //	50.43545681, 30.51317453
    shadowStyle: 1,
    padding: 0,
    backgroundColor: 'rgba(255,255,255,1)',
    borderRadius: 4,
    arrowSize: 10,
    borderWidth: 0,
    borderColor: '#ff000b',
    disableAutoPan: true,
    hideCloseButton: true,
    arrowPosition: 5,
    backgroundClassName: 'phoney',
    arrowStyle: 2,
    width: 450,
    height: 180,
    });

    infoBubble.open();
    marker.addListener('click', function() {
    infoBubble.open(map, marker);
    infoBubble2.close();infoBubble3.close();infoBubble4.close();infoBubble5.close();infoBubble6.close();infoBubble7.close();infoBubble8.close();infoBubble9.close();
    infoBubble10.close();/*infoBubble11.close();infoBubble12.close();*/});
    google.maps.event.addListener(map, "click", function () {
    infoBubble.close();
    });


    var marker2 = new google.maps.Marker({
    map: map,
    position: new google.maps.LatLng(50.421797, 30.518323),
    //draggable: true,
    icon: '/img/pin/market.png'
    });
    infoBubble2 = new InfoBubble({
    map: map,
    content: '<div class="phoneytext" style="text-align:center;">Владимирский базар'+
    '<hr>'+
    '<img src="/img/pin/market.jpg" width="180px">'+
    '</div>',
    position: new google.maps.LatLng(50.40564908, 30.50567508),
    shadowStyle: 1,
    padding: 0,
    backgroundColor: '#ffffff',
    borderRadius: 4,
    arrowSize: 10,
    borderWidth: 0,
    borderColor: '#ff000b',
    disableAutoPan: true,
    hideCloseButton: true,
    arrowPosition: 30,
    backgroundClassName: 'phoney',
    arrowStyle: 2
    });
    //infoBubble2.open();
    marker2.addListener('click', function() {
    infoBubble2.open(map, marker2);
    infoBubble.close();infoBubble3.close();infoBubble4.close();infoBubble5.close();infoBubble6.close();infoBubble7.close();infoBubble8.close();infoBubble9.close();infoBubble10.close();
    /*infoBubble11.close();*/
    });

    google.maps.event.addListener(map, "click", function () {infoBubble2.close();});

                                                              // Костел св Николая
    var marker3 = new google.maps.Marker({
    map: map,
    position: new google.maps.LatLng(50.4269588,30.516574),
    //draggable: true,
    icon: '/img/pin/kostel.png'
    });
    infoBubble3 = new InfoBubble({
    map: map,
    content: '<div class="phoneytext" style="text-align:center;">Костел Св.Николая <br> расстояние 200м'+
    '<hr>'
    +'<img src="/img/pin/kostel.jpg" width="180px">'+'</div>',
    position: new google.maps.LatLng(50.458463, 30.413444),
    shadowStyle: 1,
    padding: 0,
    backgroundColor: '#ffffff',
    borderRadius: 4,
    arrowSize: 10,
    borderWidth: 0,
    borderColor: '#ff000b',
    disableAutoPan: true,
    hideCloseButton: true,
    arrowPosition: 30,
    backgroundClassName: 'phoney',
    arrowStyle: 2
    });

    //infoBubble2.open();
    marker3.addListener('click', function() {
    infoBubble3.open(map, marker3);infoBubble.close();infoBubble2.close();infoBubble4.close();infoBubble5.close();infoBubble6.close();infoBubble7.close();infoBubble8.close();infoBubble9.close();infoBubble10.close();/*infoBubble11.close();
    infoBubble12.close();*/
    });

    google.maps.event.addListener(map, "click", function () {
    infoBubble3.close();
    });
    var marker4 = new google.maps.Marker({
    map: map,
    position: new google.maps.LatLng( 50.432159, 30.512580),
    //draggable: true,
    icon: '/img/pin/market.png'

    });
    infoBubble4 = new InfoBubble({
    map: map,
    content: '<div class="phoneytext" style="text-align:center;">Супермаркет "МЕГАМАРКЕТ"'+
    '<hr>'+
    '<img src="/img/pin/megamarket.jpg" alt="market" width="180px"/>'+
    '</div>',
    position: new google.maps.LatLng(50.432159, 30.512580),
    shadowStyle: 1,
    padding: 0,
    backgroundColor: '#ffffff',
    borderRadius: 4,
    arrowSize: 10,
    borderWidth: 0,
    borderColor: '#ff000b',
    disableAutoPan: true,
    hideCloseButton: true,
    arrowPosition: 30,
    backgroundClassName: 'phoney',
    arrowStyle: 2
    });

    //infoBubble2.open();
    marker4.addListener('click', function() {
    infoBubble4.open(map, marker4);
    infoBubble.close();infoBubble2.close();infoBubble3.close();infoBubble5.close();infoBubble6.close();infoBubble7.close();infoBubble8.close();infoBubble9.close();infoBubble10.close();/*infoBubble11.close();*/

    });
                                                                      // Стадион
    google.maps.event.addListener(map, "click", function () {
    infoBubble4.close();
    });
    var marker5 = new google.maps.Marker({
    map: map,
    position: new google.maps.LatLng(50.432758, 30.521413),
    //draggable: true,
    icon: '/img/pin/stadium.png'

    });
    infoBubble5 = new InfoBubble({
    map: map,
    content: '<div class="phoneytext" style="text-align:center;">НСК"ОЛИМПИЙСЬКИЙ"'+
    '<hr>'+
    '<img src="/img/pin/stadium.jpg" alt="stadium" width="180px"/>'+
    '</div>',
    position: new google.maps.LatLng(50.432758, 30.521413),
    shadowStyle: 1,
    padding: 0,
    backgroundColor: '#ffffff',
    borderRadius: 4,
    arrowSize: 10,
    borderWidth: 0,
    borderColor: '#ff000b',
    disableAutoPan: true,
    hideCloseButton: true,
    arrowPosition: 30,
    backgroundClassName: 'phoney',
    arrowStyle: 2
    });

    //infoBubble2.open();
    marker5.addListener('click', function() {
    infoBubble5.open(map, marker5);
    infoBubble.close();infoBubble2.close();infoBubble3.close();infoBubble4.close();infoBubble6.close();infoBubble7.close();infoBubble8.close();infoBubble9.close();infoBubble10.close();/*infoBubble11.close();*/
    });
    google.maps.event.addListener(map, "click", function () {
    infoBubble5.close();
    });

                                                                    // школа

    var marker6 = new google.maps.Marker({
    map: map,
    position: new google.maps.LatLng(50.431036, 30.515070),
    //draggable: true,
    icon: '/img/pin/school.png'

    });
    infoBubble6 = new InfoBubble({
    map: map,
    content: '<div class="phoneytext" style="text-align:center;">Специализированная школа № 112 <br>им. Т.Г.Шевченка с углубленным<br> изучением иностранных языков'+
    '<hr>'+
    '<img src="/img/pin/school112.jpg" alt="school" width="180px"/>'+
    '</div>',
    position: new google.maps.LatLng(50.431036, 30.515070),
    shadowStyle: 1,
    padding: 0,
    backgroundColor: '#ffffff',
    borderRadius: 4,
    arrowSize: 10,
    borderWidth: 0,
    borderColor: '#ff000b',
    disableAutoPan: true,
    hideCloseButton: true,
    arrowPosition: 30,
    backgroundClassName: 'phoney',
    arrowStyle: 2
    });

    marker6.addListener('click', function() {
    infoBubble6.open(map, marker6);
    infoBubble.close();infoBubble2.close();infoBubble3.close();infoBubble4.close();infoBubble5.close();infoBubble7.close();infoBubble8.close();infoBubble9.close();infoBubble10.close();/*infoBubble11.close();*/
    });
    google.maps.event.addListener(map, "click", function () {
    infoBubble6.close();
    });

                                                                                    /*Метро Олимпийская*/

    var marker7 = new google.maps.Marker({
    map: map,
    position: new google.maps.LatLng(50.432316, 30.516581),
    //draggable: true,
    icon: '/img/pin/metro.png'

    });
    infoBubble7 = new InfoBubble({
    map: map,
    content: '<div class="phoneytext" style="text-align:center;">Метро Олимпийская'+
    '</div>',
    position: new google.maps.LatLng(50.432316, 30.516581),
    shadowStyle: 1,
    padding: 0,
    backgroundColor: '#ffffff',
    borderRadius: 4,
    arrowSize: 10,
    borderWidth: 0,
    borderColor: '#ff000b',
    disableAutoPan: true,
    hideCloseButton: true,
    arrowPosition: 30,
    backgroundClassName: 'phoney',
    arrowStyle: 2
    });

    marker7.addListener('click', function() {
    infoBubble7.open(map, marker7);
    infoBubble.close();infoBubble2.close();infoBubble3.close();infoBubble4.close();infoBubble5.close();infoBubble6.close();infoBubble8.close();infoBubble9.close();infoBubble10.close();/*infoBubble11.close();
    */
    });
    google.maps.event.addListener(map, "click", function () {
    infoBubble7.close();
    });

                                                                        /*парк */

    var marker8 = new google.maps.Marker({
    map: map,
    position: new google.maps.LatLng(50.427613, 30.514858),
    //draggable: true,
    icon: '/img/pin/park.png'

    });
    infoBubble8 = new InfoBubble({
    map: map,
    content: '<div class="phoneytext" style="text-align:center;">Сквер'+
    '<img src="/img/pin/skver.jpg" alt="school" width="180px"/>'+
    '</div>',
    position: new google.maps.LatLng(50.427613, 30.514858),
    shadowStyle: 1,
    padding: 0,
    backgroundColor: '#ffffff',
    borderRadius: 4,
    arrowSize: 10,
    borderWidth: 0,
    borderColor: '#ff000b',
    disableAutoPan: true,
    hideCloseButton: true,
    arrowPosition: 30,
    backgroundClassName: 'phoney',
    arrowStyle: 2
    });


    marker8.addListener('click', function() {
    infoBubble8.open(map, marker8);
    infoBubble.close();infoBubble2.close();infoBubble3.close();infoBubble4.close();infoBubble5.close();infoBubble6.close();infoBubble7.close();infoBubble9.close();infoBubble10.close();
    /*infoBubble11.close();*/
    });

    google.maps.event.addListener(map, "click", function () {
    infoBubble8.close();
    });

                                                                        /*!!метро Дворец "Украина"*/
    var marker9 = new google.maps.Marker({
    map: map,
    position: new google.maps.LatLng(50.420626, 30.521139),
    //draggable: true,
    icon: '/img/pin/metro.png'

    });
    infoBubble9 = new InfoBubble({
    map: map,
    content: '<div class="phoneytext" style="text-align:center;">Метро Дворец "Украина"'+
    '</div>',
    position: new google.maps.LatLng(50.420626, 30.521139),
    shadowStyle: 1,
    padding: 0,
    backgroundColor: '#ffffff',
    borderRadius: 4,
    arrowSize: 10,
    borderWidth: 0,
    borderColor: '#ff000b',
    disableAutoPan: true,
    hideCloseButton: true,
    arrowPosition: 30,
    backgroundClassName: 'phoney',
    arrowStyle: 2
    });

    marker9.addListener('click', function() {
    infoBubble9.open(map, marker9);
    infoBubble.close();infoBubble2.close();infoBubble3.close();infoBubble4.close();infoBubble5.close();infoBubble6.close();infoBubble7.close();infoBubble8.close();infoBubble10.close();/*infoBubble11.close();infoBubble12.close();*/
    });
    google.maps.event.addListener(map, "click", function () {
    infoBubble9.close();
    });

                                                                                        /*школа*/
    var marker10 = new google.maps.Marker({
    map: map,
    position: new google.maps.LatLng(50.417387, 30.521545),
    //draggable: true,
    icon: '/img/pin/school.png'

    });
    infoBubble10 = new InfoBubble({
    map: map,
    content: '<div class="phoneytext" style="text-align:center;">Специализированная школа №130'+
    '<hr>'+
    '<p></p>'+
    '</div>',
    position: new google.maps.LatLng(50.417387, 30.521545),
    shadowStyle: 1,
    padding: 0,
    backgroundColor: '#ffffff',
    borderRadius: 4,
    arrowSize: 10,
    borderWidth: 0,
    borderColor: '#ff000b',
    disableAutoPan: true,
    hideCloseButton: true,
    arrowPosition: 30,
    backgroundClassName: 'phoney',
    arrowStyle: 2
    });
    marker10.addListener('click', function() {
    infoBubble10.open(map, marker10);
    infoBubble.close();infoBubble2.close();infoBubble3.close();infoBubble4.close();infoBubble5.close();infoBubble6.close();infoBubble7.close();infoBubble8.close();infoBubble10.close();/*infoBubble11.close();
    */
    });
    google.maps.event.addListener(map, "click", function () {
    infoBubble10.close();
    });


    }

    head.insertBefore = function (newElement, referenceElement) {
        if (newElement.type === 'text/css') {
            return;
        }
        insertBefore.call(head, newElement, referenceElement);
    };

    head.appendChild = function (newElement, referenceElement) {
        if (newElement.type === 'text/css') {
            return;
        }
        appendChild.call(head, newElement, referenceElement);
    };
