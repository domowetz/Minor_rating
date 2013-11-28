  $(function() {
    $( "#slider-range-max-1" ).slider({
      range: "max",
      min: 1,
      max: 5,
      value: 3,
      slide: function( event, ui ) {
        $( "#f1" ).val( ui.value );
      }
    });
    $( "#f1" ).val( $( "#slider-range-max-1" ).slider( "value" ) );
  });
  
   $(function() {
    $( "#slider-range-max-2" ).slider({
      range: "max",
      min: 1,
      max: 5,
      value: 3,
      slide: function( event, ui ) {
        $( "#f2" ).val( ui.value );
      }
    });
    $( "#f2" ).val( $( "#slider-range-max-2" ).slider( "value" ) );
  });
  
   $(function() {
    $( "#slider-range-max-3" ).slider({
      range: "max",
      min: 1,
      max: 5,
      value: 3,
      slide: function( event, ui ) {
        $( "#f3" ).val( ui.value );
      }
    });
    $( "#f3" ).val( $( "#slider-range-max-3" ).slider( "value" ) );
  });
  
  $(function() {
    $( "#slider-range-max-4" ).slider({
      range: "max",
      min: 1,
      max: 5,
      value: 3,
      slide: function( event, ui ) {
        $( "#f4" ).val( ui.value );
      }
    });
    $( "#f4" ).val( $( "#slider-range-max-4" ).slider( "value" ) );
  });
  
  $(function() {
    $( "#slider-range-max-5" ).slider({
      range: "max",
      min: 1,
      max: 5,
      value: 3,
      slide: function( event, ui ) {
        $( "#f5" ).val( ui.value );
      }
    });
    $( "#f5" ).val( $( "#slider-range-max-5" ).slider( "value" ) );
  });
  
  $(function() {
    $( "#slider-range-max-6" ).slider({
      range: "max",
      min: 1,
      max: 5,
      value: 3,
      slide: function( event, ui ) {
        $( "#f6" ).val( ui.value );
      }
    });
    $( "#f6" ).val( $( "#slider-range-max-6" ).slider( "value" ) );
  });