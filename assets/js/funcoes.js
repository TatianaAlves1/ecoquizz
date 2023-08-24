function ocultar_alerta(){
    setTimeout(() => {
        const div = document.getElementById("alerta");
        div.style.visibility = 'hidden';
    }, 4000);
}