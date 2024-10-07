function sendRequest() {

    var f = new FormData();
    f.append("name", document.getElementById("name").value);
    f.append("email", document.getElementById("email").value);
    f.append("datetime", document.getElementById("datetime").value);
    f.append("select1", document.getElementById("select1").value);
    f.append("person", document.getElementById("person").value);
    f.append("kids", document.getElementById("kids").value);
    f.append("message", document.getElementById("message").value);
  
  
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
      if (r.readyState == 4) {
        if (r.responseText == "Message Sent successfully") {
          document.getElementById("name").value = "";
          document.getElementById("email").value = "";
          document.getElementById("datetime").value = "";
          document.getElementById("select1").value = "";
          document.getElementById("person").value = "";
          document.getElementById("kids").value = "";
          document.getElementById("message").value = "";
          swal("Message sent", "We'll get back to you soon", "success");
  
  
        } else {
          swal("Try Again", r.responseText, "error");
        }
  
        document.getElementById("btn").disabled = false;
        document.getElementById("btn").classList.remove("disable");
  
      }
    }
  
    r.open("POST", "../mail/sendEmailProcess.php", true);
    r.send(f);
    document.getElementById("btn").disabled = true;
    document.getElementById("btn").classList.add("disable");
  
  
  }