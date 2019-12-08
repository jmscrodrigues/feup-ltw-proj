function hideUserAreaSections() {
    var formArea = document.getElementById("user-area-form");
    formArea.style.display = "none";
    var houseArea = document.getElementById("user-area-houses");
    houseArea.style.display = "none";
    var rentsArea = document.getElementById("user-area-rents");
    rentsArea.style.display = "none";
    var messagesArea = document.getElementById("user-area-messages");
    messagesArea.style.display = "none";
    var buttonList = document.getElementsByClassName("user-area-button");
    for (button of buttonList) {
        button.style.border = "0px"
    }
}

function userAreaShowForm() {
    // hide all elements
    hideUserAreaSections()
    // show user area form
    var formArea = document.getElementById("user-area-form");
    formArea.style.display = "grid";
    var buttonList = document.getElementsByClassName("user-area-button");
    buttonList[0].style.borderLeft = "3px solid var(--main-blue-color)";
}

function userAreaShowHouses() {
    // hide all elements
    hideUserAreaSections()
    // show user houses
    var houseArea = document.getElementById("user-area-houses");
    houseArea.style.display = "flex"
    var buttonList = document.getElementsByClassName("user-area-button");
    buttonList[1].style.borderLeft = "3px solid var(--main-blue-color)";
}

function userAreaShowRents() {
    // hide all elements
    hideUserAreaSections()
    // show user houses
    var rentsArea = document.getElementById("user-area-rents");
    rentsArea.style.display = "grid"
    var buttonList = document.getElementsByClassName("user-area-button");
    buttonList[2].style.borderLeft = "3px solid var(--main-blue-color)";
}

function userAreaShowMessages() {
    // hide all elements
    hideUserAreaSections()
    // show user houses
    var messagesArea = document.getElementById("user-area-messages");
    messagesArea.style.display = "grid"
    var buttonList = document.getElementsByClassName("user-area-button");
    buttonList[3].style.borderLeft = "3px solid var(--main-blue-color)";
}
