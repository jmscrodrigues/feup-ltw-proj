function hamburguerMenu() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

/**
 * Get values for price slider
 */
function getVals() {
    // Get slider values
    var parent = this.parentNode;
    var slides = parent.getElementsByTagName("input");
    var slide1 = parseFloat(slides[0].value);
    var slide2 = parseFloat(slides[1].value);
    // Neither slider will clip the other, so make sure we determine which is larger
    if (slide1 > slide2) {
        var tmp = slide2;
        slide2 = slide1;
        slide1 = tmp;
    }

    var displayElement = parent.getElementsByClassName("rangeValues")[0];
    displayElement.innerHTML = slide1 + " - " + slide2;
}

window.onload = function() {
    // Initialize Sliders
    var sliderSections = document.getElementsByClassName("range-slider");
    for (var x = 0; x < sliderSections.length; x++) {
        var sliders = sliderSections[x].getElementsByTagName("input");
        for (var y = 0; y < sliders.length; y++) {
            if (sliders[y].type === "range") {
                sliders[y].oninput = getVals;
                // Manually trigger event first time to display values
                sliders[y].oninput();
            }
        }
    }

    /**
     * Add house modal
     */
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("add-house-button");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    if (btn != null)
        btn.onclick = function() {
            modal.style.display = "block";
        }
        // When the user clicks on <span> (x), close the modal
    if (span != null)
        span.onclick = function() {
            modal.style.display = "none";
        }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    if (document.URL.includes("/pages/list_houses.php")) {
        updateSearch();
        let search_values = document.querySelectorAll("h4.house-list");
        search_values.forEach(element => {
            element.addEventListener('input', updateSearch);
        });
    }
}


function updateSearch() { //TODO add date
    console.log("teste\n");
    let request = new XMLHttpRequest()
    let dir = document.URL;
    let newDir = dir.substring(0, dir.length - 21);
    request.open("post", "../actions/action_update_search.php", true)
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    request.addEventListener("load", function() {
        let response = this.responseText;
        if (response.length == 0) response = "There are no houses with those search parameters.";
        document.getElementById("ListOfHouses").innerHTML = response;
        return;
    })
    let name = document.getElementsByName("name")[0]['value'];
    let country = document.getElementsByName("country")[0]['value'];
    let city = document.getElementsByName("city")[0]['value'];
    let minprice = document.getElementsByName("minprice")[0]['value'];
    let maxprice = document.getElementsByName("maxprice")[0]['value'];
    let minrating = document.getElementsByName("minrating")[0]['value'];
    let maxrating = document.getElementsByName("maxrating")[0]['value'];
    request.send(encodeForAjax({ Name: name, Country: country, City: city, Minprice: minprice, Maxprice: maxprice, Minrating: minrating, Maxrating: maxrating }));
}

// Helper function
function encodeForAjax(data) {
    return Object.keys(data).map(function(k) {
        return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
    }).join('&')
}