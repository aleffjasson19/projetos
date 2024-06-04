
const cursoIndividualRadio = document.getElementById("curso-individual");
const licencaAnualRadio = document.getElementById("licenca-anual");
const cursoIndividualFields = document.getElementById("curso-individual-fields");
const licencaAnualFields = document.getElementById("licenca-anual-fields");

cursoIndividualRadio.addEventListener("change", function() {
    if (cursoIndividualRadio.checked) {
        cursoIndividualFields.style.display = "block";
        licencaAnualFields.style.display = "none";
    }
});

licencaAnualRadio.addEventListener("change", function() {
    if (licencaAnualRadio.checked) {
        cursoIndividualFields.style.display = "none";
        licencaAnualFields.style.display = "block";
    }
});
 