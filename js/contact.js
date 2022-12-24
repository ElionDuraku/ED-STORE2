const validateForm = (fields = []) => {

    for(let i = 0; i < fields.length; i++){
        let element = document.querySelector("." + fields[i].className);
        let inputValue = element.value;

        if(element.className == "email"){
            if(inputValue == "" && !inputValue.includes("@")){
                element.style.border = "1px solid red";
            }else{
                element.style.border = "1px solid black";
            }
        }if(element.className == "name"){
            if(inputValue == "" && inputValue.length < 4){
                element.style.border = "1px solid red";
            }else{
                element.style.border = "1px solid black";
            }
        }if(element.className == "password"){
            if(inputValue == "" && inputValue.length < 4){
                element.style.border = "1px solid red";
            }else{
                element.style.border = "1px solid black";
            }
        }if(element.className == "confirm-password"){
            console.log(fields[i - 1].value);
            if(inputValue == "" && fields[i - 1].value != inputValue){
                element.style.border = "1px solid red";
            }else{
                element.style.border = "1px solid black";
            }
        }
    }
}