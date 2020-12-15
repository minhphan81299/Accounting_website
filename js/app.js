const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");
const sign_up_username = document.getElementById("signupUsername");
const sign_up_password = document.getElementById("signupPassWord");
const sign_up_form = document.getElementById("sign-up-form");

sign_up_btn.addEventListener("click", () => {
    container.classList.add("sign-up-mode");
});
sign_in_btn.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
});
sign_up_form.addEventListener("click", (e) => {
    console.log('ok')
    e.preventDefault();
    if(sign_up_username.value=="" && sign_up_password.value==""){
        console.log(123)
    }
    else{
        load_ajax(sign_up_username.value,sign_up_password.value);
        container.classList.remove("sign-up-mode");
    }
});

const load_ajax = (username,password)=>{
    $.ajax({
        url:"../controllers/handleLogin-Signup/signUpSuccess.php",
        type:"post",
        dataType:"text",
        data : {
            signUpsuccess:true,username:username,password:password

        },success:function(result){
            $('#signin-title').after('<div class="signup-success">Sign Up successfully<div>');
        },

    })
}


