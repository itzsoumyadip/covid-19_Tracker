




document.querySelector('.img__btn').addEventListener('click', function() {
  document.querySelector('.cont').classList.toggle('s--signup');

});

var today =new Date()

var option ={
    weekday:"long",
    day:"numeric",
    month:"long",
    year:"numeric"
}

var currentDate=today.toLocaleDateString("en-US",option)  
 let date=document.querySelector(".tip")
      date.innerHTML=currentDate
  



function toggleAdUs() {
       
        var ad=document.getElementsByClassName("isAdmin")
        var us=document.getElementsByClassName("isUser")
       
        console.log(ad[0].value,us[0].value);
  
        if(ad[0].value==="0" && ad[0].value==="0"){
          ad[0].value="1";
          ad[1].value="1";
          us[0].value="0";
          us[1].value="0";
          console.log(ad[0].value,us[0].value);
          
  document.getElementById("pannel").style.backgroundColor = "green";
        } 
       else{
           us[0].value="1";
           us[1].value="1";
           ad[0].value="0";
           ad[1].value="0";
           console.log(ad[1].value,us[1].value);
          document.getElementById("pannel").style.backgroundColor = "red";
       }
  
      }
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
        //      if(ad.value==="0" && us.value==="1"){
  //         ad.value="1";
  //         us.value="0";
  //         console.log(ad.value,us.value);
          
  // document.getElementById("pannel").style.backgroundColor = "green";
  //       } 
  //      else{
  //          ad.value="0";
  //          us.value="1";
  //          console.log(ad.value,us.value);
  //         document.getElementById("pannel").style.backgroundColor = "red";
  //      } 


      
