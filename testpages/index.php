<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../stylesheet.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <script type="text/javascript" src="../jquery-comp-3.6.js"></script>
    </head>

    <body>
  <br>
          <div class="s12">
            <h3 align=center> Portfolio Listing, Composition and Research </h3>
            <p align=center>Click the ticker to acces document</p> 

            <table class="s12-table">
                <tr>
                    <td class="s12-card table1pink">
                        SWRCHF
                    </td>
                    <td width=5%></td>
                    <td class="s12-card table1green">
                        SWRUSD
                    </td>
                    <td width=5%></td>
                    <td class="s12-card table1yellow">
                        SWRBTC
                    </td>
                </tr>
            </table>
            <table class="s12-table2">
                <tr>
                    <td class="s12-card table2blue"> 
                        SWRDEF
                    </td>
                    <td width="20%"></td>
                    <td class="s12-card table2blue">
                        SWRREF
                    </td>
                </tr>
            </table>
            <br><br>
            <h3 align=center> Information Tab </h3>

            <div class="s12-div1">
                <p> Swiss-related Investments </p>
            </div>

            <table class="s12-table3">
                <tr>
                    <td class="s12-t3-card1" align="center">
                        Year-to-Month Performance
                    </td>
                    <td class="s12-t3-card2" align="center">
                        <!-- ADD CONNECTION TO DATABASE -->
                        <span id="s12-txt-1"> SWRCHF | 12.03% </span>  
                        <span id="s12-txt2" > SWRUSD | 5.34%  </span>
                    </td>
                </tr>
            </table>
        </div>
    <!-- ------------------------------------ -->
    <!-- ------------------------------------ -->
    <!-- ------------------------------------ -->
    <!-- ------------------------------------ -->
    <!-- ------------------------------------ -->
<br><br><br><br>
    <div class="s13">
        <h3 align=center> FINANCIAL INFORMATION & RECORD </h3>
        <p align=center>Disclosed information are only relevant to the current and ongoing year of 2021</p> 
        <br>
        <h4 align=center> Spotlight Performance </h4>
        <br>

        <div class="cards">
        <div class="s13-div1">
            <div class="s13-card card1">
            Cumulative value of successfully-closed private deals (in millions USD)
            </div>
            <div class="s13-numbers div1numb-back">
                <span class="counter" data-number="21   "></span>
            </div>
        </div>
        <div class="s13-div2">
            <div class="s13-card card2">
            Total number of successfully-closed private deals
            </div>
            <div class="s13-numbers div2numb-back">
                <span class="counter" data-number="33"></span>
            </div>
        </div>
        <div class="s13-div3">
            <div class="s13-card card3">
            Total return on investment (YTD) due to our private fund (in percent)
            </div>
            <div class="s13-numbers div1numb-back ">
                <span class="counter" data-number="13"></span>
            </div>
        </div>
    </div>
    </div>

    <br><br><br><br><br><br>
    <br><br><br><br><br><br>    <br><br><br><br><br><br>
    <br><br><br><br><br><br>

    <script>
     var a = 0;
$(window).scroll(function () {
    var oTop = $(".card1").offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
        $(".counter").each(function () {
            var $this = $(this),
                countTo = $this.attr("data-number");
            $({
                countNum: $this.text()
            }).animate(
                {
                    countNum: countTo
                },

                {
                    duration: 5000,
                    easing: "swing",
                    step: function () {
                        $this.text(
                            Math.ceil(this.countNum).toLocaleString("en")
                        );
                    },
                    complete: function () {
                        $this.text(
                            Math.ceil(this.countNum).toLocaleString("en")
                        );
                    }
                }
            );
        });
        a = 1;
    }
});


    </script>    



</body>


</html>