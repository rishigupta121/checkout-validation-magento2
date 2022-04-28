
define([
  'jquery',
  'jquery/validate'
], function($){
  'use strict';
  return function(validator) {
    var res= true;
      validator.addRule(
          "validate-postcode",
          function(value) {
             let countrycode = jQuery('select[name="country_id"]').find(":selected").val();
            (typeof countrycode==undefined) ? jQuery('select[name="country_id"]').find(":selected").val() :countrycode
             window.msg="";
              switch (countrycode) {
                case 'DE':{
                  if(value.toString().length!=5){
                    res=false;
                    window.msg= $.mage.__("Only 5 digit is allowed");
                  }else{
                    res=true;
                  }
                  break;
                }
                case 'AT':{
                  if(value.toString().length!=4){
                    res=false;
                    window.msg= $.mage.__("Only 4 digit is allowed");
                  }else{
                    res=true;
                  }
                  break;
                }
                case 'CH':{
                  if(value.toString().length!=4){
                    res=false;
                    window.msg= $.mage.__("Only 4 digit is allowed");
                  }else{
                    res=true;
                  }
                  break;
                }
              
                default:{
                  res=true;
                  break;
                }
              }
            return res;
          },function(){
            return $.mage.__(window.msg);
          }
      );
      return validator;
  }
  });

