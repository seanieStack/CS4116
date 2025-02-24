<!DOCTYPE html>
<html>
    <head>
        <title>CS4116</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    </head>
    <body>
        <?php include 'navbar.php'; ?>

        <div class="container-sm border border-5 mt-5 w-25 p-3">
          <h1 class="text-center m-5">Sign in</h1>
          <form>
            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" />
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" />
            </div>

            <div class="row mb-4">
              <div class="col d-flex justify-content-center">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" checked />
                  <label class="form-check-label"> Remember me </label>
                </div>
              </div>
              <div class="text-center">  
                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Sign in</button>
              </div>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>