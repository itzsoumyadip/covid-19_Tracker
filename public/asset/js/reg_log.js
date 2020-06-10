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
  
