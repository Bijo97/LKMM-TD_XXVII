$(window).on('resize', function(){
    force();
    // $("html").getNiceScroll().resize();
    // $("#section-about-content").getNiceScroll().resize();
    // $("#section-faq-content").getNiceScroll().resize();
    // $("#section-news-content").getNiceScroll().resize();
});

$(window).on('load', function(){
    force();
});

function force(){

  //alert(window.innerHeight * 0.10 + " , " + window.innerHeight);

  // document.getElementById('ganteng').style.width = window.innerWidth + "px";
  // document.getElementById('ganteng').style.height = window.innerHeight + "px";
  // document.getElementById('eric_fountain').style.bottom = window.innerHeight * 0.14 - 4 + "px";

  // document.getElementById('eric_ferris').style.width = window.innerWidth * 0.18 + "px";
  // document.getElementById('eric_ferris').style.right = window.innerWidth / 10 + "px";
  // document.getElementById('eric_ferris').style.left = "auto";
  // document.getElementById('eric_ferris').style.bottom = window.innerHeight * 0.14 - 4 + "px";
  // alert(window.innerHeight * 0.5 + " , " + window.innerHeight);
  // document.getElementById('menu').style.width = window.innerWidth * 300 / window.innerWidth + "px";
  // document.getElementById('menu').style.height = window.innerHeight + "px";
  // document.getElementById('menu').style.fontSize = (((window.innerWidth * 20) / 1366) + ((window.innerHeight * 20) / 678)) / 2 + "px";
  // document.getElementById('menu').style.margin = (window.innerHeight * 67) / window.innerHeight + "px 0px 0px 0px";
  // document.getElementById('menumenu').style.margin = (window.innerHeight * 50) / window.innerHeight + "px 0px 0px 0px";
  // document.getElementById('your-team').style.fontSize = (((window.innerWidth * 20) / 1366) + ((window.innerHeight * 20) / 678)) / 2 + "%";

  document.getElementById('semut').style.width = (window.innerWidth * 250) / 1366  + "px";
  document.getElementById('semut').style.height = (window.innerHeight * 150) / 678  + "px";
  document.getElementById('semut2').style.width = (window.innerWidth * 250) / 1366  + "px";
  document.getElementById('semut2').style.height = (window.innerHeight * 150) / 678  + "px";
  document.getElementById('semut3').style.width = (window.innerWidth * 250) / 1366  + "px";
  document.getElementById('semut3').style.height = (window.innerHeight * 150) / 678  + "px";
  // document.getElementById('semut4').style.width = (window.innerWidth * 250) / 1366  + "px";
  // document.getElementById('semut4').style.height = (window.innerHeight * 150) / 678  + "px";
  document.getElementById('semutsemut').style.top = window.innerHeight * 0.73 + "px";

  document.getElementById('semut5').style.width = (window.innerWidth * 250) / 1366  + "px";
  document.getElementById('semut5').style.height = (window.innerHeight * 150) / 678  + "px";
  document.getElementById('semut6').style.width = (window.innerWidth * 250) / 1366  + "px";
  document.getElementById('semut6').style.height = (window.innerHeight * 150) / 678  + "px";
  document.getElementById('semutsemut2').style.top = window.innerHeight * 0.51 + "px";
    
  document.getElementById('semut-about').style.width = (window.innerWidth * 250) / 1366  + "px";
  document.getElementById('semut-about').style.height = (window.innerHeight * 150) / 678  + "px";
  document.getElementById('semut-about-2').style.width = (window.innerWidth * 250) / 1366  + "px";
  document.getElementById('semut-about-2').style.height = (window.innerHeight * 150) / 678  + "px";
  // document.getElementById('semut-about-3').style.width = (window.innerWidth * 250) / 1366  + "px";
  // document.getElementById('semut-about-3').style.height = (window.innerHeight * 150) / 678  + "px";
  document.getElementById('semutsemut-about').style.top = window.innerHeight * 0.65 + "px";
  
   document.getElementById('semut-news').style.width = (window.innerWidth * 250) / 1366  + "px";
   document.getElementById('semut-news').style.height = (window.innerHeight * 150) / 678  + "px";
   document.getElementById('semut-news-2').style.width = (window.innerWidth * 250) / 1366  + "px";
   document.getElementById('semut-news-2').style.height = (window.innerHeight * 150) / 678  + "px";
   // document.getElementById('semut-news-3').style.width = (window.innerWidth * 250) / 1366  + "px";
   // document.getElementById('semut-news-3').style.height = (window.innerHeight * 150) / 678  + "px";
   document.getElementById('semutsemut-news').style.top = window.innerHeight * 0.48 + "px";

   document.getElementById('semut-team').style.width = (window.innerWidth * 250) / 1366  + "px";
   document.getElementById('semut-team').style.height = (window.innerHeight * 150) / 678  + "px";
   document.getElementById('semut-team-2').style.width = (window.innerWidth * 250) / 1366  + "px";
   document.getElementById('semut-team-2').style.height = (window.innerHeight * 150) / 678  + "px";
   // document.getElementById('semut-team-3').style.width = (window.innerWidth * 250) / 1366  + "px";
   // document.getElementById('semut-team-3').style.height = (window.innerHeight * 150) / 678  + "px";
   document.getElementById('semutsemut-team').style.top = window.innerHeight * 0.36 + "px";

  document.getElementById('semut-contact').style.width = (window.innerWidth * 250) / 1366  + "px";
   document.getElementById('semut-contact').style.height = (window.innerHeight * 150) / 678  + "px";
   document.getElementById('semut-contact-2').style.width = (window.innerWidth * 250) / 1366  + "px";
   document.getElementById('semut-contact-2').style.height = (window.innerHeight * 150) / 678  + "px";
   // document.getElementById('semut-contact-3').style.width = (window.innerWidth * 250) / 1366  + "px";
   // document.getElementById('semut-contact-3').style.height = (window.innerHeight * 150) / 678  + "px";
   document.getElementById('semutsemut-contact').style.top = window.innerHeight * 0.55 + "px";

  document.getElementById('semut-faq').style.width = (window.innerWidth * 250) / 1366  + "px  ";
   document.getElementById('semut-faq').style.height = (window.innerHeight * 150) / 678  + "px";
   document.getElementById('semut-faq-2').style.width = (window.innerWidth * 250) / 1366  + "px";
   document.getElementById('semut-faq-2').style.height = (window.innerHeight * 150) / 678  + "px";
   // document.getElementById('semut-faq-3').style.width = (window.innerWidth * 250) / 1366  + "px";
   // document.getElementById('semut-faq-3').style.height = (window.innerHeight * 150) / 678  + "px";
   document.getElementById('semutsemut-faq').style.top = window.innerHeight * 0.22 + "px";

   document.getElementById('semut-myboard').style.width = (window.innerWidth * 250) / 1366  + "px  ";
   document.getElementById('semut-myboard').style.height = (window.innerHeight * 150) / 678  + "px";
   document.getElementById('semut-myboard-2').style.width = (window.innerWidth * 250) / 1366  + "px";
   document.getElementById('semut-myboard-2').style.height = (window.innerHeight * 150) / 678  + "px";
   // document.getElementById('semut-myboard-3').style.width = (window.innerWidth * 250) / 1366  + "px";
   // document.getElementById('semut-myboard-3').style.height = (window.innerHeight * 150) / 678  + "px";
   document.getElementById('semutsemut-myboard').style.top = window.innerHeight * 0.73 + "px";

   document.getElementById('semut-credits').style.width = (window.innerWidth * 250) / 1366  + "px  ";
   document.getElementById('semut-credits').style.height = (window.innerHeight * 150) / 678  + "px";
   document.getElementById('semut-credits-2').style.width = (window.innerWidth * 250) / 1366  + "px";
   document.getElementById('semut-credits-2').style.height = (window.innerHeight * 150) / 678  + "px";
   // document.getElementById('semut-credits-3').style.width = (window.innerWidth * 250) / 1366  + "px";
   // document.getElementById('semut-credits-3').style.height = (window.innerHeight * 150) / 678  + "px";
   document.getElementById('semutsemut-credits').style.top = window.innerHeight * 0.66 + "px";

   document.getElementById('menu').style.width = (window.innerWidth * 250) / 1366  + "px";
   document.getElementById('menu').style.height = (window.innerHeight * 460) / 678  + "px";
   document.getElementById('close').style.fontSize = (((window.innerWidth * 20) / 1366) + ((window.innerHeight * 20) / 678)) / 2 + "px";
   document.getElementById('close').style.height = (window.innerHeight * 60) / 678  + "px";

   var links = document.getElementsByClassName('link');
   var a = 40;
    for(var i = 0; i < links.length; i++){
      links[i].style.width = (window.innerWidth * (210 - a)) / 1366 + "px";
      if (i != 0){
        links[i].style.height = (window.innerHeight * 42) / 678 + "px";
        links[i].style.fontSize = (((window.innerWidth * 14) / 1366) + ((window.innerHeight * 14) / 678)) / 2 + "px";
      }
      
      if (i < 4){
        a = a - 10;
      } else if (i >= 4){
        a = a + 10;
      }
    }
    // var membersIT = document.getElementsByClassName('memberIT');
    // for(var i = 0; i < membersIT.length; i++){
      
    // }

    var members = document.getElementsByClassName('member');
    for(var i = 0; i < members.length; i++){
      members[i].style.backgroundImage = "url(../main/images/credits/"+i+".png)";
      members[i].style.backgroundPosition = "center";
      members[i].style.backgroundSize = "100% 100%";
      members[i].style.marginTop = "1%";
      members[i].style.height = (window.innerHeight * 125) / 678 + "px";
      members[i].style.width = members[i].style.height;
      members[i].style.borderRadius = "50%";
    }

    var d = new Date();
    var n = d.getHours();
  if (n >= 20 || (n >= 0 && n < 5)){
    document.getElementById('kunang').style.width = (window.innerWidth * 210) / 1366  + "px";
    document.getElementById('kunang').style.height = (window.innerHeight * 210) / 678  + "px";
    document.getElementById('kunang2').style.width = (window.innerWidth * 210) / 1366  + "px";
    document.getElementById('kunang2').style.height = (window.innerHeight * 210) / 678  + "px";
    document.getElementById('kunang3').style.width = (window.innerWidth * 210) / 1366  + "px";
    document.getElementById('kunang3').style.height = (window.innerHeight * 210) / 678  + "px";
    document.getElementById('kunang4').style.width = (window.innerWidth * 210) / 1366  + "px";
    document.getElementById('kunang4').style.height = (window.innerHeight * 210) / 678  + "px";
    document.getElementById('kunang5').style.width = (window.innerWidth * 210) / 1366  + "px";
    document.getElementById('kunang5').style.height = (window.innerHeight * 210) / 678  + "px";
    document.getElementById('kunang6').style.width = (window.innerWidth * 210) / 1366  + "px";
    document.getElementById('kunang6').style.height = (window.innerHeight * 210) / 678  + "px";
    document.getElementById('kunang7').style.width = (window.innerWidth * 210) / 1366  + "px";
    document.getElementById('kunang7').style.height = (window.innerHeight * 210) / 678  + "px";
    document.getElementById('kunangkunang').style.left = window.innerWidth * 0.03 + "px";
    document.getElementById('kunangkunang').style.top = window.innerHeight * 0.61 + "px";
    document.getElementById('kunangkunang2').style.left = window.innerWidth * 0.28 + "px";
    document.getElementById('kunangkunang2').style.top = window.innerHeight * 0.55 + "px";
    document.getElementById('kunangkunang3').style.left = window.innerWidth * 0.48 + "px";
    document.getElementById('kunangkunang3').style.top = window.innerHeight * 0.50 + "px";
    document.getElementById('kunangkunang4').style.left = window.innerWidth * 0.70 + "px";
    document.getElementById('kunangkunang4').style.top = window.innerHeight * 0.62 + "px";
    document.getElementById('kunangkunang5').style.left = window.innerWidth * 0.14 + "px";
    document.getElementById('kunangkunang5').style.top = window.innerHeight * 0.28 + "px";
    document.getElementById('kunangkunang6').style.left = window.innerWidth * 0.84 + "px";
    document.getElementById('kunangkunang6').style.top = window.innerHeight * 0.23 + "px";
    document.getElementById('kunangkunang7').style.left = window.innerWidth * 0.62 + "px";
    document.getElementById('kunangkunang7').style.top = window.innerHeight * 0.35 + "px";
    // document.getElementById('kunang-about').style.width = (window.innerWidth * 210) / 1366  + "px";
    // document.getElementById('kunang-about').style.height = (window.innerHeight * 210) / 678  + "px";
    // document.getElementById('kunang2-about').style.width = (window.innerWidth * 210) / 1366  + "px";
    // document.getElementById('kunang2-about').style.height = (window.innerHeight * 210) / 678  + "px";
    // document.getElementById('kunang3-about').style.width = (window.innerWidth * 210) / 1366  + "px";
    // document.getElementById('kunang3-about').style.height = (window.innerHeight * 210) / 678  + "px";
    // document.getElementById('kunangkunang-about').style.left = window.innerWidth * 0 + "px";
    // document.getElementById('kunangkunang-about').style.top = window.innerHeight * 0.50 + "px";
    // document.getElementById('kunangkunang2-about').style.left = window.innerWidth * 0.25 + "px";
    // document.getElementById('kunangkunang2-about').style.top = window.innerHeight * 0.50 + "px";
    // document.getElementById('kunangkunang3-about').style.left = window.innerWidth * 0.60 + "px";
    // document.getElementById('kunangkunang3-about').style.top = window.innerHeight * 0.50 + "px";

    // document.getElementById('kunang-news').style.width = (window.innerWidth * 210) / 1366  + "px";
    // document.getElementById('kunang-news').style.height = (window.innerHeight * 210) / 678  + "px";
    // document.getElementById('kunang2-news').style.width = (window.innerWidth * 210) / 1366  + "px";
    // document.getElementById('kunang2-news').style.height = (window.innerHeight * 210) / 678  + "px";
    // document.getElementById('kunangkunang-news').style.left = window.innerWidth * 0.2 + "px";
    // document.getElementById('kunangkunang-news').style.top = window.innerHeight * 0.32 + "px";
    // document.getElementById('kunangkunang2-news').style.left = window.innerWidth * 0.5 + "px";
    // document.getElementById('kunangkunang2-news').style.top = window.innerHeight * 0.37 + "px";

    // document.getElementById('kunang-team').style.width = (window.innerWidth * 210) / 1366  + "px";
    // document.getElementById('kunang-team').style.height = (window.innerHeight * 210) / 678  + "px";
    // document.getElementById('kunangkunang-team').style.left = window.innerWidth * 0.62 + "px";
    // document.getElementById('kunangkunang-team').style.top = window.innerHeight * 0.20 + "px";

    // document.getElementById('kunang-contact').style.width = (window.innerWidth * 210) / 1366  + "px";
    // document.getElementById('kunang-contact').style.height = (window.innerHeight * 210) / 678  + "px";
    // document.getElementById('kunangkunang-contact').style.left = window.innerWidth * 0.31 + "px";
    // document.getElementById('kunangkunang-contact').style.top = window.innerHeight * 0.42 + "px";

    // document.getElementById('kunang-myboard').style.width = (window.innerWidth * 210) / 1366  + "px";
    // document.getElementById('kunang-myboard').style.height = (window.innerHeight * 210) / 678  + "px";
    // document.getElementById('kunang2-myboard').style.width = (window.innerWidth * 210) / 1366  + "px";
    // document.getElementById('kunang2-myboard').style.height = (window.innerHeight * 210) / 678  + "px";
    // document.getElementById('kunangkunang-myboard').style.left = window.innerWidth * 0.04 + "px";
    // document.getElementById('kunangkunang-myboard').style.top = window.innerHeight * 0.57 + "px";
    // document.getElementById('kunangkunang2-myboard').style.left = window.innerWidth * 0.25 + "px";
    // document.getElementById('kunangkunang2-myboard').style.top = window.innerHeight * 0.6 + "px";

    // document.getElementById('kunang-credits').style.width = (window.innerWidth * 210) / 1366  + "px";
    // document.getElementById('kunang-credits').style.height = (window.innerHeight * 210) / 678  + "px";
    // document.getElementById('kunangkunang-credits').style.left = window.innerWidth * 0.58 + "px";
    // document.getElementById('kunangkunang-credits').style.top = window.innerHeight * 0.50 + "px";
  }

  // document.getElementById('awanawan').style.top = 678 - window.innerHeight - 155 + "px";
  // document.getElementsByClassName('cloud').style.width = (window.innerWidth * 54) / 1366  + "px";
  // document.getElementsByClassName('cloud').style.height = (window.innerHeight * 5) / 678  + "px";
}
