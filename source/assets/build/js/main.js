/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./source/_assets/js/main.js":
/*!***********************************!*\
  !*** ./source/_assets/js/main.js ***!
  \***********************************/
/***/ (() => {

// Strategic Hubs Selectors
var hubsTabsContainer = document.querySelector(".us-data");
var hubsTabsList = document.querySelector(".hubs");
var hubsTabLinks = document.querySelectorAll(".hubs li a");
var hubsTabPanels = document.querySelectorAll(".hub-cards > section");

// Supporters Section Selectors
var supportersTabsContainer = document.querySelector(".supporters-data");
var supportersTabsList = document.querySelector(".sup-cat");
var supportersTabLinks = document.querySelectorAll(".sup-cat li a");
var supportersTabPanels = document.querySelectorAll(".lists > section");

// Consolidated Financials Tables
var tablesTabsContainer = document.querySelector(".table-info");
var tablesTabsList = document.querySelector(".table-cat");
var tablesTabLinks = document.querySelectorAll(".table-cat li a");
var tablesTabPanels = document.querySelectorAll(".tables-container > section");

// BODL
var bodlTabsContainer = document.querySelector(".other-staff");
var bodlTabsList = document.querySelector(".dir-staff");
var bodlTabLinks = document.querySelectorAll(".dir-staff li a");
var bodlTabPanels = document.querySelectorAll(".staff-list > section");

// Adding Roles for Strategic Hubs
hubsTabsList.setAttribute("role", "tablist");
hubsTabsList.querySelectorAll("li").forEach(function (listItem) {
  listItem.setAttribute("role", "presentation");
});
// Adding Roles for Supporters Section
supportersTabsList.setAttribute("role", "tablist");
supportersTabsList.querySelectorAll("li").forEach(function (listItem) {
  listItem.setAttribute("role", "presentation");
});
// Adding Roles for Consolidated Financials Section
tablesTabsList.setAttribute("role", "tablist");
tablesTabsList.querySelectorAll("li").forEach(function (listItem) {
  listItem.setAttribute("role", "presentation");
});
// Adding Roles for BODL Section
bodlTabsList.setAttribute("role", "tablist");
bodlTabsList.querySelectorAll("li").forEach(function (listItem) {
  listItem.setAttribute("role", "presentation");
});

// Adding role of tab for anchor links, setting first link as aria-selected
// otherwise index -1 and hide other tab panels other than index 0
// For Strategic Hubs:
hubsTabLinks.forEach(function (tab, index) {
  tab.setAttribute("role", "tab");
  if (index === 0) {
    tab.setAttribute("aria-selected", "true");
  } else {
    tab.setAttribute("tabindex", "-1");
    hubsTabPanels[index].setAttribute("hidden", "");
  }
});
// For Supporters Section
supportersTabLinks.forEach(function (tab, index) {
  tab.setAttribute("role", "tab");
  if (index === 0) {
    tab.setAttribute("aria-selected", "true");
  } else {
    tab.setAttribute("tabindex", "-1");
    supportersTabPanels[index] ? supportersTabPanels[index].setAttribute("hidden", "") : "";
  }
});
// For Consolidated Financials Section
tablesTabLinks.forEach(function (tab, index) {
  tab.setAttribute("role", "tab");
  if (index === 0) {
    tab.setAttribute("aria-selected", "true");
  } else {
    tab.setAttribute("tabindex", "-1");
    tablesTabPanels[index] ? tablesTabPanels[index].setAttribute("hidden", "") : "";
  }
});
// For BODL Section
bodlTabLinks.forEach(function (tab, index) {
  tab.setAttribute("role", "tab");
  if (index === 0) {
    tab.setAttribute("aria-selected", "true");
  } else {
    tab.setAttribute("tabindex", "-1");
    bodlTabPanels[index] ? bodlTabPanels[index].setAttribute("hidden", "") : "";
  }
});

// Tab navigation from clicked link to panel displayed
hubsTabPanels.forEach(function (panel) {
  panel.setAttribute("role", "tabpanel");
  panel.setAttribute("tabindex", "0");
});
// For Supporters Section
supportersTabPanels.forEach(function (panel) {
  panel.setAttribute("role", "tabpanel");
  panel.setAttribute("tabindex", "0");
});
// For Consolidated Financials Section
tablesTabPanels.forEach(function (panel) {
  panel.setAttribute("role", "tabpanel");
  panel.setAttribute("tabindex", "0");
});
// For BODL Section
bodlTabPanels.forEach(function (panel) {
  panel.setAttribute("role", "tabpanel");
  panel.setAttribute("tabindex", "0");
});

// click listener and avoid default anchor jump and display associated tab
hubsTabsContainer.addEventListener('click', function (e) {
  e.preventDefault();
  var clickedTab = e.target.closest("a");
  if (!clickedTab) return;
  switchTab(clickedTab);
});
// For Supporters Section
supportersTabsContainer.addEventListener('click', function (e) {
  e.preventDefault();
  var clickedTab = e.target.closest("a");
  if (!clickedTab) return;
  switchTab(clickedTab);
});
// For Consolidated Financials Section
tablesTabsContainer.addEventListener('click', function (e) {
  e.preventDefault();
  var clickedTab = e.target.closest("a");
  if (!clickedTab) return;
  switchTab(clickedTab);
});
// For BODL Section
bodlTabsContainer.addEventListener('click', function (e) {
  e.preventDefault();
  var clickedTab = e.target.closest("a");
  if (!clickedTab) return;
  switchTab(clickedTab);
});

// Keyboard navigation
// Strategic Hubs
hubsTabsContainer.addEventListener('keydown', function (e) {
  switch (e.key) {
    case "ArrowLeft":
      moveTabL();
      break;
    case "ArrowRight":
      moveTabR();
      break;
    case "Home":
      e.preventDefault();
      console.log(hubsTabLinks[0]);
      switchTab(hubsTabLinks[0]);
      break;
    case "End":
      e.preventDefault();
      switchTab(hubsTabLinks[hubsTabLinks.length - 1]);
      break;
  }
});
function moveTabL() {
  var currentTab = document.activeElement;
  if (!currentTab.parentElement.previousElementSibling) {
    switchTab(hubsTabLinks[hubsTabLinks.length - 1]);
  } else {
    switchTab(currentTab.parentElement.previousElementSibling.querySelector("a"));
  }
}
function moveTabR() {
  var currentTab = document.activeElement;
  if (!currentTab.parentElement.nextElementSibling) {
    switchTab(hubsTabLinks[0]);
  } else {
    switchTab(currentTab.parentElement.nextElementSibling.querySelector("a"));
  }
}
// Keyboard Navigation for Supporters
supportersTabsContainer.addEventListener('keydown', function (e) {
  switch (e.key) {
    case "ArrowLeft":
      moveSupportersTabL();
      break;
    case "ArrowRight":
      moveSupportersTabR();
      break;
    case "Home":
      e.preventDefault();
      switchTab(supportersTabLinks[0]);
      break;
    case "End":
      e.preventDefault();
      switchTab(supportersTabLinks[supportersTabLinks.length - 1]);
      break;
  }
});
function moveSupportersTabL() {
  var currentTab = document.activeElement;
  if (!currentTab.parentElement.previousElementSibling) {
    switchTab(supportersTabLinks[supportersTabLinks.length - 1]);
  } else {
    switchTab(currentTab.parentElement.previousElementSibling.querySelector("a"));
  }
}
function moveSupportersTabR() {
  var currentTab = document.activeElement;
  if (!currentTab.parentElement.nextElementSibling) {
    switchTab(supportersTabLinks[0]);
  } else {
    switchTab(currentTab.parentElement.nextElementSibling.querySelector("a"));
  }
}
// Keyboard Navigation for Consolidated Financials
tablesTabsContainer.addEventListener('keydown', function (e) {
  switch (e.key) {
    case "ArrowLeft":
      moveTablesTabL();
      break;
    case "ArrowRight":
      moveTablesTabR();
      break;
    case "Home":
      e.preventDefault();
      switchTab(tablesTabLinks[0]);
      break;
    case "End":
      e.preventDefault();
      switchTab(tablesTabLinks[tablesTabLinks.length - 1]);
      break;
  }
});
function moveTablesTabL() {
  var currentTab = document.activeElement;
  if (!currentTab.parentElement.previousElementSibling) {
    switchTab(tablesTabLinks[supportersTabLinks.length - 1]);
  } else {
    switchTab(currentTab.parentElement.previousElementSibling.querySelector("a"));
  }
}
function moveTablesTabR() {
  var currentTab = document.activeElement;
  if (!currentTab.parentElement.nextElementSibling) {
    switchTab(tablesTabLinks[0]);
  } else {
    switchTab(currentTab.parentElement.nextElementSibling.querySelector("a"));
  }
}
// Keyboard Navigation BODL
bodlTabsContainer.addEventListener('keydown', function (e) {
  switch (e.key) {
    case "ArrowLeft":
      movebodlTabL();
      break;
    case "ArrowRight":
      movebodlTabR();
      break;
    case "Home":
      e.preventDefault();
      switchTab(bodlTabLinks[0]);
      break;
    case "End":
      e.preventDefault();
      switchTab(bodlTabLinks[bodlTabLinks.length - 1]);
      break;
  }
});
function movebodlTabL() {
  var currentTab = document.activeElement;
  if (!currentTab.parentElement.previousElementSibling) {
    switchTab(bodlTabLinks[supportersTabLinks.length - 1]);
  } else {
    switchTab(currentTab.parentElement.previousElementSibling.querySelector("a"));
  }
}
function movebodlTabR() {
  var currentTab = document.activeElement;
  if (!currentTab.parentElement.nextElementSibling) {
    switchTab(bodlTabLinks[0]);
  } else {
    switchTab(currentTab.parentElement.nextElementSibling.querySelector("a"));
  }
}
// Keyboard Navigation End

function switchTab(newTab) {
  var activePanelId = newTab.getAttribute("href");
  var activePanel = newTab.parentElement.parentElement.parentElement.querySelector(activePanelId);
  var links = newTab.parentElement.parentElement.querySelectorAll("li a");
  var panels = newTab.parentElement.parentElement.nextElementSibling.querySelectorAll("section");
  links.forEach(function (link) {
    link.setAttribute("aria-selected", "false");
    link.setAttribute("tabindex", "-1");
  });

  // active-card initial grid layout causes issues with table
  panels.forEach(function (panel) {
    panel.setAttribute("hidden", true);
    if (panel.classList.contains("active-card")) {
      panel.classList.remove("active-card");
    }
  });
  activePanel.removeAttribute("hidden");
  activePanel.classList.toggle("active-card");
  newTab.setAttribute("aria-selected", "true");
  newTab.setAttribute("tabindex", "0");
  newTab.focus();
}

/***/ }),

/***/ "./source/_assets/css/main.css":
/*!*************************************!*\
  !*** ./source/_assets/css/main.css ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/main": 0,
/******/ 			"css/main": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/main"], () => (__webpack_require__("./source/_assets/js/main.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/main"], () => (__webpack_require__("./source/_assets/css/main.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;