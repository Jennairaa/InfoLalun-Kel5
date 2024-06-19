<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN LOGIN | SIM </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Your custom CSS file -->
    <link href="{{ asset('css/WebSIM.css') }}" rel="stylesheet" type="text/css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
        body {
            width : 100%;
            height : 100%;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
        }

        .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100%;
        max-width: 1200px; 
        margin: 0 auto;
        }


        .main {
            display: flex;
            justify-content: space-between;
            width: 100%;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .column {
            flex: 1;
            padding: 20px;
            border-radius: 10px;
        }

        .white-column {
            background-color: #ffffff;
            color: #ffffff;
        }
      
        .white-column h1{
            margin-top: 10%; 
             margin-left: 12%;
            font-weight: 900;
            font-size: 34px;
            color: #0474BB;
            margin-bottom: 10%;
        }

        .form-column {
            justify-content: center; /* Menengahkan horizontal */
            align-items: center; 
            background-color: #0474BB;
           height : 100vh;
        }
        .form-column h1 {
             margin-top: 10%; 
             margin-left: 12%;
            font-weight: 900;
            font-size: 34px;
            color: white;
        }
        .form-column p {
            align-items: center;
            justify-content: center;
            font-weight: 10;
            font-size: 18px;
            color: white;
            text-align: center;
            margin-bottom : 20%;
        }
        .form {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
            color : white;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group button:hover {
        transform: scale(1.1); /* Mengubah ukuran tombol menjadi 110% dari ukuran aslinya saat kursor diarahkan */
        }
        .form-group a{
            color : white;
            text-decoration : none;
            font-weight : 400;
            font-size : 20px
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="main">
            <div class="column white-column">
               <h1>INFORMASI LALU LINTAS</h1>
               <img src="https://clipground.com/images/logo-polantas-png-5.png" alt="" style="width: 540px; ">
            </div>
            <div class="column form-column">
            <h1>HALO SAHABAT LALUN !!</h1>
            <p>silahkan masuk dengan email dan password yang telah kamu buat</p>
                <form class="form"  method="GET" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>