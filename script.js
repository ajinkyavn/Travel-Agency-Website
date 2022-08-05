function showSignUp(){
    let signup=document.getElementById('signup');
    let bigimg=document.getElementById('bigimg');
    let login=document.getElementById('login');
    if (signup.style.display == "none" || login.style.display!="none"){
        bigimg.style.display="none";
        login.style.display="none"
        signup.style.display="block";
    }
    else{
        bigimg.style.display="block";
        signup.style.display="none";
    }
}
function showLogin(){
    let signup=document.getElementById('signup');
    let login=document.getElementById('login');
    let bigimg=document.getElementById('bigimg');
    if (login.style.display == "none" || signup.style.display!="none"){
        bigimg.style.display="none";
        signup.style.display="none"
        login.style.display="block";
    }
    else{
        bigimg.style.display="block";
        login.style.display="none";
    }
}
const imgs=['./images/packages.png','./images/packages2.jpg','./images/packages3.jpg','./images/packages4.jpg','./images/packages5.jpg']
function changeImg() {
    let packimg2=document.getElementById("packimg2");
    let packimg1=document.getElementById("packimg1");
    while(1){
        for (let i = 0; i < imgs.length; i++) {
            if(packimg1.src==imgs[i]){
                if(i==4){
                    packimg1.src=imgs[0];
                }
                else{
                    packimg1.src=imgs[i+1];
                }
            }
        }
    }
}