document.addEventListener("DOMContentLoaded", () => {
  const darkToggle = document.getElementById("dark-toggle");
  const themeCheckbox = document.getElementById("themeCheckbox");

  if (darkToggle && themeCheckbox) {
    if (localStorage.getItem("darkMode") === "enabled") {
      document.documentElement.classList.add("dark");
      darkToggle.checked = true;
      themeCheckbox.checked = true;
    }

    darkToggle.addEventListener("change", () => {
      if (darkToggle.checked) {
        document.documentElement.classList.add("dark");
        localStorage.setItem("darkMode", "enabled");
        themeCheckbox.checked = true;
      } else {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("darkMode", "disabled");
        themeCheckbox.checked = false;
      }
    });

    themeCheckbox.addEventListener("change", () => {
      if (themeCheckbox.checked) {
        document.documentElement.classList.add("dark");
        localStorage.setItem("darkMode", "enabled");
        darkToggle.checked = true;
      } else {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("darkMode", "disabled");
        darkToggle.checked = false;
      }
    });
  }
});