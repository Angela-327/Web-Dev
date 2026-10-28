<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="container">
    
    <div class="row mb-4">
        <div class="col-md-4 mb-5">
            <div class="text-center mb-3 mt-5">
                <img src="{{ asset('images/warning-icon.jpg') }}" class="rounded-circle" alt="profile" height="100">
            </div>

            <div class=text-center mb-5>
                <h1 mb-4> John Smith</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum in doloribus at autem architecto! Numquam assumenda a ex quidem mollitia, sit repudiandae cum iste sed laudantium corrupti. Error, consequuntur doloremque!</p>
            </div>

            <div class = "row g-3 mt-3">
                <div class="col-md-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                    </svg>
                    Call
                </div>

                <div class="col-md-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                    </svg>
                    Email
                </div>

                <div class="col-md-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                        <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                    </svg>
                    Follow
                </div>
            </div>
        </div>

        <div class="col-md-4 ">
            <div class="text-center mb-3 mt-5">
                <img src="{{asset('images/warning-icon.jpg')}}" class="rounded-circle" alt="profile" height="100">
            </div>

            <div class=text-center>
                <h1> John Smith</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum in doloribus at autem architecto! Numquam assumenda a ex quidem mollitia, sit repudiandae cum iste sed laudantium corrupti. Error, consequuntur doloremque!</p>
            </div>
        </div>

        
        <div class="col-md-4">
            <div class="text-center mb-3 mt-5">
                <img src="{{asset('images/warning-icon.jpg')}}" class="rounded-circle" alt="profile" height="100">
            </div>

            <div class=text-center>
                <h1> John Smith</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum in doloribus at autem architecto! Numquam assumenda a ex quidem mollitia, sit repudiandae cum iste sed laudantium corrupti. Error, consequuntur doloremque!</p>
            </div>
        </div>


    </div>
</body>
</html>