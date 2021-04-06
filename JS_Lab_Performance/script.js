function nameValidation() {
    
    var data = document.getElementById('name').value;
    
    if (data === "") {
        
        window.alert('Name is empty!');
        
    }
    
    else {
        
        let name_word = data.split(" ");
        
        if (name_word.length < 2) {
            
            window.alert('Name has less than two words!');
            
        }
        
        else {
            
            let pattern = ['<', ',', '>', '/', '?', '"', "'", ';', ':', ']', '[', '|', '}', '{', '=', '+',
                            '_', ')', '(', '*', '&', '^', '%', '$', '#', '@', '!', '`', '~', '0', '1', '2', '3', 
                            '4', '5', '6', '7', '8', '9'];
            
            let i;
            for (i = 0; i < pattern.length; i++) {
                
                if (data.includes(pattern[i])) {
                    
                    window.alert("Invalid Name!");
                    break;
                    
                }
                
                else if (data[0] == pattern[i]) {
                    
                    window.alert("Invalid Name!");
                    break;
                    
                }
                
            }
            
        }
        
    }
    
}


function emailValidation(){
    
    let data = document.getElementById('email').value;
    
    if (data === "") {
        
        window.alert('Email is empty!');
        
    }
    
}

function genderValidation(){
    
    if(document.getElementById("male").checked|| document.getElementById("female").checked|| document.getElementById("other").checked){
        
        alert("Gender Selected");
        
    }
    
    else{
        
        alert("Please Select Gender");
        
    }
    
}
 
}