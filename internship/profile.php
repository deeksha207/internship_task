

<!DOCTYPE html>
<html>
  <head>
    <title>Internship</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" type="text/css" href="index1.css" />
  </head>
  <body>
    <div class="main">
        <header>
          <div class="mine1">Advanced Security</div>
          <div class="mine">Welcome,admin<i class="fa fa-arrow-down hit" id="hat"></i></div>
          <div class="hide" id="hide_me">
              <ul>
                  <li><i class="fa fa-user"></i>My Profile</li>
                  <li><i class="fa fa-sign-out"></i>Logout</li>
              </ul>
          </div>
        </header>
        <div class="division">
          <div class="set1">
            <ul>
              <li><a href="comment.php"><i class="fa fa-home space"></i></a>Home</li>
              <li><a href="profile.php"><i class="fa fa-user space"></i></a>My Profile</li>
              <li><i class="fa fa-users space"></i>Users</li>
              <li><i class="fa fa-male space"></i>Users Roles</li>
            </ul>
          </div>
          <div class="set2">
            <div class="log" style="margin-top: 20px;">Your Details</div><br />
            <form>
            <label>First Name</label><br />
            <input type="text" name="firstName" value="Deeksha" /><br />
            <label>Last Name</label><br />
            <input type="text" name="lastName" value="Gupta" /><br>
            <label>Address</label><br />
            <input type="text" name="address" /><br>
            <label>Phone</label><br />
            <input type="tel" name="number" value="7193019221" /><br>
            <label><button class="btn">Update</button></label>
</form>
          </div>
        </div>
      </div>
      <script>
          let m=document.getElementById("hide_me");
          let elem=document.getElementById("hat");
          hat.addEventListener("mouseover",hovering);
          hat.addEventListener("mouseout",hoverout);
          function hovering(){
              m.style.display="block";
          }
          

      </script>
    </body>
  </body>
</html>