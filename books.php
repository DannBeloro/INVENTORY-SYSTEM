<?php include('dbcon.php'); session_start();?>
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="design.css">
</head>
  <div class="UMlogo">
   <img src="img/UMlogo.png" style="width:14%">
    <div class ="header2"><br>
    <h1 class="h1staff">THE UNIVERSITY OF MANILA</h1>
    <h1 class="h2staff">Online Book Inventory with Tracking System</h1>
    </body>  
  </div>
 <div class= "header3">
    <button class="btn btn-dark"name="submit"><a href ="addbooks.php" class="text-light">ADD </a> </button> 
    <button class="btn btn-dark"name="submit"><a href ="booklist.php" class="text-light">BOOKS </a></button>
    <button class="btn btn-dark"name="submit"><a href ="staffprofile.php" class="text-light">PROFILE </a></button> 

</div>
<meta charset="UTF-8" class="G">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </body>
  </html>
      <title>STAFF</title>
</head>

  <body>
    <?php

      if (isset($_SESSION['error'])){
  
      echo "<script>alert('The number you entered is invalid!')</script>";
      unset($_SESSION['error']);
      }else{

      }
      ?>

        <div class="searchbar" >
       <form action="" method="GET">
      <div class="input-group mb-3" class="searchbar">
     <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search books">
    <button type="submit" class="btn-success">Search</button>
   </div>
  </form>

 <thead>
</div>
  <div class="row">

  <table class="table">
         <div class="col-md-7">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Course code</th>
      <th scope="col">Decriptive Title</th>
      <th scope="col">Price</th>
      <th scope="col">Stocks</th>
      <th scope="col" class="text-center" colspan="2">Action</th>
   </tr>
  </thead>
 <tbody>
</div>
<?php

?>
  <?php 
      $con = mysqli_connect("localhost","root","","db");
      if(isset($_GET['search'])){

      $filtervalues = $_GET['search'];

    $sql = "SELECT * FROM books WHERE coursecode = '$filtervalues' OR title = '$filtervalues'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0){
      while ($row = mysqli_fetch_assoc($result)) {

        $lowstocks = $row["stocks"];

        if($lowstocks > 5){

          $status= 'black';
        }else{
          $status= 'red';
        }
        echo "<tr><td class='text-center'>". $row["id"] . "<td class='text-center'>". $row["coursecode"] ."<td class='text-center'>". $row["title"]."<td class='text-center'>". $row["price"]."<td class='text-center' style='color:$status;'>". $row["stocks"]."<td class='text-center viewrow'><button type='button' name='view' class='btn btn-success viewbtn'>-</button></td></td><td class='text-center'><button type='button' name='view' class='btn btn-primary viewbook'>+</button>";
      }
      echo "</table>";
    } else {
      echo "<h4 class='text-center fw-bold'>No Books Found</h4>";
    }


}else{

}
?>
</tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="viewgrade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Stocks</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="SubtractStock.php" method="POST">
      <div class="modal-body">
        
          <input type="hidden" name="id" id="id_id" class="form-control" style="text-transform: uppercase;" readonly>

        <div class="mb-3">
          <label class="form-label">Course Code</label>
          <input type="text" name="code" id="id_code" class="form-control" style="text-transform: uppercase;" readonly>
        </div>
        <div class="mb-3">
          <label class="form-label">Descriptive Title</label>
          <input type="text" name="title" id="id_title" class="form-control" style="text-transform: uppercase;" readonly>
        </div>
        <div class="mb-3">
          <label class="form-label">Price</label>
          <input type="text" name="price" id="id_price" class="form-control" style="text-transform: uppercase;" readonly>
        </div>
        <div class="mb-3">
          <label class="form-label">Stocks</label>
          <input type="text" name="stocks" id="id_stocks" class="form-control" style="text-transform: uppercase;" readonly>
        </div>
        <div class="mb-3">
          <label class="form-label">Subtract</label>
          <input type="number" name="subtractnumber" id="id_subtract" class="form-control" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="subtract">Save changes</button>

      </div>
              </form>
    </div>
  </div>
</div>
<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="addgrade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Stocks</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="AddStock.php" method="POST">
      <div class="modal-body">
        
          <input type="hidden" name="id" id="id_addid" class="form-control" style="text-transform: uppercase;">

        <div class="mb-3">
          <label class="form-label">Course Code</label>
          <input type="text" name="code" id="id_addcode" class="form-control" style="text-transform: uppercase;" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Descriptive Title</label>
          <input type="text" name="title" id="id_addtitle" class="form-control" style="text-transform: uppercase;" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Price</label>
          <input type="text" name="price" id="id_addprice" class="form-control" style="text-transform: uppercase;" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Stocks</label>
          <input type="text" name="stocks" id="id_addstocks" class="form-control" style="text-transform: uppercase;" readonly>
        </div>
        <div class="mb-3">
          <label class="form-label">Add</label>
          <input type="number" name="addnumber" id="id_addsubtract" class="form-control" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="add">Save changes</button>

      </div>
              </form>
    </div>
  </div>
</div>
<!-- Modal -->
</div>
</div>
</div>
</div>
</div>
</div>
 <script>

$(document).ready(function(){
  $('.viewbtn').on('click', function(){
    $('#viewgrade').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function(){
      return $(this).text();
    }).get();

console.log(data);
$('#id_id').val(data[0]);
$('#id_code').val(data[1]);
$('#id_title').val(data[2]);
$('#id_price').val(data[3]);
$('#id_stocks').val(data[4]);


  });
});
 </script>

 <script>

$(document).ready(function(){
  $('.viewbook').on('click', function(){
    $('#addgrade').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function(){
      return $(this).text();
    }).get();

console.log(data);
$('#id_addid').val(data[0]);
$('#id_addcode').val(data[1]);
$('#id_addtitle').val(data[2]);
$('#id_addprice').val(data[3]);
$('#id_addstocks').val(data[4]);


  });
});
 </script>
</body>
</html> 
</div>

