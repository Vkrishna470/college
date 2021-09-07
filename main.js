// $(document).ready(function () {
//     $('#submit').on('submit', function (e) {
//         var max = parseInt(document.getElementById('income').value);
//         if (max > 100000) {
//             // document.getElementById('log').innerHTML = "min is larger than max";
//             alert("min_value field > 100000");
//         } else {
//             // document.getElementById('log').innerHTML = "max is larger than min";
//             alert("min_value field >100000");
//         }
//     })
// });


// function validate(){
//     var max = parseInt(document.getElementById('income').value);
//     var min = 100000;
//     if (max > min) {
//         alert('Minvalue is greter than Maxvalue');
//          return false;
//     }else{
//           alert('Maxvalue is greter than Minvalue');
//          return false;
//     }

// }

$(document).ready(function () {
    document.getElementById('dataTable').style.display = "none";
});

function show()
{
    document.getElementById('dataTable').style.display = "block";
}