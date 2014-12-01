// basic setting for map
	var map = new L.Map('map',{
		zoomControl:false,
		//maxZoom:10,
		//	minZoom:16,
		//maxBounds:[[55.534053,-10.958147],[51.261036,-4.926653]]
	});

  //map.setView(new L.LatLng(53.4152431,-8.2390307),7);

	//Disable zoom handlers, disable dragging function;
	map.dragging.disable();
	map.touchZoom.disable();
	map.doubleClickZoom.disable();
	map.scrollWheelZoom.disable();

	// Disable tap handler, if present.
	if (map.tap) map.tap.disable();

	map.fitBounds([
		[55.275186, -10.051775],
		[51.497610,-5.657244]
	]);

  //map.panTo(new L.LatLng(53.4152431,-8.2390307));

	var imageUrl= "map/ireland.jpg",
	imageBounds = [[55.534053,-10.958147],[51.261036,-4.926653]]; //northWest, southEast

	L.imageOverlay(imageUrl,imageBounds).addTo(map);
//end of basic setting for map

//styling marker
  var imageIcon = L.icon({
    iconUrl:'map/favicon.png',
    iconSize:[32,32],
    iconAnchor:[16,16]
  })

//points = [ID{int}, Lat{float}, Lng{float}, title{str}]
  var points=[
    [0, 55.240807, -6.511555, "Giant's Causeway"],
    [1, 54.608018, -5.910215, "Titanic Belfast"],
    [2, 53.561639, -9.889313, "Kylmore Abbey"],
    [3, 53.007646,-9.001707, "The Burren"],
    [4, 52.9718815, -9.426506, "Cliffs of Moher"],
    [5, 53.534451, -9.284623, "Ashford Castle"],
    [6, 53.694712, -6.475492, "Newgrange"],
    [7, 53.3243201, -6.251695, "Dublin City"],
    [8, 52.650462, -7.249298, "Kilkenny Castle"],
    [9, 52.259476, -7.106794, "Waterford Crystal"],
    [10, 52.005845, -9.55618, "Killarney National Park"],
    [11, 51.929092,-8.570885, "Blarney Castle"]
  ]

//define a function to add markers
function add_marker(points){
  var marker = [];
  var i;
  for (i=0;i<points.length;i++){
    marker[i] = new L.marker([points[i][1], points[i][2]],{icon:imageIcon});
    marker[i].bindPopup("<b>"+points[i][3]+"</b>");
    marker[i].addTo(map);
  }
}

add_marker(points);
