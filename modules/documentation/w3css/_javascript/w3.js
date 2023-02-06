import {closeAlert} from './modules/closeAlert';
import {filterList} from './modules/filterList';
import {toggleAccordion} from "./modules/toggleAccordion";
import {toggleDropdown} from "./modules/toggleDropdown";
import {switchTab} from "./modules/switchTab";
import {openModal, show} from "./modules/openModal";
import {closeModal, hide} from "./modules/closeModal";
import {slideSwitcher, currentSlide, showSlides, slideIndex} from "./modules/slider";
import {openTabbedImage} from "./modules/tabbedImageGallery";
import {moveProgressBar} from "./modules/progressBar";
import {animate} from "./modules/animation";
import {openLightbox,closeLightbox, currentLightbox, showLightboxItems, stepLightbox, slideIndexLightbox} from "./modules/lightbox";

window.$ = {
    closeAlert,
    filterList,
    toggleAccordion,
    toggleDropdown,
    switchTab,
    openModal,
    closeModal,
    show,
    hide,
    slideSwitcher,
    currentSlide,
    showSlides,
    openTabbedImage,
    moveProgressBar,
    animate,
    openLightbox,
    closeLightbox,
    currentLightbox,
    stepLightbox,
    showLightboxItems
}

// Initial state on load (first tab)
const initialTabButton = document.getElementsByClassName("tabActivateButton")[0];
initialTabButton.click();

// Initial state on load (first tab)
const firstTabbedImageGalleryButton = document.getElementsByClassName("tabbed-image-gallery-button")[0];
firstTabbedImageGalleryButton.click();

// Initial state (show first slide on load)
window.$.showSlides(1);

// Initialize animation
window.$.animate("normal")
