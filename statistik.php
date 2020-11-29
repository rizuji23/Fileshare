 <!DOCTYPE html>
  <html lang="lang" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>FileShare | Statistik Page</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body>




    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">FileShare | Network Server | <b>Statistik</b> </a>
      <div class="navbar-nav">
        <a class="nav-item nav-link " href="dashboard.php">Kembali Ke Dashboard <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="logout.php">Logout</a>

      </div>
    </nav>

    <div class="jumbotron">
      <h1 class="display-4">Statistik </h1>
      <table class="table">
            <thead class="thead-light">
                <tr>
                <th scope="col">No</th>
                <th scope="col">User Name</th>
                <th scope="col">Folder</th>
                
                <th>Name File</th>
                <th>Date</th>
                <th>Activity</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                require 'functions.php';

                $sql = mysqli_query($koneksi, "SELECT * FROM statistik ORDER BY id DESC");
                $id = 1;
                foreach ($sql as $d){
            ?>
                <tr>
                    <td scope="row"><?php echo $id++; ?></td>
                    <td><?php echo $d['user'] ?></td>
                    <td><?php echo $d['folder'] ?></td>
                    <td><?php echo $d['file'] ?></td>
                    <td><?php echo $d['tanggal'] ?></td>
                    <td><?php echo $d['activity'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


    <footer class="page-footer font-small blue">
      <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="#"> Rizki Fauzi</a>
      </div>
    </footer>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>

  </html>
