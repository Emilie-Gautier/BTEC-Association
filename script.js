// script.js
function openTab(evt, Tab1) {
    var i, tabcontent, tablinks;

    // Hide all tab content
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove the background color of all tablinks
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab content, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

/*// Gestion des boutons
document.getElementById("Tab1").addEventListener("click", function() {
    window.open("2.Se porter volontaire.html", "_blank");
});

document.getElementById("Tab2").addEventListener("click", function() {
    window.open("3.Suggestion d'évènements.html", "_blank");
});

document.getElementById("Tab3").addEventListener("click", function() {
    window.open("4.Les propositions de sorties.html", "_blank");
});

*/

// Script pour gérer l'ouverture et la fermeture du pop-up
var modal = document.getElementById("myModal");
var btn = document.getElementById("openModalBtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

