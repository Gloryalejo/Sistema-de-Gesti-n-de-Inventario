import './bootstrap';
// Este script se ejecutará cuando el interruptor cambie de estado
document.addEventListener('DOMContentLoaded', function() {
    // Busca el interruptor por su ID
    const darkModeToggle = document.getElementById('darkModeToggle');
    
    // Asegúrate de que el interruptor exista en la página
    if (darkModeToggle) {
        // Agrega un event listener para el cambio de estado del interruptor
        darkModeToggle.addEventListener('change', function() {
            // Si el interruptor está activado, agrega la clase 'dark-mode' al body, de lo contrario, retírala
            document.body.classList.toggle('dark-mode', darkModeToggle.checked);
            
            // Si prefieres aplicar la clase a un contenedor específico en lugar del body, 
            // puedes reemplazar 'document.body' con el selector correspondiente.
        });
    }
});
