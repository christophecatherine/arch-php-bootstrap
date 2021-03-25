    <!-- Modal (Pop-up) HelloWorld -->
    <div class="modal fade" id="modalHelloWorld" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal HelloWorld</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">...</div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- / Modal -->

    <!-- Script pour ouvrir notre modal grace à jquery (JS) -->
    <script>
      setTimeout(function() {
        console.log("open modal auto");
        $("#modalHelloWorld").modal("show");
      }, 3000);

      setTimeout(function() {
        console.log("close modal auto");
        $("#modalHelloWorld").modal("hide");
      }, 5000);
    </script>