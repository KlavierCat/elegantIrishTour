// basic setting for map
	var map = new L.Map('map',{
		zoomControl:false,
		//maxZoom:10,
		//minZoom:16,
		//maxBounds:[[55.534053,-10.958147],[51.261036,-4.926653]]
	});

  //map.setView(new L.LatLng(53.4152431,-8.2390307),7);

	//Disable zoom handlers;
	//map.dragging.disable();
	map.touchZoom.disable();
	map.doubleClickZoom.disable();
	map.scrollWheelZoom.disable();

	// Disable tap handler, if present.
	if (map.tap) map.tap.disable();

	map.fitBounds([
		[55.275186, -10.051775],
		[51.497610,-5.657244]
	]);

	var imageUrl= "map/ireland.jpg",
	imageBounds = [[55.534053,-10.958147],[51.261036,-4.926653]]; //northWest, southEast

	L.imageOverlay(imageUrl,imageBounds).addTo(map);
//end of basic setting for map

//styling marker
  var imageIcon = L.icon({
    iconUrl:'map/favicon.png',
    iconSize:[32,32],
    iconAnchor:[16,16]
  });

//points = [ID{str}, Lat{float}, Lng{float}, title{str}, imgURL{str}]
//loaded from attractions.js

//define a function to add markers
var marker = [];
function add_marker(points){
  var i;
	var row_max = points.length;
	//var mapNav = document.getElementById("map-nav");

  for (i=0;i<row_max;i++){
    marker[i] = new L.marker([points[i][1], points[i][2]],{icon:imageIcon});
    marker[i].bindPopup("<b>"+points[i][3]+"</b>"+"<img class='attr-img' src=" + points[i][4]+">");
		marker[i].options.title = points[i][3];
    //marker[i].addTo(map);
		map.addLayer(marker[i]);

		//var rowNode = document.createElement("div");
		//rowNode.className = "attraction";
		//rowNode.innerHTML = points[i][3];
		//rowNode.id = points[i][0];

	//function markerFunction(){
	//	for (i in marker){
	//		var markerID = marker[i].options.title;
	//		if (markerID == rowNode.id){
	//			console.log(markerID + " = " + rowNode.id);
	//				marker[i].openPopup();
	//				break;
	//			};
	//		};
	//	}

	//	rowNode.addEventListener('click', markerFunction, false);
	//	mapNav.appendChild(rowNode);
	};

};

add_marker(points);

//function markerFunction(id){
//	for (i in marker){
//		var markerID = marker[i].options.title;
//		if (markerID == id){
//			console.log(markerID + " = " + id);
//			marker[i].openPopup();
//			break;
//		};
//	};
//};

//$(document).ready(function(){
//	$(".attraction").on("click",function(){
//		markerFunction($(this)[0].id);
//	});
//});
