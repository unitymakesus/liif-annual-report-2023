// Strategic Hubs Selectors
const hubsTabsContainer = document.querySelector(".us-data");
const hubsTabsList = document.querySelector(".hubs");
const hubsTabLinks = document.querySelectorAll(".hubs li a");
const hubsTabPanels = document.querySelectorAll(".hub-cards > section");

// Supporters Section Selectors
const supportersTabsContainer = document.querySelector(".supporters-data");
const supportersTabsList = document.querySelector(".sup-cat");
const supportersTabLinks = document.querySelectorAll(".sup-cat li a");
const supportersTabPanels = document.querySelectorAll(".lists > section");

// Consolidated Financials Tables
const tablesTabsContainer = document.querySelector(".table-info");
const tablesTabsList = document.querySelector(".table-cat");
const tablesTabLinks = document.querySelectorAll(".table-cat li a");
const tablesTabPanels = document.querySelectorAll(".tables-container > section");

// BODL
const bodlTabsContainer = document.querySelector(".other-staff");
const bodlTabsList = document.querySelector(".dir-staff");
const bodlTabLinks = document.querySelectorAll(".dir-staff li a");
const bodlTabPanels = document.querySelectorAll(".staff-list > section");


// Adding Roles for Strategic Hubs
hubsTabsList.setAttribute("role", "tablist");
hubsTabsList.querySelectorAll("li").forEach((listItem) => {
  listItem.setAttribute("role", "presentation");
});
// Adding Roles for Supporters Section
supportersTabsList.setAttribute("role", "tablist");
supportersTabsList.querySelectorAll("li").forEach((listItem) => {
  listItem.setAttribute("role", "presentation");
});
// Adding Roles for Consolidated Financials Section
tablesTabsList.setAttribute("role", "tablist");
tablesTabsList.querySelectorAll("li").forEach((listItem) => {
  listItem.setAttribute("role", "presentation");
});
// Adding Roles for BODL Section
bodlTabsList.setAttribute("role", "tablist");
bodlTabsList.querySelectorAll("li").forEach((listItem) => {
  listItem.setAttribute("role", "presentation");
});


// Adding role of tab for anchor links, setting first link as aria-selected
// otherwise index -1 and hide other tab panels other than index 0
// For Strategic Hubs:
hubsTabLinks.forEach((tab, index) => {
  tab.setAttribute("role", "tab");
  if(index === 0) {
    tab.setAttribute("aria-selected", "true");
  }else {
    tab.setAttribute("tabindex", "-1");
    hubsTabPanels[index].setAttribute("hidden", "");
  }
})
// For Supporters Section
supportersTabLinks.forEach((tab, index) => {
  tab.setAttribute("role", "tab");
  if(index === 0) {
    tab.setAttribute("aria-selected", "true");
  }else {
    tab.setAttribute("tabindex", "-1");
    supportersTabPanels[index] ? supportersTabPanels[index].setAttribute("hidden", "") : "";      }
})
// For Consolidated Financials Section
tablesTabLinks.forEach((tab, index) => {
  tab.setAttribute("role", "tab");
  if(index === 0) {
    tab.setAttribute("aria-selected", "true");
  }else {
    tab.setAttribute("tabindex", "-1");
    tablesTabPanels[index] ? tablesTabPanels[index].setAttribute("hidden", "") : "";      }
})
// For BODL Section
bodlTabLinks.forEach((tab, index) => {
  tab.setAttribute("role", "tab");
  if(index === 0) {
    tab.setAttribute("aria-selected", "true");
  }else {
    tab.setAttribute("tabindex", "-1");
    bodlTabPanels[index] ? bodlTabPanels[index].setAttribute("hidden", "") : "";      }
})


// Tab navigation from clicked link to panel displayed
hubsTabPanels.forEach((panel) => {
  panel.setAttribute("role", "tabpanel");
  panel.setAttribute("tabindex", "0");
});
// For Supporters Section
supportersTabPanels.forEach((panel) => {
  panel.setAttribute("role", "tabpanel");
  panel.setAttribute("tabindex", "0");
});
// For Consolidated Financials Section
tablesTabPanels.forEach((panel) => {
  panel.setAttribute("role", "tabpanel");
  panel.setAttribute("tabindex", "0");
});
// For BODL Section
bodlTabPanels.forEach((panel) => {
  panel.setAttribute("role", "tabpanel");
  panel.setAttribute("tabindex", "0");
});

// click listener and avoid default anchor jump and display associated tab
hubsTabsContainer.addEventListener('click', (e) => {
  e.preventDefault();
  const clickedTab = e.target.closest("a");
  if(!clickedTab) return;
  switchTab(clickedTab);
})
// For Supporters Section
supportersTabsContainer.addEventListener('click', (e) => {
  e.preventDefault();
  const clickedTab = e.target.closest("a");
  if(!clickedTab) return;
  switchTab(clickedTab);
})
// For Consolidated Financials Section
tablesTabsContainer.addEventListener('click', (e) => {
  e.preventDefault();
  const clickedTab = e.target.closest("a");
  if(!clickedTab) return;
  switchTab(clickedTab);
})
// For BODL Section
bodlTabsContainer.addEventListener('click', (e) => {
  e.preventDefault();
  const clickedTab = e.target.closest("a");
  if(!clickedTab) return;
  switchTab(clickedTab);
})


// Keyboard navigation
// Strategic Hubs
hubsTabsContainer.addEventListener('keydown', (e) => {
  switch (e.key) {
    case "ArrowLeft":
      moveTabL();
      break;
    case "ArrowRight":
      moveTabR();
      break;
    case "Home":
      e.preventDefault();
      console.log(hubsTabLinks[0])
      switchTab(hubsTabLinks[0]);
      break;
    case "End":
      e.preventDefault();
      switchTab(hubsTabLinks[hubsTabLinks.length - 1]);
      break;
  }
});

function moveTabL() {
  const currentTab = document.activeElement;
  if(!currentTab.parentElement.previousElementSibling) {
    switchTab(hubsTabLinks[hubsTabLinks.length - 1]);
  }else {
    switchTab(currentTab.parentElement.previousElementSibling.querySelector("a"));
  }
}

function moveTabR() {
  const currentTab = document.activeElement;
  if(!currentTab.parentElement.nextElementSibling) {
    switchTab(hubsTabLinks[0]);
  }else {
    switchTab(currentTab.parentElement.nextElementSibling.querySelector("a"));
  }
}
// Keyboard Navigation for Supporters
supportersTabsContainer.addEventListener('keydown', (e) => {
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
  const currentTab = document.activeElement;
  if(!currentTab.parentElement.previousElementSibling) {
    switchTab(supportersTabLinks[supportersTabLinks.length - 1]);
  }else {
    switchTab(currentTab.parentElement.previousElementSibling.querySelector("a"));
  }
}

function moveSupportersTabR() {
  const currentTab = document.activeElement;
  if(!currentTab.parentElement.nextElementSibling) {
    switchTab(supportersTabLinks[0]);
  }else {
    switchTab(currentTab.parentElement.nextElementSibling.querySelector("a"));
  }
}
// Keyboard Navigation for Consolidated Financials
tablesTabsContainer.addEventListener('keydown', (e) => {
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
  const currentTab = document.activeElement;
  if(!currentTab.parentElement.previousElementSibling) {
    switchTab(tablesTabLinks[supportersTabLinks.length - 1]);
  }else {
    switchTab(currentTab.parentElement.previousElementSibling.querySelector("a"));
  }
}

function moveTablesTabR() {
  const currentTab = document.activeElement;
  if(!currentTab.parentElement.nextElementSibling) {
    switchTab(tablesTabLinks[0]);
  }else {
    switchTab(currentTab.parentElement.nextElementSibling.querySelector("a"));
  }
}
// Keyboard Navigation BODL
bodlTabsContainer.addEventListener('keydown', (e) => {
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
  const currentTab = document.activeElement;
  if(!currentTab.parentElement.previousElementSibling) {
    switchTab(bodlTabLinks[supportersTabLinks.length - 1]);
  }else {
    switchTab(currentTab.parentElement.previousElementSibling.querySelector("a"));
  }
}

function movebodlTabR() {
  const currentTab = document.activeElement;
  if(!currentTab.parentElement.nextElementSibling) {
    switchTab(bodlTabLinks[0]);
  }else {
    switchTab(currentTab.parentElement.nextElementSibling.querySelector("a"));
  }
}
// Keyboard Navigation End

function switchTab(newTab) {
  const activePanelId = newTab.getAttribute("href");
  const activePanel = newTab.parentElement.parentElement.parentElement.querySelector(activePanelId);
  const links = newTab.parentElement.parentElement.querySelectorAll("li a");
  const panels = newTab.parentElement.parentElement.nextElementSibling.querySelectorAll("section");

  links.forEach((link) => {
    link.setAttribute("aria-selected", "false");
    link.setAttribute("tabindex", "-1");
  })

  // active-card initial grid layout causes issues with table
  panels.forEach((panel) => {
    panel.setAttribute("hidden", true);
    if(panel.classList.contains("active-card")) {
      panel.classList.remove("active-card");
    }
  });

  activePanel.removeAttribute("hidden");
  activePanel.classList.toggle("active-card");

  newTab.setAttribute("aria-selected", "true");
  newTab.setAttribute("tabindex", "0");
  newTab.focus();
}
