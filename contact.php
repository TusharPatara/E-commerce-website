<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

button[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

button[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container5{
  border-radius: 5px;
  background-color: #f2f2f2;
  padding:10px 200px;
}

/* Create two columns that float next to eachother */
.column1 {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column1, button[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<div class="text-center pt-2 h5" >
    <h3 style="background-color : yellow; padding: 10px; font-family: Comic Sans; font-weight: bold">Contact us <br><p style="font-size: 15px; padding-top: 10px; font-family: Comic Sans;">Swing by for a cup of coffee, or leave us a message:</p></h3>
</div>
<div class="container5">
  <div class="row">
    <div class="column1">
      <img src="images/logo.png" style="width:100%; padding-top: 70px" height="300">
    </div>
    <div class="column1">
      <form>
        <label for="fname">First Name</label>
        <input type="text" id="firstName" name="firstname" placeholder="Your name.." required>
        <label for="lname">Last Name</label>
        <input type="text" id="lastName" name="lastname" placeholder="Your last name..">
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px" required></textarea>
        <button type="submit" id="btn1">Submit</button>
      </form>
    </div>
  </div>
</div>
<script>
    document.getElementById('btn1').addEventListener('click', myFun);
    function myFun(){
      let A = document.getElementById("firstName").value;
      let B = document.getElementById("lastName").value;
      alert (`Your data is saved...Frist Name : ${A} and Last Name : ${B}`);
    }
</script>

</body>
</html>
