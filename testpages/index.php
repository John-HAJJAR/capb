<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
<div class="container">
  <h2 align="center">Admissions Form </h2>
  <p>Here are displayed everything and everyone that is in the DB : </p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped" >
    <thead>
      <tr>
        <th style="width:9%;">Name</th>
        <th style="width:11%;">Email</th>
        <th style="width:10%;">Phone Number</th>
        <th style="width:10%;">Nationality</th>
        <th style="width:10%;">LinkedIn</th>
        <th style="width:10%;">Chosen Position</th>
        <th style="width:10%;">Role Type</th>
        <th style="width:30%;">Message</th>
      </tr>
    </thead>

    <tbody id="myTable">
      <tr>
        <td>John Doe</td>
        <td>john@example.com</td>
        <td>(+961) 75747372</td>
        <td>Leb</td>
        <td>linkedin.com</td>
        <td>Dev</td>
        <td>Web</td>
        <td>Hello, I would like to apply to this position ssksskskblablablabla ssksskskblablablabla
        ssksskskblablablabla ssksskskblablablabla ssksskskblablablabla ssksskskblablablabla ssksskskblablablabla
        ssksskskblablablabla ssksskskblablablabla ssksskskblablablabla ssksskskblablablabla ssksskskblablablabla
        </td>
      </tr>
      <tr>
        <td>Mary Moe</td>
        <td>mary@mail.com</td>
        <td>02020202</td>
        <td>FR</td>
        <td>linkedin.com</td>
        <td>Mev</td>
        <td>Meb</td>
        <td>Mello, I would like to apply to this position ssksskskblablablabla ssksskskblablablabla
        ssksskskblablablabla ssksskskblablablabla ssksskskblablablabla ssksskskblablablabla
        ssksskskblablablabla ssksskskblablablabla ssksskskblablablabla ssksskskblablablabla
        ssksskskblablablabla ssksskskblablablabla ssksskskblablablabla
        ssksskskblablablabla ssksskskblablablabla ssksskskblablablabla
        ssksskskblablablabla ssksskskblablablabla ssksskskblablablabla
        ssksskskblablablabla ssksskskblablablabla ssksskskblablablabla ssksskskblablablabla ssksskskblablablabla
        </td>

      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@greatstuff.com</td>
      </tr>
      <tr>
        <td>Anja</td>
        <td>Ravendale</td>
        <td>a_r@test.com</td>
      </tr>
    </tbody>
  </table>
  
</div>



<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


</body>


</html>