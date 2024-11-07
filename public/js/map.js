import * as L from "./leaflet/leaflet-src.esm.js";

const map = L.map('map').setView([51.5074, -0.1278], 7);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

function calculatePriceRange(markerPrice) {
    let calPriceRange = '';
    let iconColor = '';

    if (markerPrice < 100000) {
        var interval = 20000;
        iconColor = 'green'
    } else if (markerPrice < 300000) {
        var interval = 50000;
        iconColor = 'yellow'
    } else {
        var interval = 100000;
        iconColor = 'red'
    }

    const lowerBound = Math.floor(markerPrice / interval) * interval;
    const upperBound = lowerBound + interval;

    calPriceRange = '£' + Math.floor(lowerBound / 1000) + 'k - £' + Math.floor(upperBound / 1000) + 'k';

    return { 'price_range': calPriceRange, 'icon_color': iconColor };
}

const markerGroups = {};
const priceGroups = {};

var filters = document.getElementById('filter-options');
var priceFilters = document.getElementById('price-filter-options');

function createMarker(latitude, longitude, name, price, type) {
    var priceRange = {}
    if(typeof price == 'number'){
        priceRange = calculatePriceRange(price);
    }
    const marker = L.marker([latitude, longitude],{ icon: new L.Icon({
            iconUrl: `../map-images/markers/${priceRange.icon_color ?? 'green'}.png`,
            shadowUrl: '../map-images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
        })
    }).bindPopup(`${name} - £${price}`);


    if (!markerGroups[type]) {
        var div = filters.appendChild(document.createElement('div'));
        div.innerHTML = `<input type="checkbox" id="${type}" class="marker-filter" value="${type}" checked>
        <label for="${type}">${type}</label>`;
        filters.appendChild(div);
        markerGroups[type] = L.layerGroup().addTo(map);
    }
    marker.addTo(markerGroups[type]);
    if(Object.keys(priceRange).length != 0){
        if (!priceGroups[priceRange?.price_range]) {
            priceGroups[priceRange?.price_range] = [];
        }
        priceGroups[priceRange?.price_range].push(marker);
    }
}
async function addPriceFilter(){
    Object.keys(priceGroups).forEach(el =>{
        var div = priceFilters.appendChild(document.createElement('div'));
        div.innerHTML = `<input type="checkbox" id="${el}" class="price-range-filter" value="${el}" checked>
        <label for="${el}">${el}</label>`;
        priceFilters.appendChild(div);
    })
}
async function fetchMarker() {
    await fetch('/getMarkers')
        .then(response => response.json())
        .then(data => {
            data.results.forEach((item) => {
                createMarker(item.longitude, item.latitude, item.address, item.price, item.type);
            });
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
}

async function filterMarker() {
    $('#filter-options .marker-filter').on('click', async function () {
        const value = $(this).val();
        const isChecked = $(this).prop('checked');
        const type = value;
        if (isChecked) {
            map.addLayer(markerGroups[type]);
        } else {
            map.removeLayer(markerGroups[type]);
        }
    });
    $('#price-filter-options .price-range-filter').on('click', async function () {
        const value = $(this).val();
        const isChecked = $(this).prop('checked');
        const selectedPriceRange = value;
            if (isChecked) {
                priceGroups[selectedPriceRange].forEach(marker => {
                    marker.addTo(map);
                });
            } else {
                priceGroups[selectedPriceRange].forEach(marker => {
                    map.removeLayer(marker);
                });
            }

    });
}

window.onload = async function () {
    await fetchMarker();
    await addPriceFilter();
    await filterMarker();
};
