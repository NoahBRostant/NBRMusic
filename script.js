var home = document.getElementById("Home")
var about = document.getElementById("About")
var work = document.getElementById("Work")
var contact = document.getElementById("Contact")

function Home() {
    home.style.display = "block";
    about.style.display = "none";
    work.style.display = "none";
    contact.style.display = "none";
}
function About() {
    home.style.display = "none";
    about.style.display = "block";
    work.style.display = "none";
    contact.style.display = "none";
}
function Work() {
    home.style.display = "none";
    about.style.display = "none";
    work.style.display = "block";
    contact.style.display = "none";
}
function Contact() {
    home.style.display = "none";
    about.style.display = "none";
    work.style.display = "none";
    contact.style.display = "block";
}