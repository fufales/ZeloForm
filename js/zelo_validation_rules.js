$("#zeloform_k").submit(function () {  
    if($(".input_textform_name").val().length < 7) {  
        
        $( ".op_up_validation" ).fadeIn( "slow", function() {
  		});

  		$( ".fi_control_filecon" ).fadeIn( "slow", function() {
  		});
    return false;
    }  
});

$("#zeloform_k").submit(function () {  
    if($(".input_textform_mail").val().length < 7) {  
        
        $( ".op_up_validation" ).fadeIn( "slow", function() {
  		});

  		$( ".fi_control_filecon_1" ).fadeIn( "slow", function() {
  		});
    return false;
    }  
});

$("#zeloform_k").submit(function () {  
    if($(".input_textareaform_mensaj").val().length < 10) {  
        
        $( ".op_up_validation" ).fadeIn( "slow", function() {
  		});

  		$( ".fi_control_filecon_3" ).fadeIn( "slow", function() {
  		});
    return false;
    }  
});

$("#zeloform_k").submit(function () {  
    if($(".input_textform_asunto").val().length < 7) {  
        
        $( ".op_up_validation" ).fadeIn( "slow", function() {
  		});

  		$( ".fi_control_filecon_2" ).fadeIn( "slow", function() {
  		});
    return false;
    }  
});

$( ".op_up_validation_bg" ).click(function() {
  $( ".op_up_validation" ).fadeOut( "slow" );
  $( ".fi_control_filecon_hide" ).fadeOut( "slow" );
});