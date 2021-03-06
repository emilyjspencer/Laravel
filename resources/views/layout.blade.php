<!DOCTYPE html>
  <html>
      <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">

          <title>Welcome</title>

          <link href="https://fonts.google.apis.com/css?family=Nunito:200,600 rel="stylesheet">

          <style>
              html, body {
                  background-color: pink;
                  color: black;
                  font-family: 'Nunito', sans-serif;
                  font-weight: 200;
                  height: 100vh;
                  margin: 0;
              }

              .flex-center {
                  align-items: center;
                  display: flex;
                  justify-conent: center;
              }

              position-ref {
                  position: relative;
              }

              .top-right {
                  position: absolute;
                  right: 10px;
                  top: 18px;
              }

              .content {
                  text-align: center;
              }

              .title {
                  font-size: 84px;
              }

              .links > a {
                  color: black;
                  font-size: 0 25px;
                  font-weight: 600;
                  padding: 0 25px;
                  letter-spacing: .1rem;
                  text-decoration: none;
                  text-transform: uppercase;
              }

            </style>

           @yield ('content')
</html>