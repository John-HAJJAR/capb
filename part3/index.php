<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../stylesheet.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <script type="text/javascript" src="../jquery-comp-3.6.js"></script>
        <link rel="icon" type="image/x-icon" href="../imgs/logo-blue.png">
        <style type="text/css">.disclaimer { display: none; }</style>

    </head>

<body onload="document.body.style.opacity='1'">

<?php include '../db.php'; ?>
<?php include '../navbar.php'; ?>
    <div class="s1-container s1-cpart3">
        <div class = "text-Box">
            <div class = "centered s1-1 fadeout">Services, Initiatives & Ventures</div>
            <div class="centered s1-2 fadeout"> Enabling innovation, scalability, and opportunity </div>
        </div>
<br><br><br><br><br><br><br>
         <!-- SECTION 2 -->
         <div">
            <div class = "container-fluid about" style="opacity: 1 !important;" >
            <p class = "head-title" align=center>
            OUR STANCE
            </p>

            <p class = "details">
            Enterprise is the solution to outright enablement. At <b>CapB</b>, we long for such
            endeavors that facilitate opportunity, prospects, and growth for the
            beneficiaries that be

            </p>
          <p class = "details">
            Having the complete knowledge of our ecosystem, and that of its intricacies,
            granted us the favorable role of providing tailored services, sponsoring
            hopeful initiatives, and forging strategic partnerships.
          </p>

          <p class = "logo"><img src = "../imgs/PARTC/P3-S2.png" alt = "logo" class = "About-logo"</p>

        </div>
      </div>
    </div>

<br>
     <!-- SECTION 3  -->
     <div class="s3">
            <div class="s3div s3-1 s3-1part3">
            <p class="text-ts3-1 fontsize-bs"> EXTENDING OPPORTUNITY </p>
            <p  class="text-ts3-2 fontsize-bs"> NEW MARKETS </p>
            </div>
            <div class="s3div s3-2 s3-2part3">
            <p class="text-ts3-1 fontsize-bs"> ANTICIPATING CHANGES </p>
            <p  class="text-ts3-2 fontsize-bs">  MARKET INTELLIGENCE </p>
            </div>
        </div>



        <br><br><br>



    <!-- SECTION 4 -->
    <div class="s6">
    <p class ="s6-title" align=center>GENERAL SERVICES</p>
    <div class="s6">
      <!-- <img src="icon3.png" width="40%"> -->
      <p class = "details-professional">
      Considering the scope of operations, <span class = "key-word">CapB</span> has sought to devote its serious
effort for providing special services tailored to specific market needs. These
include advisory-piece products, quasi-financial services, and intelligence based briefings.
      </p>
      <p class = "details-professional">
        We hope to deliver a fine degree of professionalism, within our field of
        expertise, and guard a pleasant experience for our clients and associates.
      </p>

      <img src = "../imgs/PARTC/P3-S4.png" alt = "logo" class = "professional-logo" align = "center">
    </div>

    <!-- SECTION 5 -->
    <section class ="Cols">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 text-center">
                <a href = ""><img src = "../imgs/PARTC/P3-S5-1.png" class = "logo-7"></a>
                <!-- <figcaption>No available document</figcaption> -->
              <p class = "title-7">Consulting & Advisory Services</p>
              <p class = "sub-title-7-1 justifyclass">
              Specific to certain subjects of interest such as: Banking
               & Economic policies; Commercial & Trade strategies; Enterprise
                operability, transformation, and organization.
              </p>
              <div class = "investment-cap">
                  <p class = "div-text">Abbreviation: C & A Services</p>
              </div>
            </div>
            <div class="col-lg-4 text-center">
                <a href = ""><img src = "../imgs/PARTC/P3-S5-2.png" class = "logo-7"></a>
                <!-- <figcaption>Click the above icon to access document</figcaption> -->
              <p class = "title-7">Financial & Market Research</p>
              <p class = "sub-title-7-2 justifyclass">
              Special topics, of palpable concern, that relate to Banking,
               Finance, Economics, Engineering, Technology, Public Policy,
                Global Commerce & Trade, and Sustainability.
              </p>
              <div class = "investment-cap">
                <p class = "div-text">Abbreviation: F & M Services</p>
            </div>

            </div>

            <div class="col-lg-4 text-center">
                <a href = ""><img src = "../imgs/PARTC/P3-S5-3.png" class = "logo-7"></a>
                <!-- <figcaption>Click the above icon to access document</figcaption> -->
                <p class = "title-7">New Market <br> Guidance</p>
                <p class = "sub-title-7-3 justifyclass">
                    Direct or indirect guidance on penetrating, establishing, and
                    maintaining new markets in various geographies, economies, and
                    jurisdictions for a variety of operating industries.
                </p>
                <div class = "investment-cap ">
                    <p class = "div-text">Abbreviation: NM <br class="br-s5-p3-txt3"> Guidance</p>
                </div>
          </div>
        </div>
      </section>

      <p class = "note" id="form3">Our brokerage and deal-fixing rates follow a dynamic pattern</p>

    <br><br>
    <!-- SECTION 6 FORM -->
    <br><br>


