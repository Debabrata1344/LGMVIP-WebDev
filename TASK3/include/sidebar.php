<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    *{
  margin: 0;
  padding: 0;
}
header
{
width: 100%;
border-radius: 10px;


}
ul {
list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
background-color:black;
}

li {
float: left ;

}

li a {
display: block;
color: white;
text-align: center;
padding: 14px 16px;
text-decoration: none;
border: 1px solid white;
border-radius: 10px;
margin: 2px;
}

li :hover {
background-color:#34aeeb;
color: white;
}
    </style>
</head>
<body>
  <div class="navbar">
    <header>
      <navbar>
        <ul>
        <li>
        <a href="admin.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
       <a href="managestudent.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">Student</span>
       </a>
     </li>
     <li>
      <a href="branch.php">
        <i class='bx bx-user' ></i>
        <span class="links_name">Branch</span>
      </a>
    </li>
    <li>
      <a href="result.php">
        <i class='bx bx-user' ></i>
        <span class="links_name">Result</span>
      </a>
    </li>
    <li>
      <a href="logout.php">
        <i class='bx bx-user' ></i>
        <span class="links_name">Logout</span>
      </a>
    </li>
        </ul>
      </navbar>
    </header>
  </div>
 
</body>
</html>
