<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/favicon.png" />
    <link rel="stylesheet" href="css/wallet.css" />
    <title>Koyo/Edit Profile</title>
</head>
<body>
    <section class="edit-profile">
        <h2 id="edit-info">EDIT INFORMATION</h2>
        <br>
        <div class ="edit-content">
            <img src="img/man.webp" height="250"width="200">
            <div class=choosefile><button>Choose a File</button> No file chosen
                <br>
                <div class=choosefi><button>Upload</button>
                    <br>
            <span id="resume">Acceptable files are .png and .jpg only<br>
            </span></div>
        </div>
        <form class="form-editprofile" action="work.php" method="post">
               
                <label>
                    Full Name
                    <input type="text" placeholder="John Doe" name="fullname" required /> <br>
                </label>   
                <label>
                    User Name
                    <input type="text" placeholder="JorhnieD" name="username" required /> <br>
                </label> 
                <label>
                     Email  
                     <input type="email" placeholder="johndoe@example.com" name="email" required /> <br>
                </label>
               
                <label>
                    <span>Old Password</span>
                    <input
                        type="password"
                        id="password"
                       
                        name="password"
                        placeholder="input registration password"
                        required
                    />
                </label><br>
                <label>
                    <span>New Password</span>
                    <input
                        type="password"
                        id="password"
                       
                        name="newpassword"
                        placeholder="input desired password"
                        required
                    />
                </label><br>
                
                <label>
                        <span>Country </span>
                        <select id="country" name="country">
                            <option>Select your country</option>
                            <option>Nigeria</option>
                            <option>Ghana</option>
                            <option>Kenya</option>
                            <option>Liberia</option>
                            <option>Others</option>
                        </select>
                    </label><br>
                
                <button class="butn" type="submit" name="update">Save Changes</button>
    </section>
     
</body>
</html>


