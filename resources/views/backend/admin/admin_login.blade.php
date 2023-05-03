<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <title>Admin Login Form</title>
   </head>
   <body>
      <!-- admin login form -->
      <div class="container">
         <div class="row">
            <div class="col-md-3">
               <div class="col-md-6"></div>
               <!-- validate error er message show er jonne -->
                  <!-- @if ($errors->any())
                         <div class="alert alert-danger">
                             <ul>
                                 @foreach ($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                 @endforeach
                             </ul>
                         </div>
                     @endif -->

                  @if(Session::has('error-msg'))
                  <p class="text-danger">{{ Session::get('error-msg')}}</p>
                  @endif

                  <form action="{{ url('admin-login') }}" class="mt-5" method="post">
                     @csrf
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email">
                     </div>
                     @error('email')
                     <p class="text-danger">{{ $message}}</p>
                     @enderror
                     <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password">
                     </div>
                     @error('password')
                     <p class="text-danger">{{ $message}}</p>
                     @enderror
                     <div class="form-group">
                        <input type="submit" class="btn btn-success mt-3"  value="Admin Login">
                     </div>
                  </form>
               </div>
            </div>
         </div>
    
         
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
   </body>
 </html>