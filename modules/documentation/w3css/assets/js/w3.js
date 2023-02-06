(() => {
  // _javascript/modules/closeAlert.js
  function closeAlert(event) {
    const target = event.target ? event.target : event.srcElement;
    target.parentElement.style.display = "none";
  }

  // _javascript/modules/filterList.js
  function filterList(fieldId = "filter-field", sourceId = "filter-table", dataType = "table") {
    const input = document.getElementById(fieldId);
    const filter = input.value.toUpperCase();
    if (dataType === "table") {
      let td;
      const table = document.getElementById(sourceId);
      const tr = table.getElementsByTagName("tr");
      for (let i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    } else if (dataType === "list") {
      const list = document.getElementById(sourceId);
      const li = list.getElementsByTagName("li");
      for (let i = 0; i < li.length; i++) {
        if (li[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
        } else {
          li[i].style.display = "none";
        }
      }
    }
  }

  // _javascript/modules/toggleAccordion.js
  function toggleAccordion(accordionId, toggleClass = "w3-show", headerActiveClass = "w3-dark-grey", accordionItemClass = "accordion-item") {
    const x = document.getElementById(accordionId);
    const y = document.getElementsByClassName(accordionItemClass);
    for (let i = 0; i < y.length; i++) {
      const accordionItem = y[i];
      if (accordionItem.classList.contains(toggleClass)) {
        accordionItem.classList.remove(toggleClass);
      }
      if (accordionItem.previousElementSibling.classList.contains(headerActiveClass)) {
        accordionItem.previousElementSibling.classList.remove(headerActiveClass);
      }
    }
    if (x.classList) {
      x.classList.toggle(toggleClass);
      x.previousElementSibling.classList.toggle(headerActiveClass);
    } else {
      const toggleClassString = " " + toggleClass;
      if (x.className.indexOf(toggleClass) === -1) {
        x.className += toggleClassString;
      } else {
        x.className = x.className.replace(toggleClassString, "");
      }
    }
  }

  // _javascript/modules/toggleDropdown.js
  function toggleDropdown(dropdownId, toggleClass = "w3-show") {
    const x = document.getElementById(dropdownId);
    if (x.classList) {
      x.classList.toggle(toggleClass);
    } else {
      const toggleClassString = " " + toggleClass;
      if (x.className.indexOf(toggleClass) === -1) {
        x.className += toggleClassString;
      } else {
        x.className = x.className.replace(toggleClassString, "");
      }
    }
  }

  // _javascript/modules/switchTab.js
  function switchTab(event, tabId, tabsClass = "tabs", buttonClass = "tabActivateButton", activeButtonClass = "w3-red") {
    const x = document.getElementsByClassName(tabsClass);
    for (let i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    const activeButton = document.getElementsByClassName(buttonClass);
    const activeButtonClassString = " " + activeButtonClass;
    for (let i = 0; i < x.length; i++) {
      activeButton[i].className = activeButton[i].className.replace(activeButtonClassString, "");
    }
    document.getElementById(tabId).style.display = "block";
    event.currentTarget.className += activeButtonClassString;
  }

  // _javascript/modules/openModal.js
  function openModal(modalId) {
    document.getElementById(modalId).style.display = "block";
  }
  function show(event) {
    const btn = event.target;
    if (btn.parentNode) {
      btn.parentNode.style.display = "block";
    }
  }

  // _javascript/modules/closeModal.js
  function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
  }
  function hide(event) {
    const btn = event.target;
    if (btn.parentNode) {
      btn.parentNode.style.display = "none";
    }
  }

  // _javascript/modules/slider.js
  var slideIndex = 1;
  function slideSwitcher(n) {
    slideIndex = slideIndex + n;
    showSlides(slideIndex);
  }
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  function showSlides(n) {
    const x = document.getElementsByClassName("slide-item");
    const dots = document.getElementsByClassName("slide-dots");
    if (n > x.length) {
      slideIndex = 1;
    }
    if (n < 1) {
      slideIndex = x.length;
    }
    for (let i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    for (let i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    x[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " w3-white";
  }

  // _javascript/modules/tabbedImageGallery.js
  function openTabbedImage(imageId, tabbedImageClass = "tabbed-image-gallery-item", tabbedImageButtonClass = "tabbed-image-gallery-button") {
    const x = document.getElementsByClassName(tabbedImageClass);
    for (let i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    document.getElementById(imageId).style.display = "block";
  }

  // _javascript/modules/progressBar.js
  function moveProgressBar(progressBarId, speed = 10) {
    const elem = document.getElementById(progressBarId);
    let width = 1;
    const id = setInterval(frame, speed);
    function frame() {
      if (width === 100) {
        clearInterval(id);
      } else {
        width++;
        elem.style.width = width + "%";
        elem.innerHTML = width * 1 + "%";
      }
    }
  }

  // _javascript/modules/animation.js
  function animate(animationName = "normal", animatedItemsClass = "animate") {
    const x = document.getElementsByClassName(animatedItemsClass);
    for (let i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    document.getElementById(animationName).style.display = "block";
  }

  // _javascript/modules/lightbox.js
  function openLightbox(modalId = "modalLightOne") {
    document.getElementById(modalId).style.display = "block";
  }
  function closeLightbox(modalId = "modalLightOne") {
    document.getElementById(modalId).style.display = "none";
  }
  var slideIndexLightbox = 1;
  showLightboxItems(slideIndexLightbox);
  function stepLightbox(n, lightboxItemClass = "lightbox-item", dotsClass = "lightbox-dots", captionId = "lightbox-caption-id") {
    showLightboxItems(slideIndexLightbox += n, lightboxItemClass, dotsClass, captionId);
  }
  function currentLightbox(n) {
    showLightboxItems(slideIndexLightbox = n);
  }
  function showLightboxItems(n, lightboxItemClass = "lightbox-item", dotsClass = "lightbox-dots", captionId = "lightbox-caption-id") {
    const x = document.getElementsByClassName(lightboxItemClass);
    const dots = document.getElementsByClassName(dotsClass);
    const captionText = document.getElementById(captionId);
    if (n > x.length) {
      slideIndexLightbox = 1;
    }
    if (n < 1) {
      slideIndexLightbox = x.length;
    }
    for (let i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    for (let i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
    }
    x[slideIndexLightbox - 1].style.display = "block";
    dots[slideIndexLightbox - 1].className += " w3-opacity-off";
    captionText.innerHTML = dots[slideIndexLightbox - 1].alt;
  }

  // _javascript/w3.js
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
  };
  var initialTabButton = document.getElementsByClassName("tabActivateButton")[0];
  initialTabButton.click();
  var firstTabbedImageGalleryButton = document.getElementsByClassName("tabbed-image-gallery-button")[0];
  firstTabbedImageGalleryButton.click();
  window.$.showSlides(1);
  window.$.animate("normal");
})();
//# sourceMappingURL=w3.js.map
