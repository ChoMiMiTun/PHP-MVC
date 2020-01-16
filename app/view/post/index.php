<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <?php if (session_has('success')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> <?php echo session_get('success'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php session_del('success');
            endif; ?>
        </div>
    </div>

    <div class="row mb-3 mt-3">
        <div class="col-md-8">
            <h3>All Posts</h3>
        </div>
        <div class="col-md-4 text-right">
            <a href="<?php echo url('post/create') ?>" class="btn btn-primary"><i class="fas fa-plus-circle mr-1"></i>Create</a>
        </div>
    </div>

    <div class="row">
        <?php foreach ($posts as $post) : ?>

            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <?php echo $post['title']; ?>
                    </div>
                    <div class="card-body">
                        <?php echo substr($post['content'], 0,150); ?>
                    </div>
                    <div class="card-footer text-right">
                        <a href="<?php echo url('/post/show/' . $post['id']); ?>" class="btn btn-primary">
                            <i class="fas fa-eye"></i> View
                        </a>
                        <a href="<?php echo url('/post/edit/' . $post['id']); ?>" class="btn btn-success">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="<?php echo url('/post/delete/' . $post['id']); ?>" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i> Delete
                        </a>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <?php
            if (isset($start) && isset($total))
                pagination($total, $count);
            ?>
        </div>
    </div>

</div>