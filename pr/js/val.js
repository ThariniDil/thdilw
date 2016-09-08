
    function formValidate() { 
        var firstname = document.forms["myForm"]["fname"].value; 
        var address = document.forms["myForm"]["address"].value; 
        var zip = document.forms["myForm"]["zcode"].value; 
        var state = document.forms["myForm"]["state"].value; 
        var username = document.forms["myForm"]["uname"].value; 
        var email = document.forms["myForm"]["email"].value; 
 
        if (isAlphebatic(firstname))
            if (isAlphaNumeric(address)) 
                if (isNumeric(zip)) 
                    if (selectedState(state)) 
                        if (userValidation(username, 6, 8)) 
                            if (emailValidation(email)) 
                                return true; 
                            else 
                                return false; 
                        else 
                            return false; 
                    else 
                        return false; 
                else 
                    return false; 
            else 
                return false; 
        else 
            return false; 
    } 
 
    function isEmpty(elemValue,field) { 
 
if(elemValue ==""  ||  elemValue == null) { 
 
 
alert("You cannot have " + field + " field empty"); 
 
 
return true; 
 
} else  
 
 
return false;  
    } 
    
    
      function isAlphebatic(elemValue)  
    { 
        var exp = /^[a‐zA‐Z]+$/; 
        if (!isEmpty(elemValue, "First Name")) 
        { 
            if (elemValue.match(exp)) { 
                return true; 
            } 
            else { 
                alert("Enter only text for your First Name"); 
                return false; 
            } 
        }  
        else 
            return false; 
    }  
    
    
    function isAlphaNumeric(elemValue)  
    { 
        var exp = /^[0‐9a‐zA‐Z]+$/; 
        if (!isEmpty(elemValue, "Address")) 
        { 
            if (elemValue.match(exp)) 
                return true; 
            else { 
                alert("Enter only letters and numbers for the Address"); 
                return false; 
            } 
        } 
        else 
            return false; 
    } 
    

function isNumeric(elemValue) 
    { 
        if (!isEmpty(elemValue, "Zip Code")) 
        { 
            var exp = /^[0‐9]+$/; 
            if (elemValue.match(exp))  
                return true; 
            else { 
                alert("Enter a valid Zip Code"); 
                return false; 
            } 
        } 
        else  
            return false; 
    }
    
     function selectedState(elemValue) { 
        if (elemValue == "Please Choose") { 
            alert("Choose a state"); 
            return false; 
          } 
        else  
              return true;         
    } 
    
    
    function userValidation(elemValue, min, max) { 
        if (!isEmpty(elemValue, "Username")) 
        { 
            if (elemValue.length >= min && elemValue.length <= max) { 
                return true; 
            } 
            else { 
                alert("Enter a username in between " + min + " and " + max + " characters"); 
                return false; 
            } 
        } 
        else  
            return false;      
    } 
    
    function emailValidation(elemValue) 
    { 
        if (!isEmpty(elemValue, "Email")) 
        { 
            var atpos = elemValue.indexOf("@"); 
            var dotpos = elemValue.indexOf("."); 
            if (atpos < 1 || dotpos + 2 >= elem.length || atpos + 2 > dotpos) 
            { 
                alert("Enter a valid email address"); 
                return false; 
            } 
            else  
                return true; 
        } 
        else  
            return false; 
    } 
    



