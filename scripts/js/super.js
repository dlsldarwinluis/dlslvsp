function _(element){
    return document.getElementById(element);
}

var moreVidBtn = _("videosBtn");
var moreUserBtn = _("usersBtn");
var moreAdminBtn = _("adminBtn");
var moreRepBtn = _("reportsBtn");
var moreBinBtn = _("showRecyleBin");

moreVidBtn.addEventListener("click", showMoreVid);
moreUserBtn.addEventListener("click", showMoreUser);
moreAdminBtn.addEventListener("click", showMoreAdmin);
moreRepBtn.addEventListener("click", showMoreReports);
moreBinBtn.addEventListener("click", showMoreBin);

function showMoreVid(){
    if(_("more-videos").style.display == "none"){
        _("more-videos").style.display = "block";
        _("moreVid").src = "/videostreamingportal/icons/less.png";
    }
    else{
        _("more-videos").style.display = "none";
        _("moreVid").src = "/videostreamingportal/icons/more.png";
    }
}

function showMoreUser(){
    if(_("more-users").style.display == "none"){
        _("more-users").style.display = "block";
        _("moreUser").src = "/videostreamingportal/icons/less.png";
    }
    else{
        _("more-users").style.display = "none";
        _("moreUser").src = "/videostreamingportal/icons/more.png";
    }
}

function showMoreAdmin(){
    if(_("more-admin").style.display == "none"){
        _("more-admin").style.display = "block";
        _("moreAdmin").src = "/videostreamingportal/icons/less.png";
    }
    else{
        _("more-admin").style.display = "none";
        _("moreAdmin").src = "/videostreamingportal/icons/more.png";
    }
}

function showMoreReports(){
    if(_("more-reports").style.display == "none"){
        _("more-reports").style.display = "block";
        _("moreReports").src = "/videostreamingportal/icons/less.png";
    }
    else{
        _("more-reports").style.display = "none";
        _("moreReports").src = "/videostreamingportal/icons/more.png";
    }
}

function showUserSettings(){
    if(_("userSettingsContainer").style.display == "none"){
        _("userSettingsContainer").style.display = "block";
        _("moreOptionsContainer").style.display = "none";
        _("recyclebinContainer").style.display = "none";
    }
    else{
        _("userSettingsContainer").style.display = "none";
    }
}

function showAddedSettings(){
    if(_("moreOptionsContainer").style.display == "none"){
        _("moreOptionsContainer").style.display = "block";
        _("userSettingsContainer").style.display = "none";
    }
    else{
        _("moreOptionsContainer").style.display = "none";
        _("recyclebinContainer").style.display = "none";
    }
}

function showMoreBin(){
    if(_("recyclebinContainer").style.display == "none"){
        _("recyclebinContainer").style.display = "block";
    }
    else{
        _("recyclebinContainer").style.display = "none";
    }
}