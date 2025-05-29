<?php include 'header.php';?>
    <h3 class="page_name">Profile</h3>
    <div style="padding: 5px;text-align: center;">
        <img src="<?php echo $user_data["ProfilePicture"]?> " style="width: 50px;border-radius: 59%;height: 50px;border: 1px solid red;"/>
        <h4 style="margin: 0px;">    
            <?php echo $user_data["Name"];?>
        </h4>
    </div>

        <form method="post" action="/college/update_student_data.php" enctype="multipart/form-data">
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $user_data["Name"]?>">
            <br>
            <label>Email</label>
            <input type="text" name="myemail" value="<?php echo $user_data["Email"]?>">
            <br>

            <label>Password</label>
            <input type="password" name="password" >
            <br>

            <label>Date of Birth</label>
            <input type="date" name="dob" value="<?php echo $user_data["DOB"]?>">
            <br>

            <label>Gender</label>
            <input type="radio" name="gender" value="female" <?php echo $user_data["Gender"] == "female" ? "checked" : "" ?> >
            <label>Female</label>
            

            <input type="radio" name="gender" value="male" <?php echo $user_data["Gender"] == "male" ? "checked" : "" ?> >
            <label>Male</label>
            <br>

            <label>Department</label>
            <select name="department">
                <option value="cs" <?php echo $user_data["Department"] == "cs" ? "selected" : "" ?> >Computer Science</option>
                <option value="phy" <?php echo $user_data["Department"] == "phy" ? "selected" : "" ?>>Physics</option>
            </select>
            <br>

            <label>Profile Picture</label>
                <img src="<?php echo $user_data["ProfilePicture"]?> " style="width: 50px;border-radius: 59%;height: 50px;border: 1px solid red;"/>     
                <input type="file" name="profile_picture" />
            <br>

            <label>Address</label>
            <textarea name="address"><?php echo $user_data["Address"]?></textarea>
            <br>

            <input type="submit" value="Apply" />
        </form>
<?php include 'footer.php';?>    
