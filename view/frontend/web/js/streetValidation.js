


define([
  'jquery',
  'jquery/validate'
], function($){
  'use strict';
  return function(validator) {
      validator.addRule(
          "validate-country",
          function(value) {
            var streetAddRegEx = new RegExp('^(?=.*[a-zA-Z])(?=.*[0-9])');
            let res = streetAddRegEx.test(value);
              return res;
          },
          $.mage.__("Please enter your street and house number.")
      );
      return validator;
  }
  });
