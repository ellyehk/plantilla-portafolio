function loadComponent(id, file) {
  fetch(file)
    .then(response => {
      if (!response.ok) throw new Error(`Error al cargar ${file}`);
      return response.text();
    })
    .then(data => {
      document.getElementById(id).innerHTML = data;
    })
    .catch(error => console.error(error));
}

document.addEventListener("DOMContentLoaded", function() {
  // Detectar si estamos en una subcarpeta
  const isInSubfolder = window.location.pathname.includes("/projects/");

  // Si estamos en subcarpeta, subimos un nivel con "../"
  const basePath = isInSubfolder ? "../" : "";

  if (document.getElementById("navbar-container")) {
    loadComponent("navbar-container", `${basePath}components/navbar.html`);
  }

  if (document.getElementById("footer-container")) {
    loadComponent("footer-container", `${basePath}components/footer.html`);
  }
});