<!-- GET DROPDOWN INFO FORM DB -->
<!-- PART 3 -> elected Service (SS) & Defining Entity (DE)  -->
<?php
      $sql= "SELECT * FROM dropdown_form";
      $arr_SS = array();
      $arr_DE = array();
      $iSS = 0; $iDE = 0;
      $result3 = mysqli_query($conn,$sql);
      while ($arr = mysqli_fetch_assoc($result3)){
        if($arr['Type'] == 'SS') {
          $arr_SS[$iSS] = $arr['Name'];
          $iSS++;
        }

        if($arr['Type'] == 'DE') {
          $arr_DE[$iDE] =  $arr['Name'];
          $iDE++;
        }
      }

?>
<!-- END DB SEARCH -->
<br><br>
<br class="eq-br-bs">
<div class="s7">
            <br><br>
            <h2 align=center name="form" style="color:white;">Request Form</h2>
            <form class="s7form" method = "post">
                <div class="s7-left" >
                    <input type="text" name="name" placeholder="First & Last Name"> <br>
                    <input type="text" name="email" placeholder="Email Address"> <br>
                    <input type="text" name="pnumber" placeholder="Phone Number"> <br>
                    <!-- <input type="text" name="selectedServ" placeholder = "Selected Service"> <br>  -->

                    <select class="selectp2" name="selectedServ" id="selserv">
                        <option value="serv0">Selected Service</option>
                        <?php
                        for ($i=0; $i<sizeof($arr_SS); $i++){
                            echo '<option value="'.$i.'">'. $arr_SS[$i] . '</option>';
                        }
                        ?>
                        <!-- <option value="serv1">Service 1</option>
                        <option value="serv2">Service 2</option>
                        <option value="serv3">Service 3</option> -->
                    </select>  <br>

                    <input type="text" name="DesPurpose" placeholder="Designated Purpose">
                </div>
                <div class="s7-right s7-right-p3 s7-right-sm-p2">
                <!-- <input type="text" name="DeffEntity" placeholder="Defining Entity"> <br> -->
                <select class="selectp2" name="DeffEntity" id="invcat">
                        <option value="c0">Defining Entity</option>
                        <?php
                        for ($j=0; $j<sizeof($arr_DE); $j++){
                            echo '<option value="'.$j.'">'. $arr_DE[$j] . '</option>';
                        }
                        ?>
                        <!-- <option value="c1">Defining 1</option>
                        <option value="c2">Def 2</option>
                        <option value="c3">Deff 3</option> -->
                    </select>  <br>
                    <textarea class="message message3" name="usermessage" cols="22" rows="19" placeholder="Your Message"></textarea>
                 </div>


                <button type="submit" class="s7-apply-btn" name="submit-req-form">Apply</button>



            </form>
            <br><br><br><br><br><br>
        </div>


         <!-- INSERT MISSING SECTION 6 -->
<!-- CONNECT NEW PDFS ON LEARN MORE -->


