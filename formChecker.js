function validateEmail(email) //https://stackoverflow.com/questions/46155/how-to-validate-email-address-in-javascript
{
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}
function check()
{
  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;
  var solo = document.getElementById('solo').value;
  var full = document.getElementById('full').value;
  var dec = document.getElementById('dec').value;
  var ship = document.getElementById('Shipping').value;
  if(!validateEmail(email))
  {
    alert("You must enter a valid email.");
    return false;
  }
  if(password == "")
  {
    alert("You must enter a password.");
    return false;
  }
  if(solo == "" || full == "" || dec == "")
  {
    alert("You must enter a quantity for the items.");
    return false;
  }
  if(ship == "" || ship == null)
  {
    alert("You must enter a shipping preference.");
    return false;
  }
  return true;
}
