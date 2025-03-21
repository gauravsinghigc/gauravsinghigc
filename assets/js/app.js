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

//copy content in new div
function CopyContent(BtnName, CopyFrom, CopyTo) {
  $(document).ready(function () {
    $("." + BtnName).on("click", function () {
      // Clone the domain form
      let newForm = $("." + CopyFrom)
        .first()
        .clone();
      // Clear input values in the cloned form
      newForm.find("input").val("");
      // Append the cloned form to MoreDomain div
      $("." + CopyTo).append(newForm);
    });
  });
}

// Default font size (initial value)
const defaultFontSize = 0.82; // Default font size 0.82rem
let currentMultiplier = 0; // Tracks the multiplier (starting at 0)
let currentFontSize = defaultFontSize; // To track the current font size

// Check if font size was previously saved in sessionStorage
if (sessionStorage.getItem("fontSize")) {
  currentFontSize = parseFloat(sessionStorage.getItem("fontSize"));
  currentMultiplier = parseInt(sessionStorage.getItem("fontMultiplier"));
  document.documentElement.style.setProperty(
    "font-size",
    currentFontSize + "rem",
    "important"
  );
  document.body.style.setProperty(
    "font-size",
    currentFontSize + "rem",
    "important"
  );
  updateFontSizeMessage();
}

// Function to adjust font size
function adjustFontSize(change) {
  let html = document.documentElement; // For html font size
  let body = document.body; // For body font size

  // Get current font size in rem (default is 0.82rem)
  let currentSizeHtml =
    parseFloat(getComputedStyle(html).fontSize) / 16 || defaultFontSize;
  let currentSizeBody =
    parseFloat(getComputedStyle(body).fontSize) / 16 || defaultFontSize;

  // Calculate new size
  let newSizeHtml = currentSizeHtml + change;
  let newSizeBody = currentSizeBody + change;

  // Allow font-size change within the range 0.1rem to 1.25rem
  if (
    newSizeHtml >= 0.1 &&
    newSizeHtml <= 1.25 &&
    newSizeBody >= 0.1 &&
    newSizeBody <= 1.25
  ) {
    html.style.setProperty("font-size", newSizeHtml + "rem", "important");
    body.style.setProperty("font-size", newSizeBody + "rem", "important");

    // Update the font size and the multiplier
    currentFontSize = newSizeHtml;

    // Update the multiplier based on the change
    currentMultiplier += change > 0 ? 1 : -1;

    // Save font size and multiplier to sessionStorage
    sessionStorage.setItem("fontSize", currentFontSize);
    sessionStorage.setItem("fontMultiplier", currentMultiplier);

    // Update the font size message
    updateFontSizeMessage();

    // Show "Restore to Default" button if size is modified
    document.getElementById("RestoreToDefaultBtn").classList.remove("hidden");
  }
}

// Function to display the size update message
function updateFontSizeMessage() {
  let sizeMessage = document.getElementById("SizeUpdateMsg");

  // If the font size is at the default size (0.82rem), show 0
  if (currentFontSize === defaultFontSize) {
    sizeMessage.innerHTML = "0"; // Default font size is 0x
  } else if (currentMultiplier > 0) {
    // If the size increases, show positive multiplier (1x, 2x, 3x, etc.)
    sizeMessage.innerHTML = `+${currentMultiplier}x`;
  } else if (currentMultiplier < 0) {
    // If the size decreases, show negative multiplier (-1x, -2x, etc.)
    sizeMessage.innerHTML = `${currentMultiplier}x`; // Negative multiplier
  }

  // If max font size reached
  if (currentFontSize === 1.25) {
    sizeMessage.innerHTML = "Max";
  }

  // If min font size reached
  if (currentFontSize === 0.1) {
    sizeMessage.innerHTML = "Min";
  }
}

// Function to restore to default font size
function restoreToDefault() {
  document.documentElement.style.setProperty(
    "font-size",
    defaultFontSize + "rem",
    "important"
  );
  document.body.style.setProperty(
    "font-size",
    defaultFontSize + "rem",
    "important"
  );
  currentFontSize = defaultFontSize; // Reset the font size
  currentMultiplier = 0; // Reset multiplier

  // Remove font size from sessionStorage
  sessionStorage.removeItem("fontSize");
  sessionStorage.removeItem("fontMultiplier");

  // Hide the restore button after restoring to default
  document.getElementById("RestoreToDefaultBtn").classList.add("hidden");

  // Clear the size message
  document.getElementById("SizeUpdateMsg").innerHTML = "Default";
}

// Enlarge font size by 0.025rem
function EnlargeFontSize() {
  adjustFontSize(0.035);
}

// Lower font size by 0.025rem
function LowerFontSize() {
  adjustFontSize(-0.03);
}
