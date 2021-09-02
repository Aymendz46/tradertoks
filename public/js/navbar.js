function displayMenu() {
    const links = document.getElementsByClassName("links")[0];
    const h = document.getElementsByTagName("header")[0];
    const n = document.getElementsByTagName("nav")[0];

    const closeBtn = document.getElementsByClassName("close")[0];
    const open = document.getElementsByClassName("open")[0];
    console.log(links);

    if (links) {
        closeBtn.style.display = "block";
        h.classList.add("active");
        n.classList.remove("inactive");
        n.classList.add("active");
        //links.style.transform = "translateY(0%)";
        links.style.top = "0";
        //links.classList.toggle("active");
        open.style.display = "none";
    }
}

function hideMenu() {
    const links = document.getElementsByClassName("links")[0];
    const h = document.getElementsByTagName("header")[0];
    const n = document.getElementsByTagName("nav")[0];

    //const links = document.getElementsByClassName("links")[0];
    const closeBtn = document.getElementsByClassName("icon close")[0];
    const open = document.getElementsByClassName("icon open")[0];

    if (links) {
        open.style.display = "block";
        //links.style.transform = "translateY(-100%)";  
        links.style.top = "-100%";
        h.classList.remove("active");
        n.classList.add("inactive");
        n.classList.remove("active");

        //links.classList.toggle("active");
        closeBtn.style.display = "none";
    }
}

function showMenuMobile() {
    $('#nav-modal').removeClass('hide');
}

function hideMenuMobile() {

    $('#nav-modal').addClass('hide');
}

function closeAlert()
{
    //const closeBtn = document.getElementsByClassName("close")[4];
    const alertDiv = document.getElementsByClassName("alert")[0];

    alertDiv.style.display = "none";
}