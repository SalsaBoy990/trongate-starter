// Init clean components
document.addEventListener('alpine:init', () => {
    Alpine.data('data', $.data);
    Alpine.data('dropdownData', $.dropdownData);
    Alpine.data('ajaxSearchData', $.ajaxSearchData);
    Alpine.data('modalData', $.modalData);
    Alpine.data('progressBarData', $.progressBarData);
    Alpine.data('animateData', $.animateData);
    Alpine.data('filterData', $.filterData);
    Alpine.data('alertData', $.alertData);
    Alpine.data('sliderData', $.sliderData);
    Alpine.data('lightboxData', $.lightboxData);
    Alpine.data('accordionData', $.accordionData);
    Alpine.data('tabsData', $.tabsData);
    Alpine.data('tabbedImagesData', $.tabbedImagesData);
});

