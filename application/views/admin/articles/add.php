            <div class="pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Add New Articles</h1>
            </div>
            <div class="col">
                <?php echo validation_errors('<p class="alert alert-dismissable alert-danger">'); ?>
                <form method="post" action="http://kewlcms.test/index.php/admin/articles/add">
                  <div class="d-flex justify-content-between align-items-center bg-light p-2 mb-2">
                    <p style="margin-bottom: 0px !important;"><a href="/index.php/admin/dashboard">Dashboard</a> / <a href="index">Articles</a> / Add Article</span></p>
                    <div class="btns">
                        <input type="submit" name="submit" class="btn btn-outline-success" value="Save">
                    </div>
                  </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Article Title</strong></label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Arcitle Title" value="<?php echo set_Value('title'); ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Article Description</strong></label>
                        <textarea class="form-control" name="body" id="" cols="30" rows="4" placeholder="Enter Arcitle Description"><?php echo set_Value('title'); ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Category</strong></label>
                        <select class="form-select" name="category" aria-label="Default select example">
                            <option selected>Select </option>
                            <?php foreach ($categories as $categorie): ?>
                            <option value="<?php echo $categorie->id; ?>">
                                <?php echo $categorie->name; ?>
                            </option>
                            <?php endforeach;?>
                        </select>
                        <small>Choose who will be able to access this page</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Access</strong></label>
                        <select class="form-select" name="access" aria-label="Default select example">
                            <option selected>EveryOne</option>
                            <?php foreach ($groups as $group): ?>
                            <option value="<?php echo $group->id; ?>">
                                <?php echo $group->name; ?>
                            </option>
                            <?php endforeach;?>
                        </select>
                        <small>Choose who will be able to access this page</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Author</strong></label>
                          <select class="form-select" name="user" aria-label="Default select example">
                            <option selected>Select Author</option>
                            <?php foreach ($users as $user): ?>
                            <option value="<?php echo $user->id; ?>">
                                <?php echo $user->username; ?>
                            </option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Order</strong></label>
                        <input type="number" class="form-control" name="order" value="0" min="0">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Published</strong></label><br>
                        <label for="is_published" class="radio-inline form-check-label">
                            <input class="form-check-input" type="radio" name="is_published" value="1" checked>Yes
                        </label>
                        <label for="" class="radio-inline">
                            <input type="radio" name="is_published" value="0">No
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Add To Menu</strong></label><br>
                        <label for="is_menu" class="radio-inline form-check-label">
                            <input class="form-check-input" type="radio" name="is_menu" value="1">Yes
                        </label>
                        <label for="is_menu" class="radio-inline">
                            <input type="radio" name="is_menu" value="0" checked>No
                        </label>
                    </div>
                    <!-- <button type="submit" name="add_article" class="btn btn-primary">Add Article</button> -->
                </form>
            </div>
