
      $("#hp").intlTelInput({
  
         geoIpLookup: function(callback) {
          $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
             var countryCode = (resp && resp.country) ? resp.country : "";
             callback(countryCode);
          });
        },
        
    initialCountry: "auto",
    allowExtensions: true,
    allowDropdown: true,
    autoFormat: false,
    autoHideDialCode: false,
    autoPlaceholder: false,
    defaultCountry: "auto",
    ipinfoToken: "yolo",
    nationalMode: false,
    numberType: "MOBILE",
    //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    //preferredCountries: ['cn', 'jp'],
      preventInvalidNumbers: true,
        utilsScript: "{{asset('reveal/lib/intel/build/js/utils.js')}}"
      });



        $("#mhp").intlTelInput({
    
           geoIpLookup: function(callback) {
            $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
               var countryCode = (resp && resp.country) ? resp.country : "";
               callback(countryCode);
            });
          },
          
      initialCountry: "auto",
      allowExtensions: true,
      allowDropdown: true,
      autoFormat: false,
      autoHideDialCode: false,
      autoPlaceholder: false,
      defaultCountry: "auto",
      ipinfoToken: "yolo",
      nationalMode: false,
      numberType: "MOBILE",
      //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      //preferredCountries: ['cn', 'jp'],
        preventInvalidNumbers: true,
          utilsScript: "{{asset('reveal/lib/intel/build/js/utils.js')}}"
        });


          $("#mmhp").intlTelInput({
      
             geoIpLookup: function(callback) {
              $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                 var countryCode = (resp && resp.country) ? resp.country : "";
                 callback(countryCode);
              });
            },
            
        initialCountry: "auto",
        allowExtensions: true,
        allowDropdown: true,
        autoFormat: false,
        autoHideDialCode: false,
        autoPlaceholder: false,
        defaultCountry: "auto",
        ipinfoToken: "yolo",
        nationalMode: false,
        numberType: "MOBILE",
        //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        //preferredCountries: ['cn', 'jp'],
          preventInvalidNumbers: true,
            utilsScript: "{{asset('reveal/lib/intel/build/js/utils.js')}}"
          });


            $("#sign").intlTelInput({
        
               geoIpLookup: function(callback) {
                $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                   var countryCode = (resp && resp.country) ? resp.country : "";
                   callback(countryCode);
                });
              },
              
          initialCountry: "auto",
          allowExtensions: true,
          allowDropdown: true,
          autoFormat: false,
          autoHideDialCode: false,
          autoPlaceholder: false,
          defaultCountry: "auto",
          ipinfoToken: "yolo",
          nationalMode: false,
          numberType: "MOBILE",
          //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
          //preferredCountries: ['cn', 'jp'],
            preventInvalidNumbers: true,
              utilsScript: "{{asset('reveal/lib/intel/build/js/utils.js')}}"
            });


        $("#perhp").intlTelInput({
    
           geoIpLookup: function(callback) {
            $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
               var countryCode = (resp && resp.country) ? resp.country : "";
               callback(countryCode);
            });
          },
          
      initialCountry: "auto",
      allowExtensions: true,
      allowDropdown: true,
      autoFormat: false,
      autoHideDialCode: false,
      autoPlaceholder: false,
      defaultCountry: "auto",
      ipinfoToken: "yolo",
      nationalMode: false,
      numberType: "MOBILE",
      //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      //preferredCountries: ['cn', 'jp'],
        preventInvalidNumbers: true,
          utilsScript: "{{asset('reveal/lib/intel/build/js/utils.js')}}"
        });

 