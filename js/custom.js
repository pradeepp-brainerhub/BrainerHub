// Disable inspector (F12 and mouse right click)
$(document).ready(function () {
  if (document.addEventListener) {
    document.addEventListener(
      "contextmenu",
      function (e) {
        e.preventDefault();
      },
      false
    );
  } else {
    document.attachEvent("oncontextmenu", function () {
      window.event.returnValue = false;
    });
  }

  document.onkeypress = function (event) {
    event = event || window.event;
    if (event.keyCode == 123) {
      return false;
    }
  };
  document.onmousedown = function (event) {
    event = event || window.event;
    if (event.keyCode == 123) {
      return false;
    }
  };
  document.onkeydown = function (event) {
    event = event || window.event;
    if (event.keyCode == 123) {
      return false;
    }
  };
});
