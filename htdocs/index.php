<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RealTime Chat App</title>
    <script src="javascript/jquery-3.6.0.min.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Realtime Chat App</header>
      <form action="#">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" placeholder="First name">
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" placeholder="Last name">
          </div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" placeholder="Enter your email">
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password"  placeholder="Enter new password">
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image">
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Already signed up? <a href="#">Login now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
</body>


</html>