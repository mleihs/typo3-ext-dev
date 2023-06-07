(() => {
    document.querySelectorAll('[data-map]').forEach(mapElement => {
        let mapData = mapElement.dataset;        
        let oeawmap = L.map(mapElement).setView([mapData["lat"], mapData["lon"]], mapData["zoom"]);
                
        new L.tileLayer('https://maps{s}.wien.gv.at/basemap/bmapgrau/normal/google3857/{z}/{y}/{x}.{format}', {
            maxZoom: 19,
            attribution: 'Datenquelle: <a href="https://www.basemap.at">basemap.at</a>',
            subdomains: ["", "1", "2", "3", "4"],
            format: 'png',
        }).addTo(oeawmap);
        
        var icon = 'data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJFYmVuZV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIgIA0gICAgICAgICAgd2lkdGg9IjQ0cHgiIGhlaWdodD0iNDRweCIgdmlld0JveD0iMCAwIDI0IDI0IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAyNCAyNCIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+ICANICAgICAgICA8Zz4gIA0gICAgICAgICA8ZGVmcz4gIA0gICAgICAgICA8cmVjdCBpZD0iU1ZHSURfN18iIHg9IjAiIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIvPiAgDSAgICAgICAgIDwvZGVmcz4gIA0gICAgICAgICA8Y2xpcFBhdGggaWQ9IlNWR0lEXzJfIj4gIA0gICAgICAgICA8dXNlIHhsaW5rOmhyZWY9IiNTVkdJRF83XyIgIG92ZXJmbG93PSJ2aXNpYmxlIi8+ICANICAgICAgICAgPC9jbGlwUGF0aD4gIA0gICAgICAgICA8cGF0aCBjbGlwLXBhdGg9InVybCgjU1ZHSURfMl8pIiBmaWxsPSIjMDA0N0JCIiBkPSJNMTUsOWMwLDEuNjU4LTEuMzQzLDMtMywzcy0zLTEuMzQyLTMtM2MwLTEuNjU3LDEuMzQzLTMsMy0zUzE1LDcuMzQzLDE1LDkgIA0gICAgICAgICAgTTIxLDkuMDE4QzIxLDQuMDM4LDE2Ljk3MSwwLDEyLDBTMyw0LjAzOCwzLDkuMDE4YzAsMi4wMzcsMC42ODMsMy45MSwxLjgyLDUuNDJsLTAuMDA4LDAuMDA2TDEyLDI0bDcuMTg4LTkuNTU2bC0wLjAwOC0wLjAwNiAgDSAgICAgICAgIEMyMC4zMTcsMTIuOTI4LDIxLDExLjA1NSwyMSw5LjAxOCIvPiAgDSAgICAgICAgPC9nPiAgDSAgICAgICAgPC9zdmc+IA==';
        var oeawicon = L.icon({
            iconUrl: icon,
            
            iconSize:     [32, 32], // size of the icon
            shadowSize:   [50, 64], // size of the shadow
            iconAnchor:   [16, 32], // point of the icon which will correspond to marker's location
            popupAnchor:  [-1, -46] // point from which the popup should open relative to the iconAnchor
        });
        
        mapElement.querySelectorAll('[data-marker]').forEach(markerElement => {
            let markerData = markerElement.dataset;
            L.marker([markerData["lat"], markerData["lon"]], {icon: oeawicon}).addTo(oeawmap)
                .bindPopup(markerData["title"])
                .openPopup()
            ;
            L.popup();
        });
    });
})();
