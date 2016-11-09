var namePage = "tuananhshop.com";
var checkField = function(element, name) 
{
    var message = "";
    var pattern = new RegExp(/[~`!#$%\^&*+=\[\]\\';,/{ }|\\":<>\?]/); 
    var content = element.val();
    if (content.length < 6)
    {
        element.focus();
        element.select();
        if (content == "")
            message = name + " trống!";
        else message =  name + " quá ngắn(phải > 5 ký tự)!";
    }
    else if(pattern.test(content))
    {
        element.focus();
        message =  name + " có ký tự đặc biệt!";
    }
    return message;
};

function logout() {
    deleteCookie("ID");
    deleteCookie("userName");
}
var deleteCookie = function(name) {
    document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
};       
