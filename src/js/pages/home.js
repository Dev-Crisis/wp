import { isPage } from "../functions";

document.addEventListener("DOMContentLoaded", () => {
  if (isPage("home")) {
    const cta = document.querySelector("div.cta");

    if (cta) {
      console.log("CTA IS HERE");
    }
  }
});
