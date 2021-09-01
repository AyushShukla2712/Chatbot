<?php
		extract($_REQUEST);

		$file=fopen("file.txt", "a");
		fwrite($file, "name:");
		fwrite($file, $username."\n");
		fwrite($file, "email: ");
		fwrite($file, $useremail."\n");
		fwrite($file, $usernumber."\n");
	
		fclose($file);

	?>



<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is Supported - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not Supported.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "pdf" && $imageFileType != "docx" && $imageFileType != "txt"&& $imageFileType != "png"&& $imageFileType != "jpg"
 ) {
  echo "Sorry, only PDF, DOCX, TXT,PNG,JPG files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
<?php
error_reporting(0);
?>

<?php
  $msg = "";
  $dbConn = mysqli_connect("localhost", "root", "root", "photos");
  // If upload button is clicked ...
  if (isset($_POST["submit"])) {
    $target_dir="image/";
    $filename = $_FILES["fileToUpload"]["name"];
    $tempname = $_FILES["fileToUpload"]["tmp_name"];
    $folder = $target_dir.basename($_FILES["fileToUpload"]["name"]);
       
          
    
  
        // Get all the submitted data from the form
        $sql = "INSERT INTO image (filename) VALUES ('$filename')";
  
        // Execute query
        mysqli_query($dbConn, $sql);
          
        // Now let's move the uploaded file into the folder: image
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_dir.basename($_FILES["fileToUpload"]["name"]) ))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  }
  
  $result = mysqli_query($dbConn, "SELECT * FROM image");
while($data = mysqli_fetch_array($result))
{
  
      ?>
<img src="<?php echo $data['Filename']; ?>">
  
<?php
}
?>