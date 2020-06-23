<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <title>books</title>
  <meta charset="utf-8" content="width = device-width, initial-scale = 1.0">


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

    <!-- navbar -->

      <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark" style="z-index: 2;">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0"action="search1.php" method="post">
      <input class="form-control mr-sm-2" type="search" name="search_1" placeholder="search..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search_2"><a href="search1.php"Search</button>
    </form>
  </div>
</nav> 







<!-- main section -->



<div class="container-fluid">
      <div class="outer">
        <div class="details">
          <h1>Hi there</h1>
          <h3>
            We at the passMeABook offer you cash for books or the vice versa. It is the great way to share your knowledge with world and still earn money. With our selling and buying feature you can buy as many books as you at low price, beside it is always free to take a stoll among the books and happ.... <a href="#"> learn more about us </a>
          </h3>
            <button class="btn btn-success" onclick="window.location.href = 'login.html';">you got my interest</button><button class="btn btn-dark" onclick="window.location.href = 'sorry.html';">I prefer lifetime of misery</button>
          </div>
        </div>
      </div>
    </div>


</body>
</html>