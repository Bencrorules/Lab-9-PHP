function formValidation()
{
    var username = document.customerFrontend.username;
    var password = document.customerFrontend.password;
    var apples = document.customerFrontend.apples;
    var bananas = document.customerFrontend.bananas;
    var grapes = document.customerFrontend.grapes;
    var shipping = document.customerFrontend.shipping;

    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(!username.value.match(mailformat)) return;
    if(apples < 0) return;
    if(bananas < 0) return;
    if(grapes < 0) return;
    if(password < 1) return;
    if(shipping == 1) return;
}