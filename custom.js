$("#findMyPostalCode").click(function(event) {

  var result=0;

  $(".alert").hide();

  event.preventDefault();
  
  $.ajax({
    type: "GET",
    url: "https://maps.googleapis.com/maps/api/geocode/xml?address="+ encodeURIComponent($('#address').val()) +"&key=AIzaSyD4J01gtYCsYP3sRJWCZvV9c6izTcuYImI",
    dataType: "xml",
    success: processXML,
    error: error
  });

});

function error() {
  $("#fail2").fadeIn();
}

function processXML(xml) {

  $(xml).find("address_component").each(function() {

    if ($(this).find("type").text() == "postal_code") {

     
      $("#success").html("The postal code you need is "+$(this).find('long_name').text()).fadeIn();

      result=1;

    }

  });

  if (result==0) {
    $("#fail").fadeIn();
  }

}

