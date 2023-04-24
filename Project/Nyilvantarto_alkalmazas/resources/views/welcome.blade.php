<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Kezdőlap</title>

    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <link href="{{('assets/css/app.css')}}" rel="stylesheet">
</head>
<body>
    
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>
  
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">Scrum Meeting Kezdőoldal</a></li>
         
        </ul>
  
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Keresés..." aria-label="Search">
        </form>

          <div class="text-end">
            <a href="login" class="btn btn-outline-light me-2">Bejelentkezés</a>
            <a href="register" class="btn btn-warning">Regisztráció</a>
          </div>

      </div>
    </div>
  </header style="background-image: url(data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw0NDQ0NDQ0HBwcHBw0HBwcHBw8IDQcNFREWFhURFRMYHSggGBolGxMVITEhJSk3Ojo6Fx8/ODMsNygtLisBCgoKBQUFDgUFDisZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIALEBHAMBIgACEQEDEQH/xAAYAAEBAQEBAAAAAAAAAAAAAAACAwEAB//EABgQAQEBAQEAAAAAAAAAAAAAAAABAhES/8QAFAEBAAAAAAAAAAAAAAAAAAAAAP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/APP4eQimQPJ5HJ5BTJ5DKmQPKmQypkDimQimQOQ5BhwCzDkZDgOkKR0hyAzjeN43gDwbFOMsBKwbFbAsBOwLFKGgSoaitToJVPStDQI0NKaDQI0NKaT0CdT0pQoJUFKFBsUynFMgplTKeVMgplTKeVMgplTKeVMgplTKeVMgpDyGVMgcOBDgHCgw4DZG8dCgDwadGgFDSlCgnQqlCglQqlToJ6T0poKCWk9KaT0Cek6ppPQJ6Tqmk6CegPQA2KZTimQUyplPJ5BXKmU8nkFcqZTypkFMqZTh5BWHlOKZBSHE4cBSHE4UoKRvQ63oNtZXdG0GUa20bQGp06GgCp06FBPSdOhoE9J6U0noE9J09BoE9J06FBPQHQBsPKcPIK5UylFMgrFMpZPILRTKWTyC2TzUsqQFYcTzTlBWU5UpTlBSUpU5SlBTruh1vQLrLR6y0G2ja60bQZaGq20LQZU9FaGqAUNUqnqgOk9HU9UAqejqegCp06noAo0qAOhxOHAVypEsnAWycSzVJQVzVJUc1SUFc1SVGVSUFZVJUZTlBWU5UpSlBWUpUpSlBTruh13QPruh1nQK0bWWjaDbQtdaNoMtC11o2gNoardULQG1PVLVTtBlT0WqnaA1PR1OgNAqAOycSlUgKZqkqUp5oKyqZqMqmaCsqmajKcoLSnKlKcoLSlKjKcoLSlKjKUoLSt6lNFNAp13Q67oH13Q6zoHaNo3Q2gVoWutG0HWha60LQdaFrrQ1QZaFrbU7QZqha20LQHVCttC0GULW6oA6HKnClBWU5U5SlBaUpUs05QWzTlRlOUFpTlRlOUFZTlRlOUFZSlRlKUFpW9Smmygp1vU+u6CnWdDrOgfWWh1l0BWjaNrLQbaFrLRtB1oWutG0GWha20LQZaGq20LQZaFbaGqDLQbRB0KJylKCmacqUpygrKealKUoLSlKlKUoLSnKjKUoLSlKlK2UFpSlRlbKC3W9S9N9Ap1vU+u6CnWdDrPQH1nQumXQHaN0No2gVo2jaNoNtG1lo2g60LXWhaDrRtdaNoMtC1toWg60euo2gyU5U4UoKSlKnKUoKSnKlKUoKylKlKUoLSlKjKcoKylKlK2UFZS6jKU0CvW9S9N9Ap13U+t6B9d0Os6B9Z0PTLoD6y0LWWgVo2jay0G2jay0LQbaNrLRtBtoWutG0HWja60bQdaHW2iDIUAoBylKnKUoKStlCVsoKylKlKUoKytlTlbKCspSpStlBWVvUpS9Ap1vUut6CnXdDrugfXdDrOgfXdDrPQH1nQ9M6BWjaNrLQbay1lo2g20bWWjaDbRtdaNoOtG11o0HVjqwHOc4CjRb0DlbKErZQUlbKErZQUlbKHW9BSVvU5W9BTrep9b0FOu6HXdBTruh13QPrOj13QLrOj13QLrOj1nQLo2s6PQK0bWWstBto2utG0G2ja60eg6scwHOc4HOc4HNc4Gtc4CjY5wNa5wNjY1wOjXOBrnOBrnOBzHOBzq5wMY5wMY5wMrGOBw1zgGsrnAxznA5znA//9k=)">

    <main class="container" >
    <div class="bg-light p-5 rounded">
       
       <h1>Üdvözöllek</h1>
       <p class="lead">Csatlakozz a scrum meetinghez.</p>

   </div>
    </main>

    <script src="{{('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      
  </body>
</html>