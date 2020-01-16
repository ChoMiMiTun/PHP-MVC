<div class="row">
    <div class="container">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <?php echo $post['title'] ?>
                </div>
                <div class="card-body">
                    <?php echo $post['content'] ?>
                </div>
                <div class="card-footer">
                    <div class="row">
                    <div class="col-md-8">
                    Post on <?php echo date('d-m-Y', strtotime($post['date'])); ?>
                    </div>
                    <div class="col-md-4">
                        <a href="<?php echo url('post') ?>" class="btn btn-secondary float-right">Back</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>