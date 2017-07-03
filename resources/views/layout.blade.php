<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Starter Template</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="starter-template.css" rel="stylesheet"> -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('css')
</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Payroll Management</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Admin</a></li>

                     <li class="dropdown">
                      <a href="#about" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Master</a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="branches">Branch</a></li>
                        <li><a href="divisions">Division</a></li>
                        <li><a href="designations">Designation</a></li>
                        <li><a href="employee_creations">Employee</a></li>
                        <li><a href="hra">HRA</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#transaction" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Transactions</a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="attendance">Attendance</a></li>
                        <li><a href="set-salary">Set Salary</a></li>
                        <li><a href="payments">Payments</a></li>
                        <li><a href="cash">Cash</a></li>
                        <li><a href="cash-close">Cash Close</a></li>
                      </ul>
                    </li>
                   <li class="dropdown">
                      <a href="#report" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reports</a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="employee-list">Employee List</a></li>
                        <li><a href="employee-wise-report">Employee Wise Report</a></li>
                        <li><a href="salary-advance-report">Salary Advance Report</a></li>
                        <li><a href="attendance-report">Attendance Report</a></li>
                        <li><a href="set-salary-report">Set Salary Report</a></li>
                        <li><a href="paid-report">Paid Report</a></li>
                        <li><a href="cash-report">Cash Report</a></li>
                        <li><a href="month-salary-for-cashier">Month Salary For Cashier</a></li>
                        <li><a href="comparison-statement.html">Comparison Statement</a></li>
                      </ul>
                    </li>
                    <li><a href="#contact">Logout</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container">
        @yield('header')
        @yield('content')
    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
    @yield('scripts')
</body>
</html>
