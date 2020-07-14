
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
body{
	 padding: 50px;
    
    
}
</style>
</head>
<body>

<h2>Frequently Asked Question</h2>
<p>Below you'll find answers to the questions we get asked the most are featured below.</p>

<?php


include 'co.php';

$sqli = "SELECT * FROM faqs"; 
$result = mysqli_query($conn, $sqli); 
$row1 = mysqli_num_rows ($result);
$row;
while($row = mysqli_fetch_array($result)){ 



 echo'<button class="accordion">'. $row['faqs'].'</button>';
 echo'<div class="panel">';
  echo'<p>' . $row['answer'].'</p>';
echo'</div>';
}
?>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

</body>

</html>
