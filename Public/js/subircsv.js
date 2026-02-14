document.getElementById('formacsv').addEventListener('submit', function (e) {
    e.preventDefault();

    const form = e.target;
    const fileInput = document.getElementById('csvFile');
    const loadingDiv = document.getElementById('loading');
    const mensajeDiv = document.getElementById('mensaje');
    const submitBtn = form.querySelector('button[type="submit"]');

    if (fileInput.files.length === 0) {
        mensajeDiv.innerHTML = '<p style="color: red;">Selecciona un archivo CSV</p>';
        return;
    }

    loadingDiv.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Procesando archivo...';
    loadingDiv.classList.remove('hidden');
    mensajeDiv.innerHTML = '';
    submitBtn.disabled = true;
    submitBtn.style.opacity = '0.5';
    submitBtn.style.cursor = 'not-allowed';

    const formData = new FormData();
    formData.append('csvFile', fileInput.files[0]);

    fetch('procesarcsv', {
        method: 'POST',
        body: formData
    })
        .then(response => {
            if (!response.ok) throw new Error('Error en respuesta del servidor');
            return response.json();
        })
        .then(data => {
            if (data.success) {
                mensajeDiv.innerHTML = `<p style="color: green; font-weight: bold;">${data.message}</p>`;
                fileInput.value = '';
            } else {
                mensajeDiv.innerHTML = `<p style="color: red; font-weight: bold;">Error: ${data.message}</p>`;
            }
        })
        .catch(error => {
            mensajeDiv.innerHTML = `<p style="color: red; font-weight: bold;">Error de red: ${error.message}</p>`;
        })
        .finally(() => {
            loadingDiv.classList.add('hidden');
            loadingDiv.innerHTML = '';
            submitBtn.disabled = false;
            submitBtn.style.opacity = '1';
            submitBtn.style.cursor = 'pointer';
        });
});