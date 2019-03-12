<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>faculty registration!</title>
  </head>
  <body>
    <h1>faculty registration!</h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <div class="container">
  <form>
  <div class="form-group">
    <label for="exampleFormControlInput1">personal details</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="first name">
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="last name">
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=" faculty id">
  <input type="date"format="dd/mm/yyyy" class="form-control" id="exampleFormControlInput1" placeholder="D.O.B">
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="fathers name">
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="mothers name">
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="current address">
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="permanent address">
  
    <select class="form-control" id="exampleFormControlSelect1" placeholder="blood group">
      <option>A+</option>
      <option>B+</option>
      <option>AB+</option>
      <option>O-</option>
      <option>O+</option>
    </select>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nationality">
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="category">
   <select  class="form-control" id="exampleFormControlSelect1" placeholder="gender" >
      <option>male</option>
      <option>female</option>
      <option>other</option>
    </select>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="state">
    <input type="numeric" class="form-control" id="exampleFormControlInput1" placeholder="pincode">
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="city">
    <label for="exampleFormControlSelect1">status</label>
   <select class="form-control" id="exampleFormControlSelect1">
      <option>on</option>
      <option>off</option>
   <input type="submit" name='save'/>
       
  </div>
</form> 
<table border='1' cellspacing="5" cellpadding="5">
<tr style="text-align: left"</div>
  <th>first name</th>
  <th>last name</th>
  <th>faculty id</th>
  <th>D.O.B</th>
  <th>fathers name</th>
  <th>mothers name</th>
  <th>current address</th>
  <th>permanent address</th>
  <th>blood group</th>
  <th>nationality</th>
  <th>category</th>
  <th>gender</th>
  <th>state</th>
  <th>pincode</th>
  <th>city</th>
  <th>status</th>
  
</tr>

</tr></tr>
<?php foreach ($uers as $item) { ?>
<tr>
   
   <td><?php echo $item->first name;?></td>
   <td><?php echo $item->last name;?></td>
   <td><?php echo $item->faculty id;?></td>
   <td><?php echo $item->D.O.B;?></td>
   <td><?php echo $item->fathers name;?></td>
   <td><?php echo $item->mothers name;?></td>
   <td><?php echo $item->current address;?></td>
   <td><?php echo $item->permanent address;?></td>
   <td><?php echo $item->blood group;?></td>
   <td><?php echo $item->nationality;?></td>
   <td><?php echo $item->category;?></td>
   <td><?php echo $item->gender;?></td>
   <td><?php echo $item->state;?></td>
   <td><?php echo $item->pincode;?></td>
   <td><?php echo $item->city;?></td>
   <td><?php echo $item->status;?></td>
   <td><?php echo $item->;?></td>

 </tr>
<?php} ?>
</table>
</body>
</html>


</body>
</html>
