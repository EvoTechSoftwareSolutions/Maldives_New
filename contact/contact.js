function sendMessage() {

    var f = new FormData();
    f.append("name", document.getElementById("name").value);
    f.append("email", document.getElementById("email").value);
    f.append("subject", document.getElementById("subject").value);
    f.append("message", document.getElementById("message").value);

    // alert("Form Data: \n" +
    //     "Name: " + document.getElementById("name").value + "\n" +
    //     "Phone: " + document.getElementById("phone").value + "\n" +
    //     "Email: " + document.getElementById("mail").value + "\n" +
    //     "Message: " + document.getElementById("message").value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            if (r.responseText == "Message Sent successfully") {
                document.getElementById("name").value = "";
                document.getElementById("email").value = "";
                document.getElementById("subject").value = "";
                document.getElementById("message").value = "";
                swal("Message sent", "We'll get back to you soon", "success");


            } else {
                swal("Try Again", r.responseText, "error");
            }

            document.getElementById("sub_btn").disabled = false;
            document.getElementById("sub_btn").classList.remove("disable");

        }
    }

    r.open("POST", "../mail/sendQueryProcess.php", true);
    r.send(f);
    document.getElementById("sub_btn").disabled = true;
    document.getElementById("sub_btn").classList.add("disable");

}