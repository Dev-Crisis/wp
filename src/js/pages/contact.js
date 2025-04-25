import { isPage } from "../functions";

document.addEventListener("DOMContentLoaded", () => {
  if (isPage("contact")) {
    const form = document.querySelector("form.form-contact");

    if (form) {
      console.log("FORM IS HERE");
    }
  }
});
