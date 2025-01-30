<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableau de bord</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f8f9fa;
    }

    .navbar {
      background-color: #ffffff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .center-content {
    display: flex; 
    flex-direction: column; 
    justify-content: center;
    align-items: center; 
    text-align: center; 
    height: 50vh; 
  }
  
  .center-content img {
    max-width: 50%; 
    height: auto; 
    width: 50%;
  }
  
 </style>
</head>
<body>
  
    
    <div class="w-100">
      
      <nav class="navbar navbar-expand-lg px-4">
        <a class="navbar-brand" href="#">Salma's cakes</a>

    <div class="ms-auto">
      
      <div class="dropdown">
        <button
          class="btn btn-primary dropdown-toggle"
          type="button"
          id="profileDropdown"
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
          Profile
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
          <li>
            <hr class="dropdown-divider" />
          </li>
          <li><button class="dropdown-item" onclick="logout()">Déconnecter</button></li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<script>
  
  function logout() {
    window.location.href = "login.php";
    alert("Vous êtes déconnecté.");
    
  }
</script>

      </nav>


      <div class="center-content">
        <img src="cake.jpg" alt="">
      <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam laborum, veritatis eveniet iusto voluptate adipisci maiores iste! Ad reiciendis quod recusandae dolor, impedit aliquid culpa. Iste expedita facilis quod repudiandae?
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur repudiandae nostrum distinctio magnam commodi alias atque aliquid necessitatibus accusantium? Ex quidem maxime ducimus magni reiciendis et, sunt dolor assumenda fuga!
    </P>
      </div>
</body>
</html>