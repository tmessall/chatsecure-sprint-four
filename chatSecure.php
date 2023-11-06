<!DOCTYPE html>
<html>
<head>
        <link href="myStylesheet.css"
            rel="stylesheet"
            type="text/css"/>
</head>
<body>
<div class="header">
    <h1>ChatSecure</h1>
    <div>
      <form action="">
        <select name="users" onchange="getUsers(this.value)">
          <option value="">Select an option:</option>
          <option value="getUsers">Get Users</option>
        </select>
      </form>
    </div>
    <div id="chatSecureUsers"></div>
</div>



<script>
function getUsers(str) {	
  var xhttp;
  if (str == "") {
    document.getElementById("chatSecureUsers").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("chatSecureUsers").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getChatSecureUser.php");
  xhttp.send();
}
</script>

</body>
</html>
