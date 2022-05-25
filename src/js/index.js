import "jquery";
import "../../node_modules/bootstrap/dist/js/bootstrap.js";
// import ScrollOut from "scroll-out";
// import "../../node_modules/waypoints/lib/jquery.waypoints.min.js";

// import "./helpers/waypointsFunctions.js";
import "./helpers/customNavbar.js";

//Set up ScrollOut module. This module makes elements appear on the screen when they come into view on scroll
// ScrollOut({
//   threshold: 0.2,
//   once: true,
// });

//Reformat single.php if 'background-image' field is empty
//Note: for reasons yet unknown, this script must come before  the page-blog.php script belwo
const jsSinglePage = document.querySelector("#js-single-page");

if (jsSinglePage) {
  let blogPostImg = jsSinglePage.querySelector(".blog-post-img");

  if (!blogPostImg) {
    let siteHeader = document.querySelector(".site-header");
    siteHeader.classList.add("mt-5");

    let blogPost = jsSinglePage.querySelector(".blog-post");
    blogPost.classList.remove("mb-3", "mb-sm-5", "img-darken", "blog-post");

    let blogPostAuthorCon = document.querySelector(".blog-post-author-con");
    blogPostAuthorCon.classList.replace(
      "position-absolute",
      "position-relative"
    );
    blogPostAuthorCon.classList.remove("text-sm-left", "blog-post-author-con");

    let entryTitle = document.querySelector(".entry-title");
    entryTitle.classList.replace("text-white", "text-dark");

    let postCategories = jsSinglePage.querySelectorAll(".post-category");
    postCategories.forEach((postCategory) => {
      postCategory.classList.remove("text-white");
    });
  }
}
