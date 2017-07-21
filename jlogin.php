
<html>
<head>
<script>  
  function check(form) {
  if (form.email.value == "id@gmail.com") {
    document.getElementById("displayu").innerHTML ="correct username".fontcolor("green");
  } else if (form.email.value == "") {
    document.getElementById("displayu").innerHTML ="<font color='red'>blank username</font>";
  } else if (form.email.value != "") {
    var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
      document.getElementById("displayu").innerHTML ="Please provide a valid email address";
      
    }
       else {document.getElementById("displayu").innerHTML ="wrong email";} 
 } 
   
  if (form.pswrd.value == "123") {
    document.getElementById("displayp").innerHTML ="correct password";
  } else if (form.pswrd.value == "") {
    document.getElementById("displayp").innerHTML ="<span style='color:red'>blank password</span>";
  }
 else {document.getElementById("displayp").innerHTML ="wrong password";} 
  makeRequest('http://localhost/cart/welcome.php');
    }
	
	
	  function makeRequest(url) {
    httpRequest = new XMLHttpRequest();

    if (!httpRequest) {
      alert('Giving up :( Cannot create an XMLHTTP instance');
      return false;
    }
    httpRequest.onreadystatechange = alertContents;
    httpRequest.open('GET', url);
    httpRequest.send();
  }

  function alertContents() {
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
      if (httpRequest.status === 200) {
        alert(httpRequest.responseText);
      } else {
        alert('There was a problem with the request.');
      }
    }
  }
</script>  
</head>
<body>
<h1>for login</h1>
<h3>email=id@gmail.com   and password=123</h3>
<form name="login">
<div id="displayu"></div>
<div id="displayp"></div>
  Username <input type="text" name="email" id="email" />
  Password <input type="password" name="pswrd"/>
  <input type="button" onclick="check(this.form)" value="Login" />
  
  <input type="reset" value="reset"/>
</form>

</body>
</html>
