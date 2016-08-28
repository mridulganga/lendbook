<?php
include ('./func.php');
?>

<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<?php echo getHead("Lendbook | Home"); ?>
<body>
  	<div id="container">
	<?php echo getHeader(getNav(),getNavMob());?>
	
<!-- Start Content -->

<div id="content">
      <div class="container">
        <div class="page-content">
          <?php 
          if (isset($_POST["submit"])){
            $type = $_POST["type"];

            $title = $_POST["title"];
            $author = $_POST["author"];
            $desc = $_POST["desc"];
            $price = $_POST["price"];
            $pub = $_POST["pub"];

            if ($type == "book"){
             
              $cover = $_FILES["coverfile"];
              addBook($title,$author,$pub,$desc,$cover,$price);
              echo "Your Book has been added.";
            }
            elseif ($type == "ebook") {
              $cover = $_FILES["coverfile2"];
              $file = $_FILES["extrafile"];
              addeBook($title,$author,$pub,$desc,$cover,$file,$price);
              echo "Your eBook has been added.";
            }
            elseif($type == "audiobook"){
              $cover = $_FILES["coverfile3"];
              $file = $_FILES["extrafile2"];
              addAudioBook($title,$author,$pub,$desc,$cover,$file,$price);
              echo "Your AudioBook has been added.";
            }
            

          }
        if (isset($_POST["edit"])){
            $type = $_POST["type"];

            $id = $_POST["id"];
            $title = $_POST["title"];
            $author = $_POST["author"];
            $desc = $_POST["desc"];
            $price = $_POST["price"];
            $pub = $_POST["pub"];

            if ($type == "book"){
             if(isset($_POST["covercheck"])){
              $cover = $_FILES["coverfile"];
              modifyBook($id,"coverfile",$cover);
             }
            }
            elseif ($type == "ebook") {
             if(isset($_POST["covercheck"])){
              $cover = $_FILES["coverfile"];
              modifyBook($id,"coverfile",$cover);
             }
             if(isset($_POST["extracheck"])){
              $extra = $_FILES["extrafile"];
              modifyBook($id,"extrafile",$extra);
             }
            }
            elseif($type == "audiobook"){
             if(isset($_POST["covercheck"])){
              $cover = $_FILES["coverfile"];
              modifyBook($id,"coverfile",$cover);
             }
             if(isset($_POST["extracheck"])){
              $extra = $_FILES["extrafile"];
              modifyBook($id,"extrafile",$extra);
             }
            }
              modifyBook($id,"title",$title);
              modifyBook($id,"author",$author);
              modifyBook($id,"Desc",$desc);
              modifyBook($id,"price",$price);
              modifyBook($id,"Publisher",$pub);
              echo "Your Book has been Modified";

          }
          ?>
        
        </div>
        
      </div>
      <!-- .container -->
    </div>
    
<!-- End Content -->

<?php echo getFooter();?>
	</div>


</body>
</html>