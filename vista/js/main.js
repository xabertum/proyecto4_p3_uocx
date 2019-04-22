/**
 * Funcion que muestra la fecha actual
 */
function formatDate(date) {
    var monthNames = [
      "January", "February", "March",
      "April", "May", "June", "July",
      "August", "September", "October",
      "November", "December"
    ];

    var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    var day = date.getDate();
    var monthIndex = date.getMonth();
      
    return days[new Date().getDay()] + ' , ' + day + ' ' + monthNames[monthIndex]; 
  }

document.getElementById("date").innerHTML = formatDate(new Date);




