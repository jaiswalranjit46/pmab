
function openTab(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}



function opentab1(evt, cityName) {
  var i, tab1content, tab1links;
  tab1content = document.getElementsByClassName("tab1content");
  for (i = 0; i < tab1content.length; i++) {
    tab1content[i].style.display = "none";
  }
  tab1links = document.getElementsByClassName("tab1links");
  for (i = 0; i < tab1links.length; i++) {
    tab1links[i].className = tab1links[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

function openPage(pageName,elmnt,color) {
  var i, tabcontent2, tablinks2;
  tabcontent2 = document.getElementsByClassName("tabcontent2");
  for (i = 0; i < tabcontent2.length; i++) {
    tabcontent2[i].style.display = "none";
  }
  tablinks2 = document.getElementsByClassName("tablink2");
  for (i = 0; i < tablinks2.length; i++) {
    tablinks2[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}




// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();



