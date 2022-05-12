<html>
<body>
    <form action="formdb.php" method="post">
    <table align="center">
         <tr>
            <th>NAME:</th>
            <td><input type="text" name="name" id="name" placeholder="Enter Your Name"></td>
        </tr>
        <tr>
            <th>Email:</th>
            <td><input type="email" name="email" id="email" placeholder="Enter your Email"></td>
        </tr>
        <tr>
            <th>Password:</th>
            <td><input type="password" name="password" id="password" placeholder="Enter Email Password"><td>
        </tr>
        <tr>
            <th>Contact:</th>
            <td><input type="number" name="contact" placeholder="Enter Your Contact Number"></td>
        </tr>
        <tr>
            <th>Gender:</th>
                <td><input type="radio" name="rg" value="">MALE
                    <input type="radio" name="rg" value="">FEMALE</td>
        </tr>
        <tr>
            <th>CITY:</th>
            <td><select>
                <option>GONDAL
                <option>RAJKOT
                <option>JETPUR
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="submit"></td>
            <td><input type="reset" name="reset" value="reset"></td>
        </tr>
    </table>
    </form>
</body>
</html>
