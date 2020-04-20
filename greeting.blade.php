<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style type="text/css">
#login{
     float:right;
     
}
.field{
  width:-80px;
}
</style>

<head>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">USD to INR</a>
</nav>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" id="login" data-toggle="modal" data-target="#exampleModal">
  login
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Enter your Name</span>
  </div>
  <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
</div>
      <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Enter Password</span>
  </div>
  <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Submit</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<script language="JavaScript">
<!--

function dollarConverter(){
document.converter.euro.value = document.converter.dollar.value * 0.680
document.converter.pound.value = document.converter.dollar.value * 0.488
document.converter.rupee.value = document.converter.dollar.value * 76.50
}
// function euroConverter(){
// document.converter.dollar.value = document.converter.euro.value * 1.470
// document.converter.pound.value = document.converter.euro.value * 0.717
// document.converter.rupee.value = document.converter.euro.value * 165.192
// }
// function poundConverter(){
// document.converter.dollar.value = document.converter.pound.value * 2.049
// document.converter.euro.value = document.converter.pound.value * 1.394
// document.converter.rupee.value = document.converter.pound.value * 230.27
// }
// function rupeeConverter(){
// document.converter.dollar.value = document.converter.rupee.value * 76.50
// document.converter.pound.value = document.converter.rupee.value * 0.00434
// document.converter.euro.value = document.converter.rupee.value * 0.00605
// }
//-->
</script>
</head>
<body>
<form name="converter">
<table border="0">

<tr>
<td>US Dollar: </td><td><input type="text" name="dollar" onChange="dollarConverter()" /></td>
</tr>
<tr>
<td>Euro: </td><td><input type="text" name="euro" onChange="euroConverter()" /></td>
</tr>
<tr>
<td>British Pound:</td><td><input type="text" name="pound" onChange="poundConverter()" /></td>
</tr>
<tr>
<td>Indian Rupee: </td><td><input type="text" name="rupee" onChange="rupeeConverter()" /></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="button" value="Convert!" /></td>
</tr>
</table>
</form>
</body>


</html>
