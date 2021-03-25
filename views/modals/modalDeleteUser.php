
<!-- Modal Delete -->
<div class="modal fade" id="modalDeleteUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content fetch-data">
     <!-- Content jquery -->
    </div>
  </div>
</div>
<!-- / Modal Delete -->


<!-- Script -->
<script>
    $(document).ready(function(event) {
        $('#modalDeleteUser').on('show.bs.modal', function(e) {
            var data = $(e.relatedTarget);
            var modal = $(this)
            var body = `
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class='row'>
                    <div class='col-md-12'>
                        <p>Êtes-vous sur de vouloir supprimer <u>${data.data('name')}</u> ?</p>
                    </div>
                    <div class='col-md-12 text-center'>
                        <form action="./controller/user/delete.php" method='post'>
                            <input type="hidden" name="id" value="${data.data('id')}" />
                            <button class='btn btn-success' type='submit'>confirmer</button>
                        </form>
                    </div>
                </div>
            </div>
            `
            modal.find('.fetch-data').html(body)
        });
    });
</script>
<!-- / Script -->