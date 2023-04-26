$(document).ready(function () {
  $("#contact").click(function (e) {
    e.preventDefault();
    let firstName = $("#first-name").val();
    let lastName = $("#last-name").val();
    let emailAddress = $("#email-address").val();
    let phoneNumber = $("#phone-number").val();
    let companyName = $("#company-name").val();
    var countryNames = $('#select option:selected').val();
    $.ajax({
        url:'includes/insert.php',
        method:'post',
        data:{
            first_name:firstName,
            last_name:lastName,
            email:emailAddress,
            phone_number:phoneNumber,
            commpany_name:companyName,
            country_name:countryNames,
        },
        success: function(data){
                alert('data inserted successfully');
        }
    });
  });
});
