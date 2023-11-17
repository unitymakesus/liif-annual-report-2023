// Investments Section Tab Functionality
const hubsTabsContainer = document.querySelector(".us-data");
const hubsTabsList = document.querySelector(".hubs");
const hubsTabLinks = document.querySelectorAll(".hubs li a");
const hubsTabPanels = document.querySelectorAll(".hub-cards > section");

// Supporters Section
const supportersTabsContainer = document.querySelector(".supporters-data");
const supportersTabsList = document.querySelector(".sup-cat");
const supportersTabLinks = document.querySelectorAll(".sup-cat li a");
const supportersTabPanels = document.querySelectorAll(".lists > div");


hubsTabsList.setAttribute("role", "tablist");
hubsTabsList.querySelectorAll("li").forEach((listItem) => {
  listItem.setAttribute("role", "presentation");
});

supportersTabsList.setAttribute("role", "tablist");
supportersTabsList.querySelectorAll("li").forEach((listItem) => {
  listItem.setAttribute("role", "presentation");
});



hubsTabLinks.forEach((tab, index) => {
  tab.setAttribute("role", "tab");
  if(index === 0) {
    tab.setAttribute("aria-selected", "true");
  }else {
    tab.setAttribute("tabindex", "-1");
    hubsTabPanels[index].setAttribute("hidden", "")
  }
})

supportersTabLinks.forEach((tab, index) => {
  tab.setAttribute("role", "tab");
  if(index === 0) {
    tab.setAttribute("aria-selected", "true");
  }else {
    tab.setAttribute("tabindex", "-1");
    supportersTabPanels[index].setAttribute("hidden", "")
  }
})


hubsTabPanels.forEach((panel) => {
  panel.setAttribute("role", "tabpanel");
  panel.setAttribute("tabindex", "0");
});

supportersTabPanels.forEach((panel) => {
  panel.setAttribute("role", "tabpanel");
  panel.setAttribute("tabindex", "0");
});


hubsTabsContainer.addEventListener('click', (e) => {
  e.preventDefault();
  const clickedTab = e.target.closest("a");
  if(!clickedTab) return;
  switchTab(clickedTab);
})

supportersTabsContainer.addEventListener('click', (e) => {
  e.preventDefault();
  const clickedTab = e.target.closest("a");
  if(!clickedTab) return;
  supSwitchTab(clickedTab);
})

// Last - TMP
// Keyboard navigation
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
// Keyboard Navigation End

function switchTab(newTab) {
  const activePanelId = newTab.getAttribute("href");
  const activePanel = hubsTabsContainer.querySelector(activePanelId);

  hubsTabLinks.forEach((link) => {
    link.setAttribute("aria-selected", "false");
    link.setAttribute("tabindex", "-1");
  })

  hubsTabPanels.forEach((panel) => {
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


function supSwitchTab(newTab) {
  const activePanelId = newTab.getAttribute("href");
  const activePanel = supportersTabsContainer.querySelector(activePanelId);

  supportersTabLinks.forEach((link) => {
    link.setAttribute("aria-selected", "false");
    link.setAttribute("tabindex", "-1");
  })

  supportersTabPanels.forEach((panel) => {
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
