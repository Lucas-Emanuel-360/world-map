window.onload = function () {
    var ImageMap = function (map, img) {
        var n,
            areas = map.getElementsByTagName('area'),
            len = areas.length,
            coords = [],
            previousWidth = 2000;
        for (n = 0; n < len; n++) {
            coords[n] = areas[n].coords.split(',');
        }
        this.resize = function () {
            var n, m, clen,
                x = img.offsetWidth / previousWidth;
            for (n = 0; n < len; n++) {
                clen = coords[n].length;
                for (m = 0; m < clen; m++) {
                    coords[n][m] *= x;
                }
                areas[n].coords = coords[n].join(',');
            }
            previousWidth = img.offsetWidth;
            return true;
        };
        window.onresize = this.resize;
    },
        imageMap = new ImageMap(document.getElementById('mapa'), document.getElementById('img'));
    imageMap.resize();
    return;
}

function identificarArea(nomeArea) {
    document.getElementById('areaDestaque')
        .innerHTML = nomeArea;
}