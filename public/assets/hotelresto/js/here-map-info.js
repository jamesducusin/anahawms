
function addMarkerToGroup(group, coordinate, html) {
    var marker = new H.map.Marker(coordinate, { icon: icon });
    // add custom data to the marker
    marker.setData(html);
    group.addObject(marker);
}


var yourMarker  = '../assets/hotelresto/images/icon/marker-icon.png';
var icon = new H.map.Icon(yourMarker);


var markersData = {
    'Hotels': [
        {
            name: 'Anahaw Island View Resort',
            location_latitude: 13.41726792138183,
            location_longitude: 121.159834910780596,
            map_image_url: '../assets/hotelresto/images/hotel/background/bg-image.jpg',
            name_point: 'Anahaw Island View Resort',
            price: '&#8369; 1200',
            rating: 'four-star',
            url_point: 'hotel-single-7.html'
        }
        
    ]
};


function addInfoBubble(map) {
    var group = new H.map.Group();
    map.addObject(group);
    group.addEventListener('tap', function (evt) {
        var bubble =  new H.ui.InfoBubble(evt.target.getGeometry(), {
            content: evt.target.getData()
        });
        // show info bubble
        ui.addBubble(bubble);
    }, false);

    window.addEventListener('resize', () => map.getViewPort().resize());

    for (var key in markersData)
        markersData[key].forEach(function (item) {
            addMarkerToGroup(group, {lat: item.location_latitude, lng: item.location_longitude},
                '<div class="infoBox">' +
                '<div class="marker-detail">' +
                '<img src="' + item.map_image_url + '" alt="Image"/>' +
                '<div class="detail-part">' +
                '<p class="fw-bold">' + item.name_point + '<p>' +
                '<div class="rating ' + item.rating + '">' +
                '<i class="far fa-star"></i>' +
                '<i class="far fa-star"></i>' +
                '<i class="far fa-star"></i>' +
                '<i class="far fa-star"></i>' +
                '<i class="far fa-star"></i>' +
                '</div>' +
                '<span>' + item.price + '</span>' +
                '<a href="' + item.url_point + '">Details</a>' +
                '</div>' +
                '</div>' +
                '</div>');
        })

        
}




var platform = new H.service.Platform({
    'apikey': 'ZgeiOzx728QmUm0pXpsZv-StNqnkEary32Axe8wntVM'
});
var defaultLayers = platform.createDefaultLayers();

var map = new H.Map(document.getElementById('map'),
    defaultLayers.vector.normal.map,{
        center: {lat: 13.41726792138183, lng: 121.15983491078059},
        zoom: 14,
        pixelRatio: window.devicePixelRatio || 1
    });




var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

var ui = H.ui.UI.createDefault(map, defaultLayers);

addInfoBubble(map);
























