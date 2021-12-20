<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8" /> <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Відгуки</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
                <h1>Додайте свій відгук</h1>

			  <div class="mb-3">
			    <label for="name" class="form-label">Ваше ім'я:</label>
			    <input type="text" name="name"class="form-control" id="name" >
			  </div>

			  <div class="mb-3">
			    <label for="phone" class="form-label" >Телефон:</label>
			    <input type="text" name="phone" class="form-control" id="phone" >
			  </div>

			   <div class="mb-3">
			    <label for="comment" class="form-label">Відгук:</label>
			    <textarea name="comment" class="form-control" id="comment" rows="3"></textarea>
			  </div>

			   <button type="submit" id="btn" class="btn btn-primary">Відправити</button>

			   <a href="all.php" class="form-label">Переглянути всі відгуки</a> 
			
		</div>
		</div>
	</div>
	
<script>
	$(document).ready(function(){
		$('#btn').on('click', function(){
			var nameValue=$('#name').val();
			var phoneValue=$('#phone').val();
			var commentValue=$('#comment').val();
			console.log(nameValue, phoneValue, commentValue);

				$.ajax({
				  method: "POST",
				  url: "response.php",
				  data: { name: nameValue, phone: phoneValue,
				  	comment: commentValue }
				})
				  .done(function() {
				//
				 });

			$('#name').val("");
			$('#phone').val("");
			$('#comment').val("");	  
		
			})
		});
</script>
</body>
</html>