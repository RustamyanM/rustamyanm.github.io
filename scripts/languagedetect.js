var language = window.navigator.userLanguage || window.navigator.language;
language = language.substr(0, 2)
var cookieLang = getCookie('cookieLang');

var currentDirectory = window.location.pathname.split('/').slice(0, -1).join('/')
console.log(currentDirectory);
if (cookieLang) {
    language = cookieLang
}
if (!currentDirectory) {
    if (language == 'fr') {
        window.location.href = '/fr';
    }
}
if (currentDirectory == '/fr') {
    if (language == 'en') {
        window.location.href = '/';
    }
}
console.log(language);

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}