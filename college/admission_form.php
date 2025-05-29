<html>
    <head>
        <style>
            label{
                padding: 20px;
                margin: 20px 10px
            }
        </style>
    </head>
    <body>
        <h1>Admission Form</h1>
        <form method="post" action="/college/admission_post_data.php" enctype="multipart/form-data">
            <label>Name</label>
            <input type="text" name="name">
            <br>
            <label>Email</label>
            <input type="text" name="myemail">
            <br>

            <label>Password</label>
            <input type="password" name="password">
            <br>

            <label>Date of Birth</label>
            <input type="date" name="dob">
            <br>

            <label>Gender</label>
            <input type="radio" name="gender" value="female">
            <label>Female</label>
            

            <input type="radio" name="gender" value="male">
            <label>Male</label>
            <br>

            <label>Department</label>
            <select name="department">
                <option value="cs">Computer Science</option>
                <option value="phy">Physics</option>
            </select>
            <br>

            <label>Profile Picture</label>
            <input type="file" name="profile_picture" />
            <br>

            <label>Address</label>
            <textarea name="address"></textarea>
            <br>

            <input type="submit" value="Apply" />
        </form>
    </body>
</html>