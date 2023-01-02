<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Staff application </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>



<div class="container">
    <div class="form-group col-12 p-0">
        <div>
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
</div>
@endif

</div>
<form action="/staffreg" method="POST">
    @csrf

<div class="form-group">
    <div class="col-sm-12">
        <h2 style="text-align: center; color: blue"> Staff Application </h2>
</div>
</div>

<hr\>
<div class="row">
<div class="form-group col-md-6">
    <label> Staff name </label>
    <input type="text" name="name" class="form-control" id="staff name" >
</div>

<div class="form-group col-md-6">
    <label> Staff email </label>
    <input type="text" name="email" class="form-control" id="staff email" >
</div>

<div class="form-group col-md-6">
<label for= "department" > Department </label>
           <select name="department" >
            <option value="Accounting" >Accounting </option>
            <option value="Kitchen" >Kitchen </option>
            <option value="Medical" >Medical </option>
</select>
            


</div>

<input type="hidden" name="status" value=1>

<div class="form-group col-md-6">
<label for="gender"> Gender </label>
<select name="gender" >
            <option value="Male" >Male </option>
            <option value="Female" >Female </option>
            <option value="Other" >Other </option> 
</select>
</div>

<div class="form-group col-md-6" align=center">
<Button class="btn btn-success" style="width: 80px;" >Apply </Button>
</div>
 
</div>
</form>
</body>
</head>
</html>