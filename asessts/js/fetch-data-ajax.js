$(document).ready(function(){
$.ajax({
    url:'includes/fetch-data.php',
    method:'post',
    success: function(data){
       $('#table-data').html(data);
    }
})

})