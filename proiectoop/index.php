<!DOCTYPE html>
<html lang="en">
<?php include ('layout/head.php');?>
<body>
    <div class="container py-4">
<?php include('layout/meniu.php');?>
        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 600px;">
			<h4 class="card-title mt-3 text-center">LOGIN MyApp - Carti</h4>
				<form  method="post"  data-toggle="validator" novalidate="true">
					 <div class="alert alert-danger display-error" style="display: none">
					 </div>
				
					<div class="form-group">
						<label for="input1" class=" control-label">Email </label>
						<div >
						  <input type="email" name="email"  class="form-control" id="email" placeholder="Adresa de email" required/>
						</div>
					</div>
		 
					<div class="form-group">
						<label for="input2" class=" control-label">Parola</label>
						<div>
						  <input type="password" name="parola"  class="form-control" id="parola" required/>
						</div>
					</div>
					<input id="submit" type="submit" class="btn btn-primary" value="Login" />
					</form>
            </article>
        </div>
        <!-- card.// -->
        <?php include('layout/footer.php');?>
    </div>
    <!--container end.//-->
</body>
</html>