import $ from "jquery";

export default (googleMaps, bounds, image, map) => {
    class Overlay extends googleMaps.OverlayView {
        constructor(bounds, image, map) {
            super();

            // Initialize all properties.

            this.bounds_ = bounds;
            this.image_ = image;
            this.map_ = map;
            this.imageLoaded = false;

            // Define a property to hold the image's div. We'll
            // actually create this div upon receipt of the onAdd()
            // method so we'll leave it null for now.
            this.div_ = null;
            // Explicitly call setMap on this overlay.
            this.setMap(map);
        }
        /**
         * onAdd is called when the map's panes are ready and the overlay has been
         * added to the map.
         */
        onAdd() {
            var div = document.createElement("div");
            div.style.borderStyle = "none";
            div.style.borderWidth = "0px";
            div.style.position = "absolute";
            div.style.transition = "500ms opacity ease";
            div.style.transform = "translateZ(0)";

            // Create the img element and attach it to the div.
            var img = document.createElement("img");
            img.src = this.image_;
            img.style.width = "100%";
            img.style.height = "100%";
            img.style.position = "absolute";
            img.style.filter = "brightness(80%)";
            div.appendChild(img);
            this.div_ = div;

            var panes = this.getPanes();

            panes.overlayLayer.appendChild(div);

            this.hide();
        }

        hide() {
            this.div_.style.opacity = 0;
        }

        show() {
            this.div_.style.opacity = 1;
        }

        draw() {
            // We use the south-west and north-east
            // coordinates of the overlay to peg it to the correct position and size.
            // To do this, we need to retrieve the projection from the overlay.
            var overlayProjection = this.getProjection();
            // Retrieve the south-west and north-east coordinates of this overlay
            // in LatLngs and convert them to pixel coordinates.
            // We'll use these coordinates to resize the div.
            var sw = overlayProjection.fromLatLngToDivPixel(
                this.bounds_.getSouthWest()
            );
            var ne = overlayProjection.fromLatLngToDivPixel(
                this.bounds_.getNorthEast()
            );
            // Resize the image's div to fit the indicated dimensions.
            var div = this.div_;
            div.style.left = sw.x + "px";
            div.style.top = ne.y + "px";

            div.style.width = ne.x - sw.x + "px";
            div.style.height = sw.y - ne.y + "px";

            this.imageLoaded = true;
        }
        // The onRemove() method will be called automatically from the API if
        // we ever set the overlay's map property to 'null'.
        onRemove() {
            this.div_.parentNode.removeChild(this.div_);
            this.div_ = null;
        }
    }

    return new Overlay(bounds, image, map);
};
