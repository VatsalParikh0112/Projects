
$(document).ready(function () {
  $('.btn1').on('click', function () {
    let value = $(this).text();

    if (value === '=') {
      let result = eval($('#result').val());
      $('#result-output').val(result);
    } else if (value === 'AC') {
      $('#result').val('');
      $('#result-output').val('');
    } else {
      $('#result').val($('#result').val() + value);
    }
  });
});

$(document).ready(function () {
  $('.popup').show();
  $('.close-btn').click(function () {
    $('.popup').hide();
  });
});

$(document).ready(function () {
  $('#result').show();
  $('#result-output').hide();
  $('#equal').click(function () {
    $('#result').hide();
    $('#result-output').show();
  });
});

$(document).ready(function () {
  $('result-output').show();
  $('#clear').click(function() {
    $('#result').show();
    $('#result-output').hide();
  });
});