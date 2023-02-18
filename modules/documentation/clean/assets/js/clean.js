(() => {
  // _javascript/modules/data.js
  function data() {
    return {
      scrollTop: 0,
      darkMode: localStorage.getItem("darkMode") === "true",
      toggleDarkMode() {
        this.darkMode = !this.darkMode;
      },
      isDarkModeOn() {
        return this.darkMode === true;
      },
      setScrollToTop() {
        this.scrollTop = document.body.scrollTop;
      },
      scrollToTop() {
        document.body.scrollTop = 0;
      },
      init() {
        this.$watch("darkMode", (val) => localStorage.setItem("darkMode", val));
      }
    };
  }

  // _javascript/modules/tabsData.js
  function tabsData() {
    return {
      tabId: "",
      tabsClass: "tabs",
      buttonClass: "tabActivateButton",
      activeButtonClass: "red",
      init() {
        this.tabId = "London";
        this.tabsClass = "tabs";
        this.buttonClass = "tabActivateButton";
        this.activeButtonClass = "red";
        this.switchTab(this.tabId);
      },
      switchTab(tabId) {
        this.tabId = tabId;
        const x = document.getElementsByClassName(this.tabsClass);
        for (let i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        const activeButton = document.getElementsByClassName(this.buttonClass);
        const activeButtonClassString = " " + this.activeButtonClass;
        for (let i = 0; i < x.length; i++) {
          activeButton[i].className = activeButton[i].className.replace(activeButtonClassString, "");
        }
        document.getElementById(this.tabId).style.display = "block";
      }
    };
  }

  // _javascript/modules/accordionData.js
  function accordionData() {
    return {
      accordionId: "",
      sameClick: false,
      toggleClass: "",
      headerActiveClass: "",
      accordionItemClass: "",
      init() {
        this.accordionId = "";
        this.sameClick = false;
        this.toggleClass = "show";
        this.headerActiveClass = "dark-grey";
        this.accordionItemClass = "accordion-item";
      },
      toggleAccordion(accordionId = "") {
        if (this.accordionId === accordionId) {
          this.accordionId = accordionId;
          const x = document.getElementById(this.accordionId);
          if (this.sameClick === false) {
            x.classList.remove(this.toggleClass);
            x.previousElementSibling.classList.remove(this.headerActiveClass);
            this.sameClick = true;
          } else {
            x.classList.add(this.toggleClass);
            x.previousElementSibling.classList.add(this.headerActiveClass);
            this.sameClick = false;
          }
        } else {
          this.sameClick = false;
          this.accordionId = accordionId;
          const x = document.getElementById(this.accordionId);
          const y = document.getElementsByClassName(this.accordionItemClass);
          for (let i = 0; i < y.length; i++) {
            const accordionItem = y[i];
            if (accordionItem.classList.contains(this.toggleClass)) {
              accordionItem.classList.remove(this.toggleClass);
            }
            if (accordionItem.previousElementSibling.classList.contains(this.headerActiveClass)) {
              accordionItem.previousElementSibling.classList.remove(this.headerActiveClass);
            }
          }
          if (x.classList) {
            x.classList.toggle(this.toggleClass);
            x.previousElementSibling.classList.toggle(this.headerActiveClass);
          } else {
            const toggleClassString = " " + this.toggleClass;
            if (x.className.indexOf(this.toggleClass) === -1) {
              x.className += toggleClassString;
            } else {
              x.className = x.className.replace(toggleClassString, "");
            }
          }
        }
      }
    };
  }

  // _javascript/modules/lightboxData.js
  function lightboxData() {
    return {
      openLighbox: false,
      slideIndexLightbox: 1,
      lightboxItemClass: "",
      dotsClass: "",
      captionId: "",
      init() {
        this.openLighbox = false;
        this.slideIndexLightbox = 1;
        this.lightboxItemClass = "lightbox-item";
        this.dotsClass = "lightbox-dots";
        this.captionId = "lightbox-caption-id";
      },
      openLightbox() {
        this.openLighbox = true;
      },
      closeLightbox() {
        this.openLighbox = false;
      },
      stepLightbox(n) {
        this.showLightboxItems(this.slideIndexLightbox += n);
      },
      currentLightbox(n) {
        this.showLightboxItems(this.slideIndexLightbox = n);
      },
      showLightboxItems(n) {
        const x = document.getElementsByClassName(this.lightboxItemClass);
        const dots = document.getElementsByClassName(this.dotsClass);
        const captionText = document.getElementById(this.captionId);
        if (n > x.length) {
          this.slideIndexLightbox = 1;
        }
        if (n < 1) {
          this.slideIndexLightbox = x.length;
        }
        for (let i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        for (let i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" opacity-off", "");
        }
        x[this.slideIndexLightbox - 1].style.display = "block";
        dots[this.slideIndexLightbox - 1].className += " opacity-off";
        captionText.innerHTML = dots[this.slideIndexLightbox - 1].alt;
      }
    };
  }

  // _javascript/modules/sliderData.js
  function sliderData() {
    return {
      slideIndex: 1,
      slideItemClass: "slide-item",
      slideDotsClass: "slide-dots",
      init() {
        this.slideIndex = 1;
        this.showSlides(this.slideIndex);
      },
      switchSlide(n) {
        this.slideIndex = this.slideIndex + n;
        this.showSlides(this.slideIndex);
      },
      currentSlide(n) {
        this.showSlides(this.slideIndex = n);
      },
      showSlides(n) {
        const x = document.getElementsByClassName(this.slideItemClass);
        const dots = document.getElementsByClassName(this.slideDotsClass);
        if (n > x.length) {
          this.slideIndex = 1;
        }
        if (n < 1) {
          this.slideIndex = x.length;
        }
        for (let i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        for (let i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" white", "");
        }
        x[this.slideIndex - 1].style.display = "block";
        dots[this.slideIndex - 1].className += " white";
      }
    };
  }

  // _javascript/modules/modalData.js
  function modalData() {
    return {
      modal: false,
      openModal() {
        this.modal = true;
      },
      closeModal() {
        this.modal = false;
      }
    };
  }

  // _javascript/modules/alertData.js
  function alertData() {
    return {
      openAlert: true,
      showAlert() {
        this.openAlert = true;
      },
      hideAlert() {
        this.openAlert = false;
      }
    };
  }

  // _javascript/modules/progressBarData.js
  function progressBarData() {
    return {
      speed: 30,
      width: 2,
      label: "",
      id: 0,
      triggerMove() {
        this.id = window.setInterval(() => this.move(), this.speed);
      },
      move() {
        if (this.width === 100) {
          clearInterval(this.id);
          this.width = 2;
          this.label = "";
        } else {
          this.width++;
          this.label = this.width + "%";
        }
      }
    };
  }

  // _javascript/modules/animateData.js
  function animateData() {
    return {
      target: "",
      animate(animationName) {
        this.target = animationName || "normal";
      }
    };
  }

  // _javascript/modules/filterData.js
  function filterData() {
    return {
      filterTerm: "",
      dataType: "table",
      sourceId: "filter-table",
      filter() {
        switch (this.dataType) {
          case "table":
            let td;
            const table = document.getElementById(this.sourceId);
            const tr = table.getElementsByTagName("tr");
            for (let i = 0; i < tr.length; i++) {
              td = tr[i].getElementsByTagName("td")[0];
              if (td) {
                if (td.innerHTML.toUpperCase().indexOf(this.filterTerm.toUpperCase()) > -1) {
                  tr[i].style.display = "";
                } else {
                  tr[i].style.display = "none";
                }
              }
            }
            break;
          case "list":
            const list = document.getElementById(this.sourceId);
            const li = list.getElementsByTagName("li");
            for (let i = 0; i < li.length; i++) {
              if (li[i].innerHTML.toUpperCase().indexOf(this.filterTerm.toUpperCase()) > -1) {
                li[i].style.display = "";
              } else {
                li[i].style.display = "none";
              }
            }
            break;
          default:
            break;
        }
      }
    };
  }

  // _javascript/modules/dropdownData.js
  function dropdownData() {
    return {
      openDropdown: false,
      toggleDropdown() {
        this.openDropdown = !this.openDropdown;
      },
      hideDropdown() {
        this.openDropdown = false;
      }
    };
  }

  // _javascript/modules/ajaxSearchData.js
  function ajaxSearchData() {
    const config = {
      method: "GET",
      // *GET, POST, PUT, DELETE, etc.
      mode: "same-origin",
      // no-cors, *cors, same-origin
      cache: "no-cache",
      // *default, no-cache, reload, force-cache, only-if-cached
      credentials: "same-origin",
      // include, *same-origin, omit
      headers: {
        "Content-Type": "application/json"
        // 'Content-Type': 'application/x-www-form-urlencoded',
      },
      redirect: "follow",
      // manual, *follow, error
      referrerPolicy: "no-referrer"
      // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
      // body: JSON.stringify(params) // body data type must match "Content-Type" header
    };
    return {
      searchTerm: "",
      panelOpen: false,
      count: 0,
      results: [],
      searchByTitle(apiPath, columnName = "title") {
        if (this.searchTerm.length > 3) {
          const key = columnName + " LIKE";
          let args = {};
          args[key] = "%" + this.searchTerm + "%";
          const queryParams = new URLSearchParams(args);
          fetch(apiPath + "?" + queryParams.toString(), config).then((response) => response.json()).then((data2) => {
            console.log(data2);
            this.panelOpen = true;
            this.results = data2;
            this.count = data2.length;
          });
        } else {
          this.count = 0;
          this.panelOpen = false;
          this.results = [];
        }
      },
      clearSearch() {
        this.searchTerm = "";
        this.count = 0;
        this.panelOpen = false;
        this.results = [];
      },
      togglePanel() {
        this.panelOpen = !this.panelOpen;
      }
    };
  }

  // _javascript/modules/tabbedImagesData.js
  function tabbedImagesData() {
    return {
      imageId: "",
      tabbedImageClass: "",
      tabbedImageButtonClass: "",
      init() {
        this.tabbedImageClass = "tabbed-image-gallery-item";
        this.tabbedImageButtonClass = "tabbed-image-gallery-button";
        this.hideAllTabs();
      },
      openTabbedImage(imageId) {
        this.imageId = imageId;
        this.hideAllTabs();
        document.getElementById(this.imageId).style.display = "block";
      },
      hideAllTabs() {
        const x = document.getElementsByClassName(this.tabbedImageClass);
        for (let i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
      },
      hide(event) {
        const btn = event.target;
        if (btn.parentNode) {
          btn.parentNode.style.display = "none";
        }
      },
      show(event) {
        const btn = event.target;
        if (btn.parentNode) {
          btn.parentNode.style.display = "block";
        }
      }
    };
  }

  // _javascript/clean.js
  window.$ = {
    data,
    tabbedImagesData,
    tabsData,
    accordionData,
    lightboxData,
    sliderData,
    filterData,
    alertData,
    animateData,
    dropdownData,
    ajaxSearchData,
    modalData,
    progressBarData
  };
})();
//# sourceMappingURL=clean.js.map
