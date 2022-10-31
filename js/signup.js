const pswrdField = document.querySelector(".formsup input[type='password']"),
showBtn = document.querySelector(".formsup .field i");

showBtn.onclick = () =>{
  if(pswrdField.type === "password"){
    pswrdField.type = "text";
    showBtn.classList.add("active")
  }else{
    pswrdField.type = "password";
    showBtn.classList.remove("active")
  }
}


const form = document.querySelector(".formsup form"),
continueBtn = form.querySelector(".button input");
errorText = document.querySelector(".error-txt");

form.onsubmit = (e)=>{
  e.preventDefault();
}

continueBtn.onclick = ()=>{
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/signup.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
            if(data === "success"){
              location.href="users.php";
            }else{
              errorText.style.display = "block";
              errorText.textContent = data;
            }
        }
    }
  }
  let formData = new FormData(form);
  xhr.send(formData);
}