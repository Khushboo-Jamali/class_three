<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
:root {
  --gradient: linear-gradient(to left top, #DD2476 10%, #FF512F 90%) !important;
}

body {
  background: #111 !important;
}

.card {
  background: #222;
  border: 1px solid #dd2476;
  color: rgba(250, 250, 250, 0.8);
  margin-bottom: 2rem;
}

.btn {
  border: 5px solid;
  border-image-slice: 1;
  background: var(--gradient) !important;
  -webkit-background-clip: text !important;
  -webkit-text-fill-color: transparent !important;
  border-image-source:  var(--gradient) !important; 
  text-decoration: none;
  transition: all .4s ease;
}

.btn:hover, .btn:focus {
      background: var(--gradient) !important;
  -webkit-background-clip: none !important;
  -webkit-text-fill-color: #fff !important;
  border: 5px solid #fff !important; 
  box-shadow: #222 1px 0 10px;
  text-decoration: underline;
}
</style>
<body>
    @include('pages.header');

    <div class="container mx-auto mt-4">
        <div class="row">
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
        <img src="https://cdn.pixabay.com/photo/2022/05/04/11/49/dried-flowers-7173793_640.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <a href="#" class="btn mr-2"><i class="fas fa-link"></i> Visit Site</a>
          <a href="#" class="btn "><i class="fab fa-github"></i> Github</a>
        </div>
        </div>
          </div>    
             <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="https://cdn.pixabay.com/photo/2022/05/04/11/49/dried-flowers-7173793_640.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn  mr-2"><i class="fas fa-link"></i> Visit Site</a>
          <a href="#" class="btn"><i class="fab fa-github"></i> Github</a>
        </div>
        </div>
          </div>    
                <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="https://cdn.pixabay.com/photo/2022/05/04/11/49/dried-flowers-7173793_640.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn mr-2"><i class="fas fa-link"></i> Visit Site</a>
          <a href="#" class="btn "><i class="fab fa-github"></i> Github</a>
        </div>
        </div>
        </div>
          
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
        <img src="https://cdn.pixabay.com/photo/2022/05/04/11/49/dried-flowers-7173793_640.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <a href="#" class="btn mr-2"><i class="fas fa-link"></i> Visit Site</a>
          <a href="#" class="btn"><i class="fab fa-github"></i> Github</a>
        </div>
        </div>
          </div>    
             <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="https://cdn.pixabay.com/photo/2022/05/04/11/49/dried-flowers-7173793_640.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn mr-2"><i class="fas fa-link"></i> Visit Site</a>
          <a href="#" class="btn"><i class="fab fa-github"></i> Github</a>
        </div>
        </div>
          </div>    
               
        
                <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="https://cdn.pixabay.com/photo/2022/05/04/11/49/dried-flowers-7173793_640.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn mr-2"><i class="fas fa-link"></i> Visit Site</a>
          <a href="#" class="btn"><i class="fab fa-github"></i> Github</a>
        </div>
        </div>
        </div>
      </div>
        </div>
@include('pages.footer');

</body>
</html>