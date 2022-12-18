<?php $this->view("header", $data); ?>


  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0 bg-light">
            <div class="col-md-4 gradient-custom text-center text-secondary"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="<?= ASSETS . THEME ?>img/avatar.png"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
              <h5><?= $_SESSION['name'] ?></h5>
              <p>Web Designer</p>
              <i class="bi bi-pencil-square"></i>
                        </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted"><?= $_SESSION['email'] ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Member since</h6>
                    <p class="text-muted"><?= $_SESSION['date'] ?></p>
                  </div>
                </div>
                <h6>Purchase</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Last purchase</h6>
                    <p class="text-muted">Lorem ipsum</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Last comment</h6>
                    <p class="text-muted">Dolor sit amet</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $this->view("footer", $data); ?>