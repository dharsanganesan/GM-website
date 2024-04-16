<!DOCTYPE html>
<html>
<head>
<head>
  <title>Empolyee's Histroy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 300px;
}
</style>
</head>
<body>

<div>
<h2 style="margin-top:29px;">Employee's record</h2>
<section class="pop">
<div class="container">
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
    Add record
  </button>
  <form method="POST" action="empoyeeroot.php" autocomplete="off">
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title"><span><i class="fa fa-plus-square" aria-hidden="true"></i></span><span style="font-size: 15px; color: #96a4a4; padding-left: 5px;">Add Record</span></h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <label style="font-weight:700"> Date : </label><br>
              <input type="date" id="birthday" name="date" class="else" required><br>
          <label style="font-weight: bolder;">Name of the Employee:<span class="star">*</span></label><br>
          <input class="input ai" name="ename"  placeholder="Enter Employee Name"required><br>
          <label style="font-weight: bolder; margin-top:15px;" >Saree's folded</label><br>
          <input class="input ai" name="salary"  placeholder="No.of saree folded" required><br>
              <input type="checkbox" style=" margin-top:20px; margin-left:25px;" id="myCheck" name="amount" onclick="myFunction()">
              <label for="myCheck" style="font-weight: 700; margin-left:7px;">Amount</label> 
              <div id="text" style="display:none">
              <label style="font-weight:700">Given :</label>
              <input style="width:150px; margin-left:07px">
              <label style="font-weight:700">Given date :</label>
              <input type="date" style="margin-left:10px;" id="birthday" name="birthday"><br>
              <label style="font-weight:700">Return :</label>
              <input style="width:150px;">
              <label style="font-weight:700">Return date : </label>
              <input type="date" id="birthday" name="birthday">
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger " data-dismiss="modal" style="margin-right:45vh;"><span><i class="fa fa-times" aria-hidden="true"></i></span><span style="margin-left: 7px;">Close</span></button>
          <!-- <button type="submit" class="btn btn-blue selection" data-dismiss="modal"><span ><i class="fa fa-floppy-o" aria-hidden="true"></i></span><span style="margin-left: 7px;" name="save">Save</span></button> -->
          <input type="submit" onclick="popup()" class="function" value="Submit">
        </div>
        
      </div>
    </div>
  </div>
</form>
</div>
</section>
</section>
</div>
<div class="tab">
<button  id="defaultOpen" class="tablinks" onclick="openCity(event, 'welcome')">Welcome!</button>
  <button name="kalaivani" class="tablinks" onclick="openCity(event, 'Kalaivani')">Kalaivani</button>
  <button class="tablinks" onclick="openCity(event, 'Thangamani')">Thangamani</button>
  <button class="tablinks" onclick="openCity(event, 'Sandhya')">Sandhya</button>
  <button class="tablinks" onclick="openCity(event, 'Ramya')">Ramya </button>
  <button class="tablinks" onclick="openCity(event, 'Sita')">Sita</button>
  <button class="tablinks" onclick="openCity(event, 'Meena')">Meena</button>
  <button class="tablinks" onclick="openCity(event, 'Vetri')">Vetri</button>
  <button class="tablinks" onclick="openCity(event, 'Pavitra')">Pavitra</button>
  <button class="tablinks" onclick="openCity(event, 'Jodi')">Jodi</button>
  <button class="tablinks" onclick="openCity(event, 'Mohana')">Mohana</button>
  <button class="tablinks" onclick="openCity(event, 'Satya')">Satya</button>
  <button class="tablinks" onclick="openCity(event, 'Nazia')">Nazia</button>
  <button class="tablinks" onclick="openCity(event, 'Jenny')">Jenny</button>
  <button class="tablinks" onclick="openCity(event, 'Hamza')">Hamza</button>
  <button class="tablinks" onclick="openCity(event, 'Priya')">Priya</button>
  <button class="tablinks" onclick="openCity(event, 'Kousalya')">Kousalya</button>
</div>
<div id="welcome" class="tabcontent">
  <h3>Salary</h3>
  <p>Welcome to employee Salary</p>
</div>
<div id="Kalaivani" class="tabcontent">
  <h3>Salary</h3>
  <p>i am kalaivani</p>
</div>

<div id="Thangamani" class="tabcontent">
  <h3>thangamani</h3>
  <p>i am thangamani</p> 
</div>

<div id="Sandhya" class="tabcontent">
  <h3>sandhya</h3>
  <p>i am sandhya</p>
</div>
<div id="Ramya" class="tabcontent">
  <h3>Salary</h3>
  <table id="customers">
  <tr>
    <th>s.no</th>
    <th>date</th>
    <th>name</th>
    <th>salary</th>
  </tr>
  <tr>
    <td>1</td>
    <td>25-06-2220</td>
    <td>Ramya</td>
    <td>100</td>
  </tr>
  <tr>
    <td>2</td>
    <td>26-06-2220</td>
    <td>Ramya</td>
    <td>120</td>
  </tr>
  <tr>
    <td>3</td>
    <td>27-06-2220</td>
    <td>Ramya</td>
    <td>140</td>
  </tr>
  <tr>
    <td>4</td>
    <td>28-06-2220</td>
    <td>Ramya</td>
    <td>250</td>
  </tr>
  <tr>
    <td>5</td>
    <td>29-06-2220</td>
    <td>Ramya</td>
    <td>200</td>
  </tr>
</table>
</div>

<div id="Sita" class="tabcontent">
  <h3>sita</h3>
  <p>i am sita</p> 
</div>

<div id="Meena" class="tabcontent">
  <h3>meena</h3>
  <p>i am meena</p>
</div>
<div id="Vetri" class="tabcontent">
  <h3>vetri</h3>
  <p>i am vetri</p>
</div>
<div id="Pavitra" class="tabcontent">
  <h3>Pavitra</h3>
  <p>i am pavitra</p>
</div>
<div id="Jodi" class="tabcontent">
  <h3>jodi</h3>
  <p>i am jodi</p>
</div>
<div id="Mohana" class="tabcontent">
  <h3>mohana</h3>
  <p>i am mohana</p>
</div>
<div id="Satya" class="tabcontent">
  <h3>satya</h3>
  <p>i am satya</p>
</div>
<div id="Nazia" class="tabcontent">
  <h3>nazia</h3>
  <p>i am nazia</p>
</div>
<div id="Jenny" class="tabcontent">
  <h3>jenny</h3>
  <p>i am jenny</p>
</div>
<div id="Hamza" class="tabcontent">
  <h3>hamza</h3>
  <p>i am hamza</p>
</div>
<div id="Priya" class="tabcontent">
  <h3>priya</h3>
  <p>i am priya</p>
</div>
<div id="Kousalya" class="tabcontent">
  <h3>Kousalya</h3>
  <p> i am Kousalya</p>
</div>


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

//this is for pop up check box
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
function popup() {
  alert("That's good u have enter the details successfully!");
}
</script>
</body>
<style>
  
    .container{margin-left: 81%;margin-top: -49px; margin-bottom: 40px;}
    .ai{width: 40vh;height: 7vh;margin-left: 14px; border:none;border-bottom:1px solid #000;border-radius:0px;}
    .ai:hover{border:none;border-bottom:2px solid green;border-radius:0px;}
    .star{color:red;}
    .selection{background-color: darkturquoise;font-weight: bold;}
    .active{width: 150px;margin-left: 7px;margin-bottom: 12px;margin-right: 12px;}
    .else{ margin-left: 14px;width:54%;border: none;border-bottom: 1px solid black;margin-bottom:12px;}
    .else:hover{    border: none;border-bottom: 1px solid green;}
    .function{width: 87px;height: 49px;border-radius: 12px;border: 1px solid green;background-color: green;color: white;font-family: sans-serif;font-weight: bolder;}
    #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align:center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
  text-align:center;
}
 </style>
</html> 









