function _(element){
    return document.getElementById(element);
}

var catBtn = _("catbutton");
var userBtn = _("userbutton");

catBtn.addEventListener("click", showCategory);
userBtn.addEventListener("click", showUsersettings);

function showCategory(){
    if(_("categorytwoContainer").style.width == "5%"){
        _("categorytwoContainer").style.width = "0";
    }
    else{
        _("categorytwoContainer").style.width = "5%";
    }
}

function showUsersettings(){
    if(_("userSettingsContainer").style.display== "none"){
        _("userSettingsContainer").style.display = "block";
    }
    else{
        _("userSettingsContainer").style.display = "none";
    }
}