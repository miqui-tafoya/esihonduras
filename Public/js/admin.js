// menu admin Dashboard
$(function () {
  "use strict";
  $('.dash').on("click", function () {
    $(this).next().slideToggle(100);
  });
});

// medidor de letras
$("textarea[data-limit-input]").keyup(function (e) {
  var $this = $(this),
    charLength = $this.val().length,
    charLimit = $this.attr("data-limit-input");
  // Displays count
  $this.next("span").html(charLength + " / " + charLimit);
  // Alert when max is reached
  if ($this.val().length > charLimit) {
    $this.next("span").html("<strong>Límite de " + charLimit + " caracteres.</strong>");
  }
});
$("textarea[data-limit-input]").keydown(function (e) {
  var $this = $(this),
    charLength = $this.val().length,
    charLimit = $this.attr("data-limit-input");
  if ($this.val().length > charLimit && e.keyCode !== 8 && e.keyCode !== 46) {
    return false;
  }
});

// elimina caracteres especiales y espacios
function llenar() {
  let str = document.getElementById("tema-n").value;
  let pro = str.replace(/\s/g, "-");
  let res = pro.toLowerCase();
  document.getElementById("tema-s").value = res.normalize('NFD').replace(/[\u0300-\u036f]/g, "");
}

// ckeditor
// CKEDITOR.config.extraPlugins = 'codeTag';
// CKEDITOR.replace('edibdy', {
//   filebrowserUploadMethod: 'form',
//   filebrowserBrowseUrl: URL_PUBLIC + 'vendor/ckeditor/browse.php?type=Images',
//   // filebrowserUploadUrl: '../../app/control/ckupload.php',
// });
