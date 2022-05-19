<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajout Etudaint</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form role="form">
          <div class="modal-body d-flex gap-3">
            <input class="form-control w-50" type="text" placeholder="Usermane">
            <select class="form-select w-25">
              <option selected>Genre</option>
              <option>Male</option>
              <option>Female</option>
            </select>
            <input class="form-control w-25" type="date" placeholder="Date de naissance">
          </div>
          <div class="modal-body">
            <input class="form-control form-control-lg" type="email" placeholder="Email">
          </div>
          <div class="modal-body">
            <select class="form-select">
              <option selected>Choose Your Class</option>
              <option>Class 1</option>
              <option>Class 2</option>
              <option>Class 3</option>
            </select>
          </div>
          <div class="modal-body d-flex gap-3">
            <input class="form-control form-control-lg" type="text" placeholder="Parents">
          </div>
          <div class="modal-body">
            <textarea class="form-control form-control-lg">Adresse</textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>