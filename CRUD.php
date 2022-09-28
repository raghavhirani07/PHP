<?php
$servername="localhost";
$username="root";
$password="";
$database="notes";
$update=false;
$delete=false;
$insert=false;
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    die("sorry we failed to connect :".mysqli_connect_error());
}
if(isset($_GET['delete'])){
$sno=$_GET['delete'];
$sql="DELETE FROM notes_data WHERE `notes_data`.`sno` = '$sno'";
$result=mysqli_query($conn,$sql);
if($result){
$delete=true;
}

}
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if(isset($_POST['snoEdit'])){
    $newsno=$_POST['snoEdit'];
    $title=$_POST['titleEdit'];
    $description=$_POST['descriptionEdit'];
    $sql1="UPDATE `notes_data` SET `title` = '$title'   WHERE `sno` = '$newsno'";
    $result=mysqli_query($conn,$sql1);
    $sql2="UPDATE `notes_data` SET `description` = '$description' WHERE `sno` = '$newsno'";
    $result=mysqli_query($conn,$sql2);
    $update=true;
  }
  else{

$title=$_POST['title'];
$description=$_POST['description'];
$sql="INSERT INTO `notes_data` ( `title`, `description` ) VALUES ( '$title','$description')";
$result=mysqli_query($conn,$sql);
$insert=true;
  }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datata`bles.net/1.12.1/css/jquery.dataTables.min.css">


    <title>Php CRUD</title>

</head>

<body>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container my-3">
                        <h2> Add a notes </h2>
                        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                            <input type="hidden" name="snoEdit" id="snoEdit">
                            <div class="form-group">
                                <label for="exampleInputTitle"> Note Title</label>
                                <input type="text" name="titleEdit" class="form-control" id="titleEdit"
                                    aria-describedby="emailHelp" placeholder="Enter Note title ">

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Note description</label>
                                <textarea class="form-control" name="descriptionEdit" id="descriptionEdit"
                                    rows="3"></textarea>
                            </div>

                            <button type="update" name="update" class="btn btn-primary">Update Notes</button>
                        </form>
                    </div>


                </div>

            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">PHP CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
    if($insert){
       echo '<div class="alert alert-success alert-dismissible fade show " role="alert">
        <strong>Hello Friends </strong> Your data add succesfully in database
        </b><button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>';
        }

    }
    ?>
    <?php
           if($update){
               echo '<div class="alert alert-success alert-dismissible fade show " role="alert">
             <strong>Hello Friends </strong> Your data  update  database
             </b><button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
             </div>';
             }
    ?>
     <?php
           if($delete){
               echo '<div class="alert alert-success alert-dismissible fade show " role="alert">
             <strong>Hello Friends </strong> Your data deleted database
             </b><button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
             </div>';
             }
    ?>
    <div class="container my-3">
        <h2> Add a notes </h2>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <div class="form-group">
                <label for="exampleInputTitle"> Note Title</label>
                <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp"
                    placeholder="Enter Note title ">

            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Note description</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Add Notes</button>
        </form>
    </div>
    <div class="container my-5">
        <table class="table" id="myTable" name="myTable">
            <thead>
                <tr>
                    <th scope="col">S no</th>
                    <th scope="col">Title</th>
                    <th scope="col">description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
         $sql="SELECT * FROM `notes_data`";
         $result=mysqli_query($conn,$sql);
         $count=1;
         while($row=mysqli_fetch_assoc($result)){
         echo "<tr  > <td>".$count."</td> <td>".$row['title']."</td><td>".$row['description']."</td><td>"." <button class='edit btn btn-primary' id=".$row['sno'].">Edit</button> <button class='delete btn btn-primary' id=d".$row['sno']." >Delete</button>"."</td></tr>";
         $count=$count+1;
         }

        ?>

            </tbody>
        </table>

    </div>
    <hr>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>
    <script>
    edits = document.getElementsByClassName('edit')
    Array.from(edits).forEach((element) => {
        element.addEventListener('click', (e) => {

            tr = e.target.parentNode.parentNode;
            title = tr.getElementsByTagName("td")[1].innerText;
            describption = tr.getElementsByTagName("td")[2].innerText;
            sno = tr.getElementsByTagName("td")[3].getElementsByTagName("button")[0].id;
            descriptionEdit.value = describption;
            titleEdit.value = title;
            snoEdit.value = sno;
            $('#exampleModal').modal('toggle')

        })
    })

    delete1 = document.getElementsByClassName('delete')
    Array.from(delete1).forEach((element) => {
        element.addEventListener('click', (e) => {
            tr = e.target.parentNode.parentNode;
            sno = tr.getElementsByTagName("td")[3].getElementsByTagName("button")[0].id;
            if (confirm("Are you sure to delete ")) {
                window.location = `CRUD.php?delete=${sno}`;
            }
        })
    })
    </script>
</body>

</html>