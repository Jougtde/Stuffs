// This is a manifest file that'll be compiled into application.js, which will include all the files
// listed below.
//
// Any JavaScript/Coffee file within this directory, lib/assets/javascripts, vendor/assets/javascripts,
// or any plugin's vendor/assets/javascripts directory can be referenced here using a relative path.
//
// It's not advisable to add code directly here, but if you do, it'll appear at the bottom of the
// compiled file.
//
// Read Sprockets README (https://github.com/rails/sprockets#sprockets-directives) for details
// about supported directives.
//
//= require jquery
//= require jquery.turbolinks
//= require jquery_ujs
//= require jquery.datetimepicker
//= require jquery.datetimepicker/init
//= require jquery.raty
//= require jquery-ui
//= require jquery-ui/autocomplete

//= require_tree .

//= require ratyrate
//= require bootstrap-sprockets
//= require semantic-ui
//= require algolia/v3/algoliasearch.min
//= require algolia/typeahead.jquery
//= require hogan
//= require autocomplete-rails
//= require social-share-button
//= require chartist

//= require turbolinks

$(document).ready(function() {
  $('.message .close')
  .on('click', function() {
    $(this)
    .closest('.message')
    .transition('fade')
    ;
  });
});

$(document).ready(function() {
jQuery('#datetimepicker3').datetimepicker({
  format:'d.m.Y H:i',
  timepicker:true,
  inline:true,
  minDate:'0',
  maxDate:'+1970/01/10'
});
});

$(document).ready(function() {
  var client = algoliasearch('28WZMOPXJR', 'c4f17b7addb30f23aee11e063ac363c2');
  var template = Hogan.compile('<div class="ui message">{{{_highlightResult.title.value}}}</div>');
  $('input#title_search').typeahead(null, {
    source: client.initIndex('Product').ttAdapter(),
    displayKey: 'title',
    templates: {
      suggestion: function(hit) {
        return template.render(hit);
      }
    }
  });
});