<div class = "s7-p3">
            <p class ="s6-title" align=center>SPONSORED INITIATIVES</p>
            <p class = "details-professional">
                "Financing Aptitude" forms an integral part of our ongoing
                funding operations, and so, <span class = "key-word">CapB</span> intends to fulfill such an
                aspiration by discovering, promoting, and financing hopeful
                ventures through its sponsored entities.
            </p>
          <div class = "parent">
            <div class = "child-1">
              <div class = "items-1">
                <img src = "../imgs/PARTC/P3-S7-1.png" class = "logo-7-3">
                <p class = "sub-img-1">Sovereign<br> Wealth Reserve</p>
              </div>
              <button type = "button" class = "button-7">
                  <a href="../PDFs/Sovereign Wealth Reserve - Terms & Initiative.pdf" target="_blank" class="unstyled-a"> Learn </a></button>

            </div>
            <div class = "child-2">
              <div class = "items-2">
                <img src = "../imgs/PARTC/P3-S7-2.png" class = "logo-7-3">
                <p class = "sub-img-2">Hermon Equity<br> SPIV</p>
              </div>
              <button type = "button" class = "button-7">
              <a href="../PDFs/Hermon Equity - Terms & Initiative.pdf" target="_blank" class="unstyled-a">Discover</a></button>
            </div>
          </div>







        <!-- SECTION 7 NEW TO DO  -->
        <br><br><br><br>
        <br class="eq-br-bs">
        <br class="eq-br-bs">
        <br class="eq-br-bs">

        <!-- SECTION 8 -->
        <section id="s8-p3">
            <div class="s5-div">
            <!-- <img class="s5-p3-img" src="../imgs/PARTC/P3-S8.jpg"> -->
            <img class="s5-p3-img" src="../imgs/PARTC/P3-WALLPAPER.jpg">

            <div class="s5-centered"> FACILITATING UNREALIZED BENEFITS </div>
        </section>

        <!-- SECTION 9  CORPORATE VENTURES-->
        <br><br>
        <div class="s6">
            <p class ="s6-title" align=center>CORPORATE VENTURES</p>
            <div class="s6">
            <!-- <img src="icon3.png" width="40%"> -->
            <p class = "details-professional">
            As an investment office, we define our ventures as a blend of activities that
            pertain to financial and investment research, private and public partnerships,
            specialized economic and monetary scholarship, and direct affiliation with
            other private enterprises.
            </p>
            <p class = "details-professional">
            Through this amalgamation of corporate pursuit, CapB seeks to expand,
            deepen, and nourish its web of connections within the private and public
            domains of profession.

            </p>

            <img src = "../imgs/PARTC/P3-S9.png" alt = "logo" class = "professional-logo" align = "center">
        </div>
        <br><br><br>

        <!-- SECTION 10 & 11 NEW -->
        <div class="s10-p3">
        <div class="s10-div1">
            <h3 align=center>
                Investment Research & Analysis
            </h3>
            <br>
            <p align=center>
                A product of our <span class = "key-word"> Research Initiative. CapB </span>
                showcases certain reports, analyses, and
                “thought pieces” to the public in an effort to
                challenge and engage general consensus.
            </p>

            <div class="s10-line1">
                <div class="s10-p3-divs s10-finance">
                    Finance
                </div>
                <div class="s10-p3-divs s10-economics">
                    Economics
                </div>
            </div>
            <div class="s10-line2">
                <div class="s10-p3-divs s10-swiss">
                    Swiss Model
                </div>
            </div>
        </div>

        <div class="s10-div2">
            <h3 align=center>
            Public Sponsorships & Partnerships
            </h3>
            <br>
            <p align=center>
            Our most recent appearance and sponsorship
            for the <span class = "key-word">World Festival </span> virtual event, which
            included prominent business figures, influential
            entrepreneurs, and savvy investors
            </p>
            <img class="centered-img" src="../imgs/PARTC/P3-S10.png" width="50%" >
            <br>

            <button class="s10-p3-divs s10-p3-btn centered-img">Visit</button>
        </div>
    </div>


    <div class="s11-p3">
        <div class="s11-div1">
            <h3 align=center>
                 Recommended Research & Scholarship
            </h3>
            <br>
            <p align=center>
            With pure preference to its publications and no direct contact - whatsoever - with the
            noted firm, <span class = "key-word"> CapB </span> would like to redirect public
            attention to the works of <span class = "key-word">Mr. Jeffrey P. Snider </span>  of
            <span class = "key-word"> Alhambra Investments. </span>
            </p>

            <img class="centered-img" src="../imgs/PARTC/Alhambra-logo.png" width="40%">
            <br>
            <button class="s10-p3-divs s10-p3-btn centered-img">Visit</button>
        </div>

        <div class="s11-div2">
            <h3 align=center>
            Revered Affiliation & Association
            </h3>
            <br>
            <p align=center>
            <span class = "key-word"> CapB </span> proud to have established a direct
            affiliation with <span class = "key-word"> MentorFund</span>, a communitydriven
            Founder Accelerator that facilitates experience and deal-flow between founders
            and investors.
            </p>
            <img class="centered-img" src="../imgs/PARTC/P3-S11-2.png" width="40%">
            <br>
            <button class="s10-p3-divs s10-p3-btn centered-img">Visit</button>

        </div>
    </div>



