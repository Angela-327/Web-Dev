<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .center {
            text-align:center;
        }
        
    </style>
</head>

<body class = "container">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-0-circle" viewBox="0 0 16 16">
        <path d="M7.988 12.158c-1.851 0-2.941-1.57-2.941-3.99V7.84c0-2.408 1.101-3.996 2.965-3.996 1.857 0 2.935 1.57 2.935 3.996v.328c0 2.408-1.101 3.99-2.959 3.99M8 4.951c-1.008 0-1.629 1.09-1.629 2.895v.31c0 1.81.627 2.895 1.629 2.895s1.623-1.09 1.623-2.895v-.31c0-1.8-.621-2.895-1.623-2.895"/>
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8"/>
    </svg>

    <div class = "row">
        <div class = "col-md-4">
            <form>
                <div class="mb-3 mt-4">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <div class= "center">
                    <button type="submit"  class="btn btn-primary ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-0-circle" viewBox="0 0 16 16">
                        <path d="M7.988 12.158c-1.851 0-2.941-1.57-2.941-3.99V7.84c0-2.408 1.101-3.996 2.965-3.996 1.857 0 2.935 1.57 2.935 3.996v.328c0 2.408-1.101 3.99-2.959 3.99M8 4.951c-1.008 0-1.629 1.09-1.629 2.895v.31c0 1.81.627 2.895 1.629 2.895s1.623-1.09 1.623-2.895v-.31c0-1.8-.621-2.895-1.623-2.895"/>
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8"/>
                        </svg>  
                        Submit
                    </button>
                    <a href="#" class="link-underline-primary">Forget Password</a>
                </div>
            </form>
        </div>

        <div class = "col-md-8">
            <div class = "center mb-5 mt-4">
                <h1>
                    Pricing
                </h1>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero reiciendis ipsum facilis illum, molestias repellat a. Officiis, veritatis provident. Animi voluptas sed dolorum possimus at repudiandae nobis voluptate laboriosam id!
                </p>
            </div>

            <div>
                <div class="container overflow-hidden text-center mb-5">
                    <div class="row gx-5 gy-5">
                        <div class="col-4">
                            <div class="p-5 bg-info">Custom column padding</div>
                        </div>

                        <div class="col-4">
                            <div class="p-5 bg-info">Custom column padding</div>
                        </div>

                        <div class="col-4">
                            <div class="p-5 bg-info">Custom column padding</div>
                        </div>

                        <div class="col-4">
                            <div class="p-5 bg-info">Custom column padding</div>
                        </div>
                        
                        <div class="col-4">
                            <div class="p-5 bg-info">Custom column padding</div>
                        </div>

                        <div class="col-4">
                            <div class="p-5 bg-info">Custom column padding</div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div> 
                    <h1 class = "text-center">Compare Plans</h1>

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col"></th>
                            <th scope="col">Free</th>
                            <th scope="col">Pro</th>
                            <th scope="col">Enterprice</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                            <th scope="row">Public</th>
                            <td>√</td>
                            <td>√</td>
                            <td>√</td>
                            </tr>

                            <tr>
                            <th scope="row">Private</th>
                            <td>√</td>
                            <td>√</td>
                            <td></td>
                            </tr>

                            <tr>
                            <th scope="row">Permissions</th>
                            <td></td>
                            <td>√</td>
                            <td>√</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>