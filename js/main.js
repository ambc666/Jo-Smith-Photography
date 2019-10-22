function resetPage() { //Reset button - Used on Contact page 
            window.location.reload(); 
        }

var myMap = L.map('myMap').setView([56.465, -2.865], 13); //For my map - how far out I start
L.tileLayer('https://api.mapbox.com/styles/v1/ambc666/cjqvlxelx8zdy2ro6beo5m8we/tiles/256/{z}/{x}/{y}@2x?access_token=pk.eyJ1IjoiYW1iYzY2NiIsImEiOiJjanF2azF0bTYwaHJyNDJud3p2YWRiM280In0.TKib-O2YgHBQSFXqM01I0Q', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 17, //How far in I can go
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiYW1iYzY2NiIsImEiOiJjanF2azF0bTYwaHJyNDJud3p2YWRiM280In0.TKib-O2YgHBQSFXqM01I0Q'
}).addTo(myMap);

var marker = L.marker([56.46506, -2.864564]).addTo(myMap); //For my marker
marker.bindPopup("<b>Im located here</b><br>Feel free to pop in <br>for a chat and a tea<br><b>or contact me below</b>").openPopup();
