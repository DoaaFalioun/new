<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Reservering!</title>
    <style>
         body {
            font-family: 'Raleway', sans-serif;
            font-weight: 400;
            /* background: linear-gradient(to bottom, #FFFFFF, #00EAFF, #fff); */
            letter-spacing: 1px;
            
            }

          .container {
            background: linear-gradient(to bottom, #FFFFFF, #00EAFF, #fff);
              margin: 100px;
              box-shadow: 25px 10px 15px rgba(0, 0, 0, 0.1);
              display: flex;
              grid-template-columns: 40% 100%;
          }

        
            .container-form {
                padding: 20px 0;
                margin: 0 auto;
                color: #000;
                }

          form {
              display: grid;
              grid-row-gap: 20px;
              }
              form p {
              font-weight: 600;
              }
              .form-field {
              display: flex;
              justify-content: space-between;
              }
              
              input,select {
              padding: 10px 15px;
              }

              .btn {
                  background-color: rgba(0, 0, 0, .95);
                  color: #fff;
                  padding: 10px 20px;
                  border: none;
                  font-size: 18px;
                  border-radius: 100px;
                  }
                  .btn1 {
                  background-color: rgba(0, 0, 0, .95);
                  color: #fff;
                  padding: 10px 20px;
                  border: none;
                  font-size: 18px;
                  border-radius: 100px;
                  }
                  
          
              
                li a:hover {
                background-color:#9B877F;
                }
              button[type=submit]:hover{
              }
        
    </style>
  </head>
  <body style="Backgroundcolor:#c9c0b9;">
    <img src="./mboutrecht.png" alt="MBO" style="width:10%;  display: block; margin-left: auto; margin-right: auto;">

              <div class="container mt-4" >
              <div class="row">
                  <div class="col-12 col-sm-6">
              <!-- hier begint het formulier van date and time -->
        <form acion="./reservation1.php" method="post">
              <h2 class="heading heading-yellow">Reservation Online</h2>


              <div class="form-field">
                  <p>Date</p>
                  <input name="date" type="date"  value="y-m-d" min="2021-10-01" max="2021-12-31">
              </div>
              <div class="form-field">
                  <p>Time</p>
                  <input name="time" type="time">
              </div>

              <div>
                <p>aantal personnen</p>
                <select class="form-select form-select-xs" aria-label=".form-select-xs example" type="select" name="select" >
                  
                <option value="1">1 person</option>
                  <option selected="" value="2">2 personnen</option>
                  <option value="3">3 personnen</option>
                  <option value="4">4 personnen</option>
                  <option value="5">5 personnen</option>
                  <option value="6">6 personnen</option>
                  <option value="7">7 personnen</option>
                  <option value="8">8 personnen</option>
                  <option value="9">9 personnen</option>
                  <option value="10">10 personnen</option>
                  <option value="11">11 personnen</option>
                  <option value="12">12 personnen</option>
                  <option value="13">13 personnen</option>
                  <option value="14">14 personnen</option>
                  <option value="15">15 personnen</option>
                  <option value="16">16 personnen</option>
                  <option value="17">17 personnen</option>
                  <option value="18">18 personnen</option>
                  
                  <option value="19">19 personnen</option>
                  <option value="20">20 personnen</option>
                </select>
              </div>

              <div>
                <p>select een tafel</p>
                <select class="form-select form-select-xs" aria-label=".form-select-xs example" type="select" name="select" >
                      <option>Select een tafel:</option>
                      <option value="1">1</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="32">32</option>
                      <option value="31">31</option>
                      <option value="21">21</option>
                      <option value="23">23</option>
                      <option value="p4">p4</option>
                </select>
              </div>
                
              <button class="btn" type="submit">Volgende</button>
             
              <!-- <button class="btn1" type="cancel">Cancel</button> -->
              <!-- hier eindigt het formulier --> 
          </form>
          </div>
          <!-- hier is het overzicht van de tafels -->
          <div class="col-12 col-sm-6">
      <img src="./1.png" alt="kersen" class="w-75 mx-auto d-block">
    </div>
        </div>
        </div>
      

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
  
</html>