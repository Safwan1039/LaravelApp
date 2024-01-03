<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./signup.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap"
      rel="stylesheet"
    />
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  background-image: url("public\img\bluish_background1.jpg");
  width: 100%;
  height: 100%;
  background-repeat: no-repeat;
  background-size: cover;
  overflow-x: hidden;
}
.mx-center {
  position: relative;
  top: 5px;
  /* left: 559px; */
}
.container {
  border-radius: 5px;
  background-color: white;
  box-shadow: 3px 8px 16px rgba(0, 0, 0, 0.7);
  padding: 10px;
  position: relative;
  top: 30px;
  height: 561px;
}

.welcome {
  font-family: "Roboto";
  color: #000000;
  text-align: center;
  font-weight: bold;
  position: relative;
  top: 23px;
  right: 85px;
}
.btn-style {
  position: relative;
  top: 21px;
  background-color: #2037b6;
  color: white;
  border-radius: 2px;
  display: inline-block;
  font-size: 1em;
  line-height: 1.5;
  margin: 0.5rem;
  text-decoration: none;
  cursor: pointer;
  width: 100px;
  box-shadow: 1px 2px 2px gray;
  padding-top: 6px;
  padding-bottom: 6px;
  border: none;
  border-radius: 33px;
  padding-right: 8px;
  padding-left: 4px;
  width: 144px;
  right: 15px;
  transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275),
    background-color 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.btn-style:hover {
  background-color: #091974;
  transform: scale(1.1);
}
.register {
  position: relative;
  /* left: 555px; */
  top: 10px;
  color: gray;
  font-family: "Roboto";
}
.confirm {
  position: relative;
  left: 289px;
  top: 11px;
}
.btn {
  float: right;
  position: relative;
  top: -24px;
  right: 46px;
}
.column {
  float: left;
  width: 50%;
}
.row1::after {
  content: "";
  display: table;
  clear: both;
}
.container .mx-center input {
  width: 358px;
}
.btn-outline-info {
  position: relative;
  right: -1px;
}
.signup {
  width: 400px;
  position: relative;
  top: 50px;
}

    </style>
  </head>
  <body>
    <div class="container">
      <div class="row1">
        <div class="column">
          <img src="{{URL::asset('/image/signup.png')}}" alt="" style = "width: 480px;
    position: relative;
    top: 50px;
}"/>
        </div>
        <div class="column">
          <h3 class="welcome">Welcome to LaravelApp !</h3>
          <p class="register">Register Your Account</p>
          <form action="{{route ('users.insert')}}" method = "POST">
            @csrf
          <div class="mx-center">
            <label for="exampleFormControlInput1" class="form-label"
              >Name</label
            >
            <input
              type="text"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="Enter Your Name"
              name="Name"
              required
            />
          </div>
          <br />
          <div class="mx-center">
            <label for="exampleFormControlInput1" class="form-label"
              >Email address</label
            >
            <input
              type="email"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="Enter your Email Address"
              name="Email"
              required
            />
          </div>
          <br />
          <div class="mx-center">
            <label for="exampleFormControlInput1" class="form-label"
              >Password</label
            >
            <input
              type="password"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="Enter Your Password"
              name="Password"
              required
            />
          </div>
          <br />
          <div class="mx-center">
            <label for="exampleFormControlInput1" class="form-label"
              >Username</label
            >
            <input
              type="text"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="Enter your Username"
              name="Username"
              required
            />
          </div>
          <button class="btn-style mx-center">Sign Up</button>
          </form>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