<br><br>

        <!-- SECTION 12 RESEARCH INITIATIVE -->
        <div class="s6">
            <p class ="s6-title" align=center>RESEARCH INITIATIVE</p>
            <div class="s6">
            <!-- <img src="icon3.png" width="40%"> -->
            <p class = "details-professional">
            Initially, a fundamental division of <span class = "key-word">CapB</span>, the "Research Initiative" was
            purposed for providing, conducting, and retrieving intelligence on market
            activities, economic concerns/conditions, and general enterprise-related
            guidance.
            </p>
            <p class = "details-professional">
            All relevant topics mentioned below stand within the scope of our research
            efforts and undertakings.

            </p>

            <img src = "../imgs/PARTC/P3-S12.png" class = "professional-logo" align = "center">
        </div>

        <!-- SECTION 13 NEW -->
        <!-- <div class="s13-p3-body">
        <div class = "s13-p3-container">
        <div class = "ME">
            <div class="s13-p3-title box">Monetary Economics</div>
            <div class="s13-p3-sub-title box">Advanced Economies</div>
            <div class="s13-p3-sub-title box">Emerging Economies</div>
            <div class="location box">Lebanon</div>
            <div class="s13-p3-title box">Macroeconomics</div>
            <div class="s13-p3-sub-title box">Advanced Economies</div>
            <div class="s13-p3-sub-title box">Emerging Economies</div>
            <div class="s13-p3-title box">Investment Ideas</div>
            <div class="s13-p3-sub-title box Inisights">Reserve Insights</div>
            <img src = "../imgs/PARTC/P3-S7-1.png" class = "logo-7-33 border box logo-1">
        </div>

        <div class="GB">
            <div class="s13-p3-title box">Global Banking</div>
            <div class="s13-p3-sub-title box">Eurodollar System</div>
            <div class="s13-p3-sub-title box">Offshore Bank Credit</div>
            <div class="s13-p3-sub-title box">Banking Clusters</div>
            <div class="s13-p3-title box">Global Macro</div>
            <div class="s13-p3-sub-title box">Cross-Border Economies</div>
            <div class="s13-p3-sub-title box">Capital Flows</div>
            <div class="s13-p3-title box">Venture Capital</div>
            <div class="s13-p3-sub-title box">Financing Profits</div>
            <img src = "../imgs/PARTC/P3-S7-2.png" class = "logo-7-33 border box logo-2">
        </div>
    </div>
        </div> -->

        <section class="new-div-section-s-13">
  <div class="container-newdiv-s13 ">
    <div class="s5-newdiv-s-13">
        <h2 align="center" class="h2-s13">Topics & Interest</h2>
        <div class = "container-s13  container">
            <div class="box-s13">
                <p class = "topic color">
                    Monetary Economics
                </p>
                <p class = "sub-topic color">
                    Advanced Economics
                </p>
                <p class = "sub-topic color">
                    Emerging Economies
                </p>

                <p class = "last color">
                    Lebanon
                </p>

            </div>
            <div class="box-s13">
                <p class = "topic color">
                    Global Banking
                </p>
                <p class = "sub-topic color">
                    Advanced Economies
                </p>
                <p class = "sub-topic color">
                     Emerging Economies
                </p>

                <p class = "last color">
                    Banking Clusters
                </p>

            </div>
            <div class="box-s13">
                <p class = "topic color">
                    Macroeconomics
                </p>
                <p class = "sub-topic color">
                    Advanced Economics
                </p>
                <p class = "sub-topic color">
                    Emerging Economies
                </p>



            </div>
            <div class="box-s13">
                <p class = "topic color">
                    Global Macro
                </p>
                <p class = "sub-topic color">
                    Advanced Economics
                </p>
                <p class = "sub-topic color">
                    Emerging Economies
                </p>
            </div>
            <div class="box-s13">
                <p class = "topic color">
                    Monetary Economics
                </p>
                <p class = "sub-topic color">
                    Advanced Economies
                </p>

            </div>
            <div class="box-s13">
                <p class = "topic color">
                    Venture Capital
                </p>

                <p class = "sub-topic color">
                    Financing Prospects
                </p>

            </div>
        </div>
    </div>
</div>

  </section>


<br>

        <section id="s15-p2">
        <div class="s5-div">
        <img src="../imgs/PARTC/P3-S14.jpg" width="100%">
        <div class="s5-centered"> ENDLESS POSSIBILITIES </div>
    </section>
        <?php include '../footer.php'; ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script>
     $(document).ready(function(){
        $(window).scroll(function(){
        $(".s1-container").css("opacity", 1.1 - $(window).scrollTop() / $('.s1-container').height() /2 );
        });
    });


 $(function () {
    $(document).scroll(function () {
    var $nav = $(".navbar");
    $nav.toggleClass('scrolled', $(this).scrollTop() > 200);
    });
});




    </script>



</body>


</html>
