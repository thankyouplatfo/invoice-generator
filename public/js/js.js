//The value of the added tax in Saudi Arabia
const THE_VALUE_OF_THE_ADDED_TAX_IN_SAUDI_ARABIA = 15;
$('input#price').on('input', function () {
  const inputPrice = 'input#tax_value';
  $(inputPrice).val(Number(($(this).val() * THE_VALUE_OF_THE_ADDED_TAX_IN_SAUDI_ARABIA) / 100).toFixed(2));
  var net_tot = Number($(this).val()) + Number($('input#tax_value').val());
  var val = net_tot
  $('input#net_total').val(Number(val).toFixed(2));
});
// Invoice operations = total
var total = 0
$('input[id="price"]').each(function () {
  total += parseInt($(this).val());
});
$('#invoice-total').val(total)
// Invoice operations = total tax
var total = 0
$('input[id="tax_value"]').each(function () {
  total += parseInt($(this).val());
});
$('#invoice-tax_value').val(total)
// Invoice operations = Payments and the rest
$('#invoice-net_tot').val(Number(Number($('#invoice-total').val()) + Number($('#invoice-tax_value').val())))
//
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-green";
  } else {
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className =
      x.previousElementSibling.className.replace(" w3-green", "");
  }
}