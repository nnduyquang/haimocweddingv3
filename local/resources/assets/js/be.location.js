if ($('#btnBrowseImagePCLocation').length) {
    var button1 = document.getElementById('btnBrowseImagePCLocation');
    button1.onclick = function () {
        selectFileWithKCFinder('pathImagePCLocation','showHinhPC');
    }
};
if ($('#btnBrowseImagePCLocation').length) {
    var button1 = document.getElementById('btnBrowseImageMobileLocation');
    button1.onclick = function () {
        selectFileWithKCFinder('pathImageMobileLocation','showHinhMobile');
    }
};