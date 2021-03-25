<!-- Modal Edit -->
<div class="modal fade" id="modalEditArticle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content fetch-data">
     <!-- Content jquery -->
    </div>
  </div>
</div>
<!-- / Modal Edit -->

<!-- Script -->
<script>
    $(document).ready(function(event) {
        $('#modalEditArticle').on('show.bs.modal', function(e) {
            var data = $(e.relatedTarget);
            var modal = $(this)
            console.log(data)
            var body = `
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Êtes-vous sur de vouloir éditer ${data.data('title')}-id=${data.data('id')} ?</p>
                    <form action="./controller/article/update.php?id=${data.data('id')}" method='post'>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label for="recipient-name" class="col-form-label">title:</label>
                            <input type="text" name='title' value='${data.data('title')} ' class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="recipient-name" class="col-form-label">subtitle (user@domain.ex):</label>
                            <input type="text" name='subtitle' value='${data.data('subtitle')} ' class="form-control" id="recipient-name">
                        </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="recipient-name" class="col-form-label">Description:</label>
                            <textarea type="text" name='description' class="form-control">
                                ${data.data('description')}
                            </textarea>
                        </div>
                        <div>
                            <button class='btn btn-primary' type='submit'>Envoyer</button>
                        </div>
                    </form>
                </div>
            `
            modal.find('.fetch-data').html(body)
        });
    });
</script>
<!-- / Script -->
