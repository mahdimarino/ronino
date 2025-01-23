const DEFAULT_REGION_COLOR = '#e6e7fd';
const paths = JQVMap.maps.world_en.paths;
const countryNameToISO = {};
const percentageFormatter = val => val.toFixed(2) + '%';

for (const isoCode in paths) {
  if (paths.hasOwnProperty(isoCode)) {
    const countryName = paths[isoCode].name;
    countryNameToISO[countryName.toLowerCase()] = isoCode;
  }
}

function replaceRegionCodes() {
  document.querySelectorAll("#usRegions .region-label").forEach((regionLabel) => regionLabel.innerText = JQVMap.maps.usa_en.paths[regionLabel.innerText.toLowerCase()]?.name ?? regionLabel.innerText);
  document.querySelectorAll("#caRegions .region-label").forEach((regionLabel) => regionLabel.innerText = JQVMap.maps.canada_en.paths[regionLabel.innerText.toLowerCase()]?.name ?? regionLabel.innerText);
}

document.addEventListener('DOMContentLoaded', function () {
  replaceRegionCodes();

  $('.nav-sidebar .with-sub').on('click', function (e) {
    e.preventDefault()

    $(this).parent().toggleClass('show');
    $(this).parent().siblings().removeClass('show');
  });

  $('.burger-menu').on('click', function (e) {
    e.preventDefault();
    $('body').toggleClass('toggle-sidebar');
  });
});

