
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panelaccordeon = this.nextElementSibling;
        if (panelaccordeon.style.display === "block") {
            panelaccordeon.style.display = "none";
        } else {
            panelaccordeon.style.display = "block";
        }
    });
}
