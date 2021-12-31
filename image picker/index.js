const hs = document.getElementById("hasil")
function imagePicker() {
    if (hewan.value == "b") {
        return hs.src = "img/bunglon.jpg"
    } else if (hewan.value == "g") {
        return hs.src = "img/gorilla.jpg"
    } else if (hewan.value == "c") {
        return hs.src = "img/capung.jpg"
    } else if (hewan.value == "k") {
        return hs.src = "img/kadal.jpg"
    } else {
        return hs.src = "img/ular.jpg"
    }
}
function imageConfirmation() {
    alert(hs.src)
}