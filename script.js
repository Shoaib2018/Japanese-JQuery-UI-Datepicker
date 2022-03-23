$(document).ready(function () {
  var options = $.extend({}, $.datepicker.regional["ja"], {
    dateFormat: "yy年mm月dd日",
    changeMonth: true,
    changeYear: true,
    highlightWeek: true,
    yearRange: "1970:2100",
  });

  $("#japaneseCalendar").datepicker(options);
});
