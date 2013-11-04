<?php
    $slide = $data['slide'];
    $errors = $data['errors'];
include('menu.php');
?>
<div id="header"> <h3>Rediger slide</h3> </div>
<form class="form-inline" action="" method="POST">
  <div>
        <input class="span3" type="text" name="title" placeholder="Tittel" value="<?php echo (isset($_POST['title'])) ? $_POST['title'] : $slide->getTitle(); ?>" />
      <span class="error"><?php echo (isset($errors['title'])) ? $errors['title'] : ''; ?></span>
  </div>
    <div>
    <textarea id="text" class="span6" name="content" placeholder="Innhold" rows="20" cols="25"><?php echo (isset($_POST['content'])) ? $_POST['content'] : $slide->getContent(); ?></textarea>
        <span class="error"><?php echo (isset($errors['content'])) ? $errors['content'] : ''; ?></span>
        <script>
            var editor = CKEDITOR.replace('text');
            CKFinder.setupCKEditor(editor, '../plugins/ckfinder/');
        </script>
    </div>
    <div class="controls-row">
        <hr>
        <input name="submit" class="btn btn-primary" type="submit" value="Lagre" />

    </div>
</form>