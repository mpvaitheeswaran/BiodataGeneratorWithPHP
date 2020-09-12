<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Register</title>
  </head>
  <body>
    <form action="biodata.php" method="post" enctype="multipart/form-data">
      <div align="center">
        <div class="heading_container">
          <h1>Student Biodata Rgisteration</h1>
        </div>
        <table>
          <tr>
            <td>
              <div class="form">
                <hr>
              <table class="form_table" cellspacing="5" cellpadding="5">
                <tr>
                  <td>FIRST NAME</td>
                  <td><input type="text" name="fname" required><small> (max 30 characters a-z and A-Z)</small></td>
                  <td rowspan="2">
                    Upload your photo here. <br>
                    <input type="file" name="image">
                  </td>
                </tr>
                <tr>
                  <td>LAST NAME</td>
                  <td><input type="text" name="lname" > <small> (max 30 characters a-z and A-Z)</small></td>
                </tr>
                <tr>
                  <td>FATHER'S NAME</td>
                  <td><input type="text" name="fathername" required> <small> (max 30 characters a-z and A-Z)</small></td>
                </tr>
                <tr>
                  <td>DATE OF BIRTH</td>
                  <td><select class="date" name="date" value="date" required>
                      <option>-select date-</option>
                      <?php
                        for ($i=1; $i <32 ; $i++) {
                          echo "<option>$i</option>";
                        }
                       ?>
                  </select>
                  <select class="month" name="month" required>
                    <option>-Select month-</option>
                    <option>Jan</option>
                    <option>Feb</option>
                    <option>Mar</option>
                    <option>Apr</option>
                    <option>May</option>
                    <option>Jun</option>
                    <option>Jul</option>
                    <option>Aug</option>
                    <option>Sep</option>
                    <option>Oct</option>
                    <option>Nov</option>
                    <option>Dec</option>
                  </select>
                  <select class="year" name="year" required>
                    <option>-Select year-</option>
                    <?php
                      for ($i=1990; $i <=2020 ; $i++) {
                        echo "<option>$i</option>";
                      }
                     ?>
                  </select>
                  </td>
                </tr>
                <tr>
                  <td>BLOOD GROUP</td>
                  <td>
                    <select name="blood">
                      <option>-Select blood-</option>
                      <option>AB- ve</option>
                      <option>B- ve</option>
                      <option>AB+ ve</option>
                      <option>A- ve</option>
                      <option>O- ve</option>
                      <option>B+ ve</option>
                      <option>A+ ve</option>
                      <option>O+ ve</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>EMAIL ID</td>
                  <td><input type="text" name="email" required></td>
                </tr>
                <tr>
                  <td>MOBILE NUMBER</td>
                  <td><input type="number" name="number" required></td>
                </tr>
                <tr>
                  <td>GENDER</td>
                  <td><input type="radio" name="gender" value="Male" required>Male
                  <input type="radio" name="gender" value="Female" required>Female
                  <input type="radio" name="gender" value="Others" required>Others</td>
                </tr>
                <tr>
                  <td>STATUS</td>
                  <td>
                    <input type="radio" name="status" value="Maried" required>Maried
                    <input type="radio" name="status" value="Unmaried" required>Unmaried
                  </td>
                </tr>
                <tr>
                  <td>ADDRESS</td>
                  <td colspan="2"><textarea name="address" rows="5" cols="40" required></textarea></td>
                </tr>
                <tr>
                  <td>COUNTRY</td>
                  <td><select class="country" name="country" required >
                    <option>India</option>
                  </select></td>
                </tr>
                <tr>
                  <td>STATE</td>
                  <td><select class="state" name="state" required>
                    <option>TamilNadu</option>
                  </select></td>
                </tr>
                <tr>
                  <td>CITY</td>
                  <td><input type="text" name="city" required></td>
                </tr>
                <tr>
                  <td>PIN CODE</td>
                  <td><input type="number" name="pincode" required></td>
                </tr>
                <tr>
                  <td valign="top">HOBBIES</td>
                  <td colspan=2><input type="checkbox" name="reading" value="Reading">Reading Books
                    <input type="checkbox" name="drawing" value="Drawing" >Drawing
                    <input type="checkbox" name="animation" value="Animation">Animation
                    <input type="checkbox" name="coding" value="Coding">Coding<br>
                    <input type="checkbox" name="other">Other
                    <input type="text" name="other_hobbie_text"></td>
                </tr>
                <tr>
                <td>QUALIFICATION</td>
                <td colspan="2">
                  <table cellspacing="2" cellpadding="2">
                      <th>S.No</th>
                      <th>Examination</th>
                      <th>Board</th>
                      <th>Percentage</th>
                      <th>Year of passing</th>
                      <tr>
                        <td>1</td>
                        <td>Class X</td>
                        <td><input type="text" name="classXboard" required></td>
                        <td><input type="number" name="classXper" required></td>
                        <td><input type="number" name="classXyear" required></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Class XII</td>
                        <td><input type="text" name="classXIIboard" required></td>
                        <td><input type="number" name="classXIIper" required></td>
                        <td><input type="number" name="classXIIyear" required></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Graduation</td>
                        <td><input type="text" name="graduationboard" ></td>
                        <td><input type="number" name="graduationper"></td>
                        <td><input type="number" name="graduationyear"></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Masters</td>
                        <td><input type="text" name="masterboard" ></td>
                        <td><input type="number" name="masterper"></td>
                        <td><input type="number" name="masteryear"></td>
                      </tr>
                  </table>
                </td>
                </tr>
              </table>
              <hr>
              </div>
            </td>
          </tr>
        </table>

        <button type="reset" name="reset">Reset</button>
        <button type="submit" name="submit">Next</button>
      </div>
    </form>
  </body>
</html>
