//This code is used with the waypoints package to change navbar on scroll past banner.
//Note: waypoint function must be wrapped in conditional, otherwise it will interfere with Scroll-out package
if (document.getElementById("js-navbar")) {
  const waypointNavbar = new Waypoint({
    element: document.getElementById("js-navbar"),
    handler: function () {

      // document.getElementById("nav").classList.add("bg-black");
      // document.getElementById("nav").classList.remove("bg-transparent");
      // document.getElementById("js-logo").src ="wp-content/themes/bootstrap-theme/dist/img/logo-black-cropped.png";
      document.getElementById("js-player-container").classList.remove("d-md-block");
      document.getElementById("js-footer").classList.remove("d-md-none");
      document.getElementById("js-footer").classList.remove("d-sm-flex");
    },
    offset: 200,
  });
}
