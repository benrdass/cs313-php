<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add an entry</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div>
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Accounts and Settings
                    </a>
                </li>
                 <li>
                    <a href="index.php">Summary of Accounts</a>
                </li>
                <li>
                    <a href="account1.php">Add an entry</a>
                </li>
                <li>
                    <a href="settings.php">Settings</a>
                </li>
                <li>
                    <a href="faq.php">FAQ</a>
                </li>
                <li>
                    <a href="help.php">Help</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <form action="applyChanges.php" method="POST">
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <header>
                    <h1 style="color: white;">Add an entry</h1>
                </header>
                <br>
                <a href="#menu-toggle" class="btn btn-secondary col-md-4 col-md-offset-4" id="menu-toggle">Menu</a>
                <div class="col-md-offset-4">
                    <br><br>
                    <h3><b>Debit</b></h3>
                    <a href="#"><sup>View ledger</sup></a>
                    <p><pre class="col-md-4 col-md-offset-1">    Debit Balance: <input type="number" name="debBal"></pre></p>
                    <br><br><br>
                    <h3><b>Credit</b></h3>
                    <a href="#"><sup>View ledger</sup></a>
                    <p><pre class="col-md-4 col-md-offset-1">   Available credit: <input type="number" name="avalCre"></pre></p>
                    <br><br><br>
                    <p><pre class="col-md-4 col-md-offset-1">   Credit Balance: <input type="number" name="creBal"></pre></p>
                    <br><br><br><br><br>
                    <pre class="col-md-6">         Bank name: <input type="text" name="bank_name">   <input type="submit" value="Update entries"> </pre>
                    <br><br>
                </div>
            </div>
        </div>
        </form>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
