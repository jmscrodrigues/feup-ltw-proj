/**
 * Get values for price slider
 */
function getVals(){
    // Get slider values
    var parent = this.parentNode;
    var slides = parent.getElementsByTagName("input");
    var slide1 = parseFloat( slides[0].value );
    var slide2 = parseFloat( slides[1].value );
    // Neither slider will clip the other, so make sure we determine which is larger
    if( slide1 > slide2 ){ var tmp = slide2; slide2 = slide1; slide1 = tmp; }
    
    var displayElement = parent.getElementsByClassName("rangeValues")[0];
        displayElement.innerHTML = slide1 +  " - " + slide2;
}
  
window.onload = function(){
    // Initialize Sliders
    var sliderSections = document.getElementsByClassName("range-slider");
    for( var x = 0; x < sliderSections.length; x++ ){
        var sliders = sliderSections[x].getElementsByTagName("input");
        for( var y = 0; y < sliders.length; y++ ){
            if( sliders[y].type ==="range" ){
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
}
  