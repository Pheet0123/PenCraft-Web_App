const eyeIcon = document.getElementById("eye")
const passwordEl = document.getElementById("password")


eyeIcon.addEventListener("click",()=>{
    if(eyeIcon.classList.contains("fa-eye")){
        eyeIcon.classList.replace("fa-eye","fa-eye-slash")
        passwordEl.setAttribute("type","text")
        }else{
            eyeIcon.classList.replace("fa-eye-slash","fa-eye")
            passwordEl.setAttribute("type","password")
        }


})

const eyeIcon2 = document.getElementById("eye2")
const passwordEl2 = document.getElementById("password2")

eyeIcon2.addEventListener("click",()=>{
    if(eyeIcon2.classList.contains("fa-eye")){
        eyeIcon2.classList.replace("fa-eye","fa-eye-slash")
        passwordEl2.setAttribute("type","text")
        }else{
            eyeIcon2.classList.replace("fa-eye-slash","fa-eye")
            passwordEl2.setAttribute("type","password")
        }
})

