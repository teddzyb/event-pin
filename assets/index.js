// Sticky categories nav
// document.addEventListener('DOMContentLoaded', function () {
//     window.onscroll = function () { stickyNav() };

//     var header = document.getElementById("categories");
//     var sticky = header.offsetTop;

//     function stickyNav() {
//         if (window.pageYOffset > sticky-64) {
//             header.classList.add("stickyCategory");
//         } else {
//             header.classList.remove("stickyCategory");
//         }
//     }
// })

// Bookmark
function toggleBookmark(eventCard) {
    var bookmark = eventCard.children[0];
    var bookmarked = eventCard.children[1];
    if (bookmark.style.display == "flex") {
        bookmark.style.display = "none";
        bookmarked.style.display = "flex";
    } else {
        bookmark.style.display = "flex";
        bookmarked.style.display = "none";
    }
}