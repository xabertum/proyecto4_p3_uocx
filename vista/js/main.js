/**
 * Funcion que muestra la fecha actual
 */
function formatDate(date) {
    var monthNames = [
      "Enero", "Febrero", "Marzo",
      "Abril", "Mayo", "Junio", "Julio",
      "Agosto", "Septiembre", "Octubre",
      "Noviembre", "Diciembre"
    ];

    var days = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
    var day = date.getDate();
    var monthIndex = date.getMonth();
      
    return days[new Date().getDay()] + ', ' + day + ' ' + monthNames[monthIndex]; 
  }

document.getElementById("date").innerHTML = formatDate(new Date);




