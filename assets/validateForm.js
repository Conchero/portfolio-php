




const inputs = document.querySelectorAll("input");
const textAreas = document.querySelectorAll("textarea");
const errorMessage = document.querySelectorAll(".error_message");

inputs.forEach((el, i) => {

    el.addEventListener("keyup", (e) => {

        console.log(e.target.value.length);
        if (el.minLength > 0 && e.target.value.length < el.minLength) {
            errorMessage[i].innerHTML = `Veuillez entrer au minimum ${el.minLength} caractére`;
        }
        else {
            errorMessage[i].innerHTML = ``;
        }

    })
})


