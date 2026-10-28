<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!--@import 'resources/css/custom.css' -->

    <link rel="stylesheet" href = "{{asset ('css/custom.css')}}"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #emailInput {
            font-size: 100px;
            color: #6f42c1;
        }
        .input-email .email {
            color: green;
        }
    
        h1, h2{
            color:cadetblue;
        }
    </style>
    <title>Document</title>
</head> 
<body class = "input-email">
   
  
    <h1 style = "font-family:Arial; background-color:bisque">Edit User: </h1>{{ $id }}

    <button type="button" class="btn btn-primary">Primary</button>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item email"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
    </nav>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="input-email email" id="emailInput" placeholder="name@example.com">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="container register-form">
        <div class="">
            <h1>HELLO</h1>
        </div>

        <div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div> 
        </div>

        <div>
            <button type="button" class="btn btn-primary">Submit</button>
        </div>
    </div>
    
</body>

</html>




<!--
 <button type="button" class="btn btn-primary">Primary</button>

    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>

    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>


    <div class="container">
        <div class="title">
            <h1>HELLO</h1>
        </div>
        <div> 
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

        </div>
        <div> 
            <button type="button" class="btn btn-primary">Primary</button>
        </div>
    </div>
-->
