$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
  });

$('#Street').prop('disabled', true);
$('#City').prop('disabled', true);


$('#Country').on('change', function() {


    $.ajax({
    type:'GET',
    url:'/api/city-all/'+this.value ,
    success:function(data) { 
        // console.log(data);
        $("#City") .empty();
        $("#City").append('<option value=""> Where: City </option>');
        data.forEach(element => {
            
            $("#City").append('<option value="'+element.id+'">'+element.name+'</option>');
        });
        
    }
    });

    $('#City').prop('disabled', false);

    $("#Street") .empty();
    $('#Street').prop('disabled', true);

});

$('#City').on('change', function() {

    $.ajax({ 
    type:'GET',
    url:'/api/street-all/'+this.value ,
    success:function(data) { 
        // console.log(data);
        $("#Street") .empty();
        $("#Street") .append('<option value="">Where:  Street  </option>');
        data.forEach(element => {
            
            $("#Street").append('<option value="'+element.id+'">'+element.name+'</option>');
        });
        
    }
    });
    $('#Street').prop('disabled', false);

});

// $('#Street').on('change', function() {

//     $('#Street').prop('disabled', true);

// });