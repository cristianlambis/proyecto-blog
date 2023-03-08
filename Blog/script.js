// Obtener todos los botones "Leer más"
const readMoreButtons = document.querySelectorAll('a[href="#more"]');

// Añadir evento a cada botón "Leer más"
readMoreButtons.forEach(button => {
  button.addEventListener('click', e => {
    e.preventDefault(); // Prevenir comportamiento por defecto

    const article = button.parentNode; // Obtener elemento padre (article)
    const paragraphs = article.querySelectorAll('p'); // Obtener todos los párrafos

    // Cambiar el texto del botón "Leer más" según su estado
    if (button.textContent === 'Leer más') {
      button.textContent = 'Leer menos';
    } else {
      button.textContent = 'Leer más';
    }

    // Ocultar o mostrar párrafos según su estado
    paragraphs.forEach(p => {
      if (p.style.display === 'none') {
        p.style.display = 'block';
      } else {
        p.style.display = 'none';
      }
    });
  });
});




