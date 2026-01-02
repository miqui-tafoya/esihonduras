function ver() {
  let x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function refreshCaptcha() {
  const img = document.getElementById('captcha_image');
  img.src = 'captcha?' + new Date().getTime();
}