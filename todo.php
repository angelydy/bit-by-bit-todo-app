

<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="shortcut icon" href="/"/>
    <script src="/index.js" defer></script>
    <title>ToDo</title>
		<style>
          @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");
			body {
				background: #F3FAFF;
              	font-family: "Poppins", sans-serif;
			}
			
			.col-md-6{
				background: #83CBFF;
				border-radius: 20px;
				margin: 5em auto;
			}

			#task-input {
				border-radius: 40px;
				border: none;
				box-shadow: none
                margin: 0 auto;
			}

			#add-btn {
				background: #76E0EA;
				border: none;
			}
          
          nav a {
      	color: #00B4DB;
      	text-decoration: none;
            margin: 0;
    	}

			nav {
				display: flex;
				justify-content: space-around;
              font-size: 1.15em;
              margin: 1.3em auto;
              align-items: center;
			}

    	nav .logo {
      	align-items: center;
      	display: flex;
      	justify-content: center;
			}

      nav .logo img {
        width: 4em;
      }

      nav .logo p{
        margin: 0;
        font-size: 1.5em;
        color: #48B2FE;
      }

    	nav ul {
      	list-style: none;
      	display: flex;
      	justify-content: space-around;
        align-items: center;
      	width: 40%;
    	}

    	nav .active a {
        color: #83CBFF;
    }
          
          body nav .profile-section {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
          
          body nav .profile-section .darkmode:hover {
  cursor: pointer;
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
          
body nav .profile-section #user-login {
  display: none;
  background: #E4E4E4;
  border-radius: 10px;
  color: #A3A3A3;
  text-align: center;
  width: 6em;
  cursor: pointer;
  position: absolute;
  top: 5em;
  right: 6em;
}

body nav .profile-section #user-login a {
  color: #A3A3A3;
}

body nav .profile-section #user-login a:hover {
  color: #00B4DB;
}

body nav .profile-section div {
  margin: 0 1em;
}

body nav .profile-section .dropdown {
  width: 1em;
  cursor: pointer;
}

body nav .profile-section div {
  margin: 0 1em;
}

body nav .profile-section .dropdown {
  width: 1em;
}

body nav .profile-section .darkmode {
  width: 2em;
}

body nav .profile-section .profile {
  width: 2.5em;
}

body nav .profile-section .profile-container {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.user-greetings {
	font-size: 1.5em;
	color: #00B4DB;
	text-align: center;
}
		</style>
	</head>
<body>
  	<nav>
		<div class="logo">
      <img src="/images/B.png" alt="" class="logo">
      <p>itty</p>
    </div>

    <ul>
      <li>home</li>
      <li class="active"><a href="/todo.php"><u>tasks</u></a></li>
      <li><a href="/About Us/HTML/AboutUs.html">about</a></li>
      <li><a href="/contact.html">contact</a></li>
    </ul>

    <div class="profile-section">
			<img src="/images/moon.png" alt="" class="darkmode">
      <div class="profile-container">
        <img src="/images/prof.png" alt="" class="profile">
        <img src="/images/dropdown.png" alt="" class="dropdown">
        <div id="user-login">
          <p><a href="/login-user.php">login</a></p>
          <p><a  href="/signup-user.php">sign up</a></p>
        </div>
      </div>
    </div>
  </nav>
	<div class="user-greetings">
		<h1 class="greeting"></h1>
		<h2>What do you want to do today?</h2>
	</div>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<center>
				<form method="POST" class="form-inline" action="add_query.php">
					<input type="text" class="form-control" id="task-input" name="task" placeholder="add new task ..." required/>
					<button class="btn btn-primary form-control" id="add-btn" name="add">Add Task</button>
				</form>
			</center>
		</div>
		<br /><br /><br />
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Task</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require 'conn.php';
					$query = $conn->query("SELECT * FROM `task` ORDER BY `task_id` ASC");
					$count = 1;
					while($fetch = $query->fetch_array()){
				?>
				<tr>
					<td><?php echo $count++?></td>
					<td><?php echo $fetch['task']?></td>
					<td><?php echo $fetch['status']?></td>
					<td colspan="2">
						<center>
							<?php
								if($fetch['status'] != "Done"){
									echo 
									'<a href="update_task.php?task_id='.$fetch['task_id'].'" class="btn btn-success"><span class="glyphicon glyphicon-check"></span></a> |';
								}
							?>
							 <a href="delete_query.php?task_id=<?php echo $fetch['task_id']?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
						</center>
					</td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>