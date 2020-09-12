<?php
#File Upload
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    #echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    #echo "File is not an image.";
    $uploadOk = 0;
  }
}



#Variable list
  $first_name=$_POST['fname'];
  $last_name=$_POST['lname'];
  $fathername=$_POST['fathername'];
  $date=$_POST['date'];
  $month=$_POST['month'];
  $year=$_POST['year'];
  $date_of_birth="$date/$month/$year";
  $blood_group=$_POST['blood'];
  $email_id=$_POST['email'];
  $mobile_no=$_POST['number'];
  $gender=$_POST['gender'];
  $status=$_POST['status'];
  $address=$_POST['address'];
  $country=$_POST['country'];
  $state=$_POST['state'];
  $city=$_POST['city'];
  $pincode=$_POST['pincode'];

  #----------------------------------------------------------------------------------------------
  #Hobbies list
  $reading_hobbie=$_POST['reading'];
    if ($reading_hobbie=='on') {
      $reading_hobbie="Reading";
    }
  $drawing_hobbie=$_POST['drawing'];
    if ($drawing_hobbie=='on') {
      $drawing_hobbie="Drawing";
    }
  $animation_hobbie=$_POST['animation'];
    if ($animation_hobbie=='on') {
      $animation_hobbie="Animation";
    }
  $coding_hobbie=$_POST['coding'];
    if ($coding_hobbie=='on') {
      $coding_hobbie="Coding";
    }
  $other_hobbie=$_POST['other'];
    if ($other_hobbie=='on') {
      $other_hobbie=$_POST['other_hobbie_text'];
    }
  $hobbie_array=[$reading_hobbie,$drawing_hobbie,$animation_hobbie,$coding_hobbie,$other_hobbie];

#------------------------------------------------------------------------------------------------
#Qualification Table Data
  #Row 1:
  $x_board=$_POST['classXboard'];
  $x_percentage=$_POST['classXper'];
  $x_yearOfPassing=$_POST['classXyear'];

  #Row 2:
  $xii_board=$_POST['classXIIboard'];
  $xii_percentage=$_POST['classXIIper'];
  $xii_yearOfPassing=$_POST['classXIIyear'];

  #Row 3:
  $graduationBoard=$_POST['graduationboard'];
  $graduationPercentage=$_POST['graduationper'];
  $graduationYearOfPassing=$_POST['graduationyear'];

  #Row 4:
  $masterBoard=$_POST['masterboard'];
  $masterPercentage=$_POST['masterper'];
  $masterYearOfPassing=$_POST['masteryear'];
#-------------------------------------------------------------------------------------------------
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/styles.css">
    <title>Biodata</title>
  </head>
  <body>
    <div class="biodata" align="center">
      <div class="heading_container">
        <h1>Student BioData</h1>
      </div>
      <table>
        <tr>
          <td>
            <div class="form">
              <hr>
            <table class="form_table" cellspacing="5" cellpadding="5">
              <tr>
                <td>NAME</td>
                <td>:</td>
                <td><?php echo "$first_name $last_name "; ?></td>
                <td rowspan="4">
                    <div class="img_container">
                      <?php
                      // Allow certain file formats
                      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                      && $imageFileType != "gif" ) {
                        #echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                      }

                      // Check if $uploadOk is set to 0 by an error
                      if ($uploadOk == 0) {
                        echo '<img class="profile_img" src="img/man.png" alt="Profile">';
                      // if everything is ok, try to upload file
                      } else {
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                          echo '<img class="profile_img" src="'.$target_file.'" alt="Profile">';
                        } else {
                          echo "move_uploaded_file() is return false";
                        }
                      }
                       ?>

                    </div>
                </td>
              </tr>
              <tr>
                <td>DATE OF BIRTH</td>
                <td>:</td>
                <td><?php echo "$date $month $year"; ?></td>
              </tr>
              <tr>
                <td>BLOOD GROUP</td>
                <td>:</td>
                <td><?php echo "$blood_group"; ?></td>
              </tr>
              <tr>
                <td>EMAIL</td>
                <td>:</td>
                <td><?php echo "$email_id"; ?></td>
              </tr>
              <tr>
                <td>MOBILE</td>
                <td>:</td>
                <td><?php echo $mobile_no; ?></td>
              </tr>
              <tr>
                <th colspan="4">EDUCATIONAL QUALIFICATION</th>
              </tr>
              <tr>
                <td colspan="4">
                  <table cellspacing="5" cellpadding="5">
                    <tr>
                      <th>Examination</th>
                      <th>Board</th>
                      <th>Percentage</th>
                      <th>Year of passing</th>
                    </tr>
                    <tr>
                      <td>Class X</td>
                      <td><?php echo $x_board; ?></td>
                      <td><?php echo $x_percentage; ?></td>
                      <td><?php echo $x_yearOfPassing; ?></td>
                    </tr>
                    <tr>
                      <td>Class XII</td>
                      <td><?php echo $xii_board; ?></td>
                      <td><?php echo $xii_percentage; ?></td>
                      <td><?php echo $xii_yearOfPassing; ?></td>
                      <tr>
                        <td>Graduation</td>
                        <td><?php echo $graduationBoard; ?></td>
                        <td><?php echo $graduationPercentage; ?></td>
                        <td><?php echo $graduationYearOfPassing; ?></td>
                      </tr>
                      <tr>
                        <td>Masters</td>
                        <td><?php echo $masterBoard; ?></td>
                        <td><?php echo $masterPercentage; ?></td>
                        <td><?php echo $graduationYearOfPassing; ?></td>
                      </tr>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <th colspan="4">PERSONAL INFO</th>
              </tr>
              <tr>
                <td>GENDER</td>
                <td>:</td>
                <td><?php echo $gender; ?></td>
              </tr>
              <tr>
                <td>MARITAL STATUS</td>
                <td>:</td>
                <td><?php echo $status; ?></td>
              </tr>
              <tr>
                <td>FATHER'S NAME</td>
                <td>:</td>
                <td><?php echo $fathername; ?></td>
              </tr>
              <tr>
                <td>NATIONALITY</td>
                <td>:</td>
                <td><?php echo $country; ?></td>
              </tr>
              <tr>
                <td>ADDRESS</td>
                <td>:</td>
                <td><?php echo $address; ?></td>
              </tr>
              <tr>
                <td>STATE</td>
                <td>:</td>
                <td><?php echo $state; ?></td>
              </tr>
              <tr>
                <td>CITY</td>
                <td>:</td>
                <td><?php echo $city; ?></td>
              </tr>
              <tr>
                <td>PINCODE</td>
                <td>:</td>
                <td><?php echo $pincode; ?></td>
              </tr>
              <tr>
                <td>LANGUAGES KNOWN</td>
                <td>:</td>
                <td>Tamil, English</td>
              </tr>
              <tr>
                <td>HOBBIES</td>
                <td>:</td>
                <td><?php for ($i=0; $i<5; $i++) {
                  echo "$hobbie_array[$i], ";
                } ?></td>
              </tr>
            </table>
            <hr>
          </div>
          </td>
        </tr>
        <tr>
          <td align="center">
            <button type="button" name="save">Save</button>
          </td>
        </tr>
      </table>
    </div>
  </body>
</html>
