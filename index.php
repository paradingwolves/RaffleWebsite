<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="css/bootstrap(5).css">
        <link rel="stylesheet" href="css/styles.css">
        <title>Booze Draw Raffle</title>
        <link rel="icon" href="imgs/mallard1.jpg" type="image/icon type">
    </head>
    <!-- Audio Files -->
    <audio id="duck" style="display: none;" controls>
        <source src="sounds/duck-quacking-37392.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio> 
    <audio id="bat" style="display: none;" controls>
        <source src="sounds/Bat Crack.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Mallards Booze Draw</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link hoursLink" href="index.php#rules">Rules</a>
                    </li>
                    <li>
                        <a class="nav-link hoursLink" href="index.php#drawForm">Enter Draw</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#aboutHeader">About</a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
        </header>
        <main>
            <div class="container-md">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <h2 class="my-5">Mallards Booze Draw</h2>
                        <p class="mt-3">Welcome to the River Canard Mallards Booze Draw! This annual event is a fan favourite and a crucial fundraiser for our beloved baseball club.</p>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
            

            <!-- RULES -->

            <div class="my-5 container-md">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <h2>Rules and Regulations</h2>
                        <ul id="rules">
                            <li class="rulesList my-2">All participants must be at least 19 years of age and be able to provide valid government-issued identification upon request.</li>
                            <li class="rulesList my-2">Participants are responsible for their own behavior and any consequences that may arise from excessive alcohol consumption.</li>
                            <li class="rulesList my-2">The organizers of the Booze Draw reserve the right to refuse service to anyone for any reason.</li>
                            <li class="rulesList my-2">The organizers of the Booze Draw will not be held responsible for any accidents or injuries that occur as a result of alcohol consumption.</li>
                            <li class="rulesList my-2">The Booze Draw is a 19+ event and all participants are expected to act accordingly.</li>
                        </ul>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
            <!-- Entry Form -->
            <div class="container-md">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 my-3">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="drawForm" class="entryForm needs-validation" novalidate>
                            <legend>Booze Draw Entry Form</legend>
                            <fieldset>
                                <label class="form-label my-1" for="fullName">Full Name: </label>
                                <input class="form-control" type="text" name="fullName" placeholder="John Doe" id="fullName" required/> <br>
                                <label class="form-label my-1" for="birthdate">Date of Birth:</label>
                                <input class="form-control" type="date" name="birthdate" id="birthdate" required/><small id="DOBwarning" class="form-text text-danger">MUST BE 19+ TO ENTER</small><br>
                                <br>
                                <label class="form-label my-1" for="emailAddress">Email Address: </label>
                                <input type="email" name="emailAddress" id="emailAddress" class="form-control" placeholder="johndoe@random.com" required><small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> <br>
                                
                                <label class="form-label my-1" for="phoneNumber">Phone Number: </label>
                                <input class="form-control" type="tel" name="phoneNumber" placeholder="519-867-5309" id="phoneNumber" required> <br>
                                <label for="form-label ticketsPurchased">Tickets Purchased: </label>
                                <input class="form-control" type="number" name="ticketsPurchased" id="ticketsPurchased" placeholder="Tickets Purchased" required>
                            </fieldset>
                            <fieldset>
                                <input type="submit" value="Submit" class="my-3 btn btn-primary"> 
                            </fieldset>
                            <div style="margin-top:3%;" class="alert alert-dismissible alert-danger">
                                <button type="button" class="btn-close"></button>
                                <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>

            <!-- About The Draw -->
            <div class="mt-5 container-md">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <h3 id='aboutHeader'>About the Draw</h3>
                        <p class="mt-3">All proceeds from the Booze Draw go directly towards supporting the River Canard Mallards and helping to fund our team's operations and activities. This includes everything from training facilities to travel expenses and equipment.</p>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>

            <!-- Modal -->

            <div class="modal mt-3">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Congratulations!</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p id="modalText">Your Booze Draw Tickets Have Successfully Been Submitted!! A confirmation email will be sent to the provided email.</p>
                            </div>
                            <div class="col-md-6"><img id="mallardLogo" src="imgs/mallard1.jpg" alt="Mallards Logo" /></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

        </main>

        <div class="row">   
            <footer class="col-md-12  bg-primary">
                <div class="row">
                    <div class="col-lg-5 mt-4"></div>
                    <div class="col-lg-1 mt-4"><a href="index.php" class="text-white">Home</a></div>
                    <div class="col-lg-1 mt-4"><a href="index.php#rules" class="text-white">Rules</a></div>
                    <div class="col-lg-1 mt-4"><a href="index.php#drawForm" class="text-white">Enter Draw</a></div>
                    <div class="col-lg-1 mt-4"><a href="index.php#aboutHeader" class="text-white">About</a></div>
                    <div class="col-lg-4 mt-4"></div>
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4"><h4 class="text-white mb-4">Mallards Booze Draw</h4></div>
                    <div class="col-lg-7"></div>
                </div>
            </footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/modal.js"></script>
        <script type="text/javascript" src="js/validation.js"></script>
    </body>
</html>


<?php
// Connect to the database
require_once('databaseStuff/connectvars.php');
require_once('databaseStuff/connection.php');

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // pause script
    sleep(25);
    // Get the form data
    $name = trim(($_POST['fullName']));
    $phoneNumber = trim(($_POST['phoneNumber']));
    $tickets = trim(($_POST['ticketsPurchased']));
    $email = trim(($_POST['emailAddress']));

    // Construct the query
    $query = "INSERT INTO Entries (name, phoneNumber, tickets, email) VALUES ('$name', '$phoneNumber', '$tickets', '$email')";

    // Execute the query
    $conn->query($query);
}

?>