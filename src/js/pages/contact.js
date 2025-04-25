import { isPage } from "../functions";

document.addEventListener("DOMContentLoaded", () => {
  if (isPage("contact")) {
    const form = document.querySelector("form");

    if (form) {
      console.log("FORM IS HERE");
    }
  }
});
