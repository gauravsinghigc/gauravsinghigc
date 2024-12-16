//button animations
function ButtonAnimation(BtnID, AnimationText) {
  document.getElementById(BtnID).innerHTML =
    "<i class='fa fa-refresh fa-spin'></i> " + AnimationText;
  document.getElementById(BtnID).classList.remove("btn-primary");
  document.getElementById(BtnID).classList.remove("btn-info");
  document.getElementById(BtnID).classList.remove("btn-warning");
  document.getElementById(BtnID).classList.remove("btn-default");
  document.getElementById(BtnID).classList.add("btn-success");
}

//databars
function Databar(data) {
  databar = document.getElementById("" + data + "");
  if (databar.style.display === "block") {
    databar.style.display = "none";
    databar.style.opacity = "0";
  } else {
    databar.style.display = "block";
    databar.style.transition = "all 2s ease";
    databar.style.opacity = "1";
  }
}

//search suggestions and display selective or entered values only
function SearchData(searchinput, items_box) {
  // Get the search input
  var searchInput = document.getElementById("" + searchinput + "").value;

  // Get all content items
  var contentItems = document.getElementsByClassName("" + items_box + "");

  // Loop through all content items
  for (var i = 0; i < contentItems.length; i++) {
    // Get the current item
    var item = contentItems[i];

    // Get the text of the current item
    var itemText = item.textContent.toLowerCase();

    // Check if the search input is found in the item text
    if (itemText.includes(searchInput.toLowerCase())) {
      // If found, show the item
      item.style.display = "block";
    } else {
      // If not found, hide the item
      item.style.display = "none";
    }
  }
}

function checkpass() {
  var pass1 = document.getElementById("pass1");
  var pass2 = document.getElementById("pass2");
  if (pass1.value === pass2.value) {
    document.getElementById("passbtn").classList.remove("disabled");
    document.getElementById("passmsg").classList.add("text-success");
    document.getElementById("passmsg").classList.remove("text-danger");
    document.getElementById("passmsg").innerHTML =
      "<i class='fa fa-check-circle-o'></i> Password Matched!";
  } else {
    document.getElementById("passmsg").classList.remove("text-success");
    document.getElementById("passmsg").classList.add("text-danger");
    document.getElementById("passbtn").classList.add("disabled");
    document.getElementById("passmsg").innerHTML =
      "<i class='fa fa-warning'></i> Password do not matched!";
  }
}
function showTime() {
  let time = new Date();
  let hour = time.getHours();
  let min = time.getMinutes();
  let sec = time.getSeconds();
  am_pm = "AM";
  if (hour > 12) {
    hour -= 12;
    am_pm = "PM";
  }
  if (hour == 0) {
    hr = 12;
    am_pm = "AM";
  }
  hour = hour < 10 ? "0" + hour : hour;
  min = min < 10 ? "0" + min : min;
  sec = sec < 10 ? "0" + sec : sec;
  let currentTime = hour + ":" + min + ":" + sec + " " + am_pm + "";
  let CurrentFullTime = hour + ":" + min + ":" + sec + " " + am_pm + "";
  document.getElementById("CurrentTime").innerHTML =
    "&nbsp;" + currentTime + " ";
}
setInterval(showTime, 1000);
