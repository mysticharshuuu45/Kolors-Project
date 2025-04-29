
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
  <img src="images/logo/kolors.png" alt="Kolors Logo" class="navbar-logo">
</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pricing.php">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="real-weddings.php">Inspiration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About us</a>
                </li>
            </ul>
            <div class="form-inline mr-2">
                <!-- <a class="mr-2" href="submit">
                    <i class="mdi mdi-star-outline" id="review" aria-hidden="true"></i> Write a review</a> -->
<!--                <a class="btn btn-sm my-2 my-sm-0" href="login.php" data-toggle="modal" data-target="#loginModal">-->
                <a class="btn btn-sm my-2 my-sm-0" href="admin/login.php"><i class="mdi mdi-star-outline" id="review" aria-hidden="true"></i>
                    Admin Login
                </a>
                <a class="btn btn-sm my-2 my-sm-0 mr-2 loginbtn" href="sign_up.php">Join Now</a>
            </div>
        </div>
    </div>
</nav>
<style>
.navbar-logo {
    height: 45px; /* Smaller size */
    width: auto; /* Maintain aspect ratio */
    object-fit: contain; /* Ensures good fit */
}

.navbar-brand {
    padding-top: 0; /* Remove extra space */
    padding-bottom: 0;
    margin-right: 1rem; /* Space after logo */
    display: flex;
    align-items: center;
}

.navbar {
    padding-top: 0.5rem; /* Reduce navbar padding */
    padding-bottom: 0.5rem;
}
</style>