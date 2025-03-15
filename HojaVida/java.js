const barraHtml = document.getElementById("b1")
const progreso1 = document.getElementById("html")

barraHtml.addEventListener("mouseover", () => {
    const valor = 85;
    progreso1.style.setProperty("--nivel", `${valor}%`)
})

const barraCss = document.getElementById("b2")
const progreso2 = document.getElementById("css")
barraCss.addEventListener("mouseover", () => {
    const valor = 80;
    progreso2.style.setProperty("--nivel", `${valor}%`)
})

const barraJava = document.getElementById("b3")
const progreso3 = document.getElementById("java")
barraJava.addEventListener("mouseover", () => {
    const valor = 75;
    progreso3.style.setProperty("--nivel", `${valor}%`)
})