<?php include('dbcon.php'); ?>

<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
	
<body>
<div class="UMlogo">
<img src="img/UMlogo.png" style="width:14%">
<br>
   <div class ="header2"><br>
  <h1 class="h1staff">THE UNIVERSITY OF MANILA</h1>
    <h1 class="h2staff">Online Book Inventory with Tracking System</h1>
    </body>  
</div>
<div class= "header3">
<button class="btn btn-primary my-5"name="submit"><a href ="addbooks.php" class="text-light">ADD </a> </button> 
    <button class="btn btn-primary my-5"name="submit"><a href ="booklist.php" class="text-light">BOOKS </a></button>
    <button class="btn btn-primary my-5"name="submit"><a href ="stafflogout.php" class="text-light">LOGOUT </a></button> 

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
    
</body>
</html>
      <title>STAFF</title>
</head>
<body>

<body>

<div class="searchbar" >
        

            <form action="" method="GET">
            <div class="input-group mb-3" class="searchbar">
            <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search books">
            <button type="submit" class="btn btn-primary">Search</button>
            </div>
    </form>
    
    
    
  <thead>
</div>
  <div class="row">
  <table class="table">
         <div class="col-md-7">
    <tr>
      <th scope="col">Course code</th>
      <th scope="col">Decriptive Title</th>
      <th scope="col">Price</th>
      <th scope="col">Stocks</th>

    </tr>
  </thead>
  <tbody>
</div> 
  <?php 
    $con = mysqli_connect("localhost","root","","admin");
    if(isset($_GET['search']))
  {
    $filtervalues = $_GET['search'];
    $query = "SELECT * FROM books WHERE CONCAT(coursecode,title) LIKE '%$filtervalues%' ";
    $query_run = mysqli_query($con, $query);

        if(mysqli_num_rows($query_run) > 0)
  {
          foreach($query_run as $items)
  {

  ?>
      <tr>
      <td><?= $items['coursecode']; ?></td>
      <td><?= $items['title']; ?></td>
      <td><?= $items['price']; ?></td>
      <td><?= $items['stocks']; ?></td>
      </tr>
  <?php
        }
    }
    else
    {
        ?>
        </div>
            <tr>
                <td colspan="4">No Books Found</td>
            </tr>
        <?php
    }
}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</dib>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>



</html>
   
</div>

