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

function closeAlert() {
    //const closeBtn = document.getElementsByClassName("close")[4];
    const alertDiv = document.getElementsByClassName("alert")[0];

    alertDiv.style.display = "none";
}

function logout() {
    $('#overlay').fadeIn();
    $('#logout-container').fadeIn();

    $('#cancel').click(function() {
        $('#overlay').fadeOut();
        $('#logout-container').fadeOut();
    });

    $('#overlay').click(function() {
        $('#overlay').fadeOut();
        $('#logout-container').fadeOut();
    });
}

function login() {
    $('#overlay').fadeIn();
    $('#login-register-container').fadeIn();

    $('#overlay').click(function() {
        $('#overlay').fadeOut();
        $('#login-register-container').fadeOut();
    });
}

function showLogin() {
    $('#register-modal').hide();
    $('#login-modal').show();
}

function showRegister() {
    $('#register-modal').show();
    $('#login-modal').hide();

}

/*------- Password strenght --------*/
$(function() {

    function passwordCheck(password) {
        if (password.length >= 8)
            strength += 1;

        if (password.match(/(?=.*[0-9])/))
            strength += 1;

        if (password.match(/(?=.*[!,%,&,@,#,$,^,*,?,_,~,<,>,])/))
            strength += 1;

        if (password.match(/(?=.*[a-z])/))
            strength += 1;

        if (password.match(/(?=.*[A-Z])/))
            strength += 1;

        displayBar(strength);
    }

    function displayBar(strength) {
        switch (strength) {
            case 1:
                $("#password-strength span").css({
                    "width": "20%",
                    "background": "#de1616"
                });
                break;

            case 2:
                $("#password-strength span").css({
                    "width": "40%",
                    "background": "#de1616"
                });
                $("#register-nav").prop("disabled", false);
                $("#register-purchase").prop("disabled", false);
                break;

            case 3:
                $("#password-strength span").css({
                    "width": "60%",
                    "background": "#de1616"
                });
                break;

            case 4:
                $("#password-strength span").css({
                    "width": "80%",
                    "background": "#FFA200"
                });
                break;

            case 5:
                $("#password-strength span").css({
                    "width": "100%",
                    "background": "#06bf06"
                });
                break;

            default:
                $("#password-strength span").css({
                    "width": "0",
                    "background": "#de1616"
                });
        }
    }

    $("[data-strength]").after("<div id=\"password-strength\" class=\"strength\"><span></span></div>")

    $("[data-strength]").focus(function() {
        $("#password-strength").css({
            "height": "8px"
        });
    }).blur(function() {
        $("#password-strength").css({
            "height": "8px"
        });
    });

    $("[data-strength]").keyup(function() {
        strength = 0;
        var password = $(this).val();
        passwordCheck(password);
    });

});