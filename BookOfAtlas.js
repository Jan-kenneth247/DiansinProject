
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}



$(document).ready(() => {
$.ajax({
url: "http://localhost:8081/DiansinProject/API.php",
method: "GET",
success: res => {
var response_array = JSON.parse(res);
response_array.forEach(data => {
  var row = $("<td style='border:1px solid black;' >");
  $(row).append(
    $("<h1> ").text(data.country),
    $("<p style='color:red;'>").text(data.capital),
    // $("<td>").text(data.area),
    // $("<td>").text(data.population)
  );
  $("#getCountry").append(row);
});
}
});
});

//   $.ajax({
//      url:"localhost:8081",
//      method:"GET",
//      success:function(res){
//          $('#table').append(`<tr>${res.country}</tr>`)
//      }
//   })

