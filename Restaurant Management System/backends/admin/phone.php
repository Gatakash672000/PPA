<!doctype html>
<html lNG="en">
  <head>
    <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="view port" content="width=device-width, initial-scale=1">
      <!-- Bootsttap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrasp.min.css" rel="stylesheet" integrity=sha384- eOJMYsd53ii+scO/bjgfsiCZc+5NDVN2yr8+ORDRqr0Q10h+rp48eckxdlpbzkgwra6" crossorigin="anonymous">
      <title>Hello, wprld!</title>
      </head>
      <body>
      {% block content %}
      {% endlock %}
      <!-- Optional JavaScript; choose one of the two! -->
      <!-- Option 1: Bootstrap Bundle with popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha984-JEW9xMcG8R+pH31jmWH6WWpOWintQrMb4s7ZdauHnUtxwoG2vI5DkLs39qm9ekf" crossorigin="anonymous"></script>

<!-- Option 2: separate popper and Bootstrap JS -->
<script
src="https://cdn.jsdeliver.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min".js" integrity="sha384- SR1sx49pcLnqZUnnpwx6FCym0wLsk5JZuNzx2bPPENzswTNFaQU1RDvt3wT4gWFG"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha348-jOCNLUeiqtRm1zUHCPZ+Gy5QuOdq6ez/xAww941Ai1SxSy+OEQqNXNE6DZiVc"crossorigin="anonymous"></script>
</body>
</html>
{% exends 'theme.html' %}
{% block content %}
<h1>Products</h1>
<div class="container">
<div class="row">
{% for product in products %}
<div class="col-md-3">
     <div class="container">
     	<div class="card">
     		<img class="card-image-top" src="{{product.image}}" alt="card image cap">
     		<div class ="card-body">
     			<h5 class="card-title">{{product.name}}<h5>
     				<p class="card-text">{{product.pricre}}</p>
     				<a href="#" class ="btn btn-primary"><GO somewhere</a>
     				</div>
     			     </div>
     			     </div>
     			   <div>
     	      {% endfor %}
     	       </div>
     	   </div>
     	   {% endblock %}

     			     





