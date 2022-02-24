<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <script type="text/javascript" src="jquery-comp-3.6.js"></script>
    </head>
    <body>
        <?php include 'db.php'; ?>

        <!-- GET INFO FROM DATABASE  -->
        <?php      
          $sqlinfo = "SELECT * FROM companydetails";
          $reslist = mysqli_query($conn,$sqlinfo);
          $arr = mysqli_fetch_assoc($reslist)
      ?>
<!-- Footer -->
<section class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 text-center text-lg-start left-footer">
          <p>General Inquiry</p>
          <!-- <h6><strong>Phone: +961 81-343-722</strong></h6> -->
          <h6><strong>Phone: <?php echo $arr['Phone']; ?></strong></h6>

          <!-- <h6><strong>Email: <a class="afooter" href="mailto:info@capb.me">info@capb.me</a></strong></h6> -->
          <h6><strong>Email: <a class="afooter" href="mailto:info@capb.me"> <?php echo $arr['Email']; ?> </a></strong></h6>
            
          
          
            <ul>
              <li>
                <!-- <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a> -->
                <a href="<?php echo $arr['LinkedIN']; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
              
              </li>
              <li>
                <!-- <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a> -->
                <a href="<?php echo $arr['Instagram']; ?>" target="_blank"><i class="fab fa-instagram"></i></a>

              </li>
            </ul>
        </div>
        <div class="col-lg-4 text-center ">
          <!-- <p><u><strong>B</strong></u></p> middle-footer-->
          <img src="imgs/logo-white.png" width="25%">

        </div>
        <div class="col-lg-4 text-center text-lg-end pt-md-4 py-lg-0 right-footer">
          <h4>Copyright © 2022 CapB</h4>
          <p><em>Free Enterprise</em></p>
          <strong>
            <!-- <p>Bad Idriss, Beirut, Lebanon</p> -->
            <p> <?php echo $arr['Location']; ?> </p>

          </strong>
        </div>
      </div>
    </div>
  </section>
 
    </body>
</html>
