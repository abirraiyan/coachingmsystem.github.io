<!DOCTYPE html>
<html>
    <head>
        <title>Admission Form</title>
    </head>
    <body style="background-color: aqua;">
    <style>
        input[type=text],
        select {
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 15px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 7%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 15px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 15px;
            padding: 20px;
        }
        label
        {
            width: 100px;
            display: inline-block;
        }
        .center{
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        input[type=button] {
            width: 7%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 15px;
            cursor: pointer;
        }

        input[type=button]:hover {
            background-color: #45a049;
        }
    </style>
    <div align="Center">
        <img src="admission.png" height="205" width="290" align="center">
    <h1>Admission Form</h1>
        <form action="/action_page.php">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name.." style="background-color: azure;"><br>

            <label for="phone">Phone No</label>
            <input type="text" id="phone" name="phone" placeholder="Your phone no.." style="background-color: azure;"><br>

            <label for="Class">Class</label>
            <select id="class" name="class" style="background-color: azure;">
                <option value="6">Class 6</option>
                <option value="7">Class 7</option>
                <option value="8">Class 8</option>
                <option value="9">Class 9</option>
                <option value="10">Class 10</option>
                <option value="11A">Class 11 (Science)</option>
                <option value="11B">Class 11 (Commerce)</option>
                <option value="12A">Class 12 (Science)</option>
                <option value="12B">Class 12 (Commerce)</option>
            </select><br>
            <label for="school">School/College</label>
            <input type="text" id="school" name="school" placeholder="Your school or college .." style="background-color: azure;"><br>
            <label for="parent">Parent's Phone No</label>
            <input type="text" id="parent" name="parent" placeholder="Your parent's contact number .." style="background-color: azure;"><br>

            <label for="address">Address</label>
            <input type="text" id="address" name="address" placeholder="Your permanent address .." style="background-color: azure;"><br>
            <input type="submit" value="Submit">
            <a href="index.php"><input type="button" value="Go back!" onclick="index.php"></a>
        </form>
    </div>
    </body>
</html>