$("#btnstep01").on("click", function () {
  $(".re01").hide();
  $(".re02").show();
  $(".stepregis.step01").removeClass("active");
  $(".stepregis.step02").addClass("active");
});
$("#btnstep02").on("click", function () {
  $(".re02").hide();
  $(".re03").show();
  $(".stepregis.step02").removeClass("active");
  $(".stepregis.step03").addClass("active");
});
$("#btnstep03").on("click", function () {
  $(".re01").hide();
  $(".re02").hide();
  $(".re03").hide();
  $(".re04").show();
  $(".stepregis.step03").removeClass("active");
  $(".stepregis.step04").addClass("active");
  setTimeout(function () {
    location.href = "dashboard.html";
  }, 2000);
});

if ($(".header-menu")[0]) {
  $(".linebtn").addClass("logined");
} else {
}

var mypromotion = new Swiper(".mypromotion", {
  slidesPerView: "auto",
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var banner = new Swiper(".banner", {
  slidesPerView: "auto",
  autoplay: true,
  direction: "horizontal",
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// Copy---------------------------------------------------------
$(document).ready(function () {
  $(".copybtn").click(function (event) {
    var $tempElement = $("<input>");
    $("body").append($tempElement);
    $tempElement.val($(this).closest(".copybtn").find("span").text()).select();
    document.execCommand("Copy");
    $tempElement.remove();
  });
});
function copylink() {
  $(".alertcopy").show();
  setTimeout(function () {
    $(".alertcopy").hide();
  }, 2000);
}

$(".copylink").click(function (event) {
  var copyText = document.getElementById("friendlink");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  document.execCommand("copy");
});

function openTab(evt, cityName) {
  var i, tabcontent, tablinks;

  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  tablinks = document.getElementsByClassName("navmenu");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";

  if (cityName === "account") {
    window.scrollTo({ top: 0, behavior: "smooth" });
  } else {
    document.getElementById(cityName).scrollIntoView({ behavior: "smooth" });
  }

  if ($("#homepage").css("display") == "block") {
    $(".navmenu.play").addClass("active");
  }
  if ($("#dps").css("display") == "block") {
    $(".navmenu.deposit").addClass("active");
  }
  if ($("#wd").css("display") == "block") {
    $(".navmenu.withdraw").addClass("active");
  }
  if ($("#friend").css("display") == "block") {
    $(".navmenu.friend").addClass("active");
  }

  $(".sidebarCollapse").removeClass("open");
  $(".menuslidebox").removeClass("open");
}

document.getElementById("defaultOpen").click();

$(".sporttab").on("click", function () {
  $(".customgametab .nav-link").removeClass("active");
  $("#pills-sport-tab").addClass("active");
  $("#pills-tabContent .tab-pane").removeClass("show active");
  $("#pills-tabContent #pills-sport").addClass("fade show active");
});
$(".casinotab").on("click", function () {
  $(".customgametab .nav-link").removeClass("active");
  $("#pills-Casino-tab").addClass("active");
  $("#pills-tabContent .tab-pane").removeClass("show active");
  $("#pills-tabContent #pills-Casino").addClass("fade show active");
});
$(".slottab").on("click", function () {
  $(".customgametab .nav-link").removeClass("active");
  $("#pills-slot-tab").addClass("active");
  $("#pills-tabContent .tab-pane").removeClass("show active");
  $("#pills-tabContent #pills-slot").addClass("fade show active");
});
$(".lottotab").on("click", function () {
  $(".customgametab .nav-link").removeClass("active");
  $("#pills-lotto-tab").addClass("active");
  $("#pills-tabContent .tab-pane").removeClass("show active");
  $("#pills-tabContent #pills-lotto").addClass("fade show active");
});

// SIDEBAR TAB

// cryptotab

function cryptotab() {
  $(".boxcrypto.dps01").hide();
  $(".boxcrypto.dps02").css("display", "flex");
}

function cryptotabclose() {
  $(".boxcrypto.dps02").hide();
  $(".boxcrypto.dps01").css("display", "flex");
}
$(".wdtablink.bank").on("click", function () {
  $(".wdtablink").removeClass("active");
  $(this).addClass("active");
  $(".boxwd").hide();
  $(".boxwd.bank").show();
});
$(".wdtablink.crypto").on("click", function () {
  $(".wdtablink").removeClass("active");
  $(this).addClass("active");
  $(".boxwd").hide();
  $(".boxwd.crypto").css("display", "flex");
});

$(".coin-item.busd").on("click", function () {
  $(".box_input").hide();
  $(".box_input.busd").css("display", "block");
});
$(".coin-item.usdt").on("click", function () {
  $(".box_input").hide();
  $(".box_input.usdt").css("display", "block");
});

// cryptotab

// Change Password

function changepassword() {
  $(".containcpass").show();
  $(".accountdetail").hide();
}
$(".backaccount").on("click", function () {
  $(".containcpass").hide();
  $(".accountdetail").show();
});
// Change Password

// Main Friend
// tabs friend---------------------------------------------------------
function openfriendtab(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("containfriendwd");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("ininwrapgrid001");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("tabfriendopen").click();

$(".sidebarCollapse").click(function (event) {
  $(".sidebarCollapse").toggleClass("open");
  $(".menuslidebox").toggleClass("open");
});
