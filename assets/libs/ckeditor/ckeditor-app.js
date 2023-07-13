CKEDITOR.replace( 'ckeditor', {
  extraPlugins : 'image2,codesnippet,uploadimage',

  codeSnippet_theme: 'monokai_sublime',
  height: 300,
  enterMode: CKEDITOR.ENTER_BR,
  filebrowserImageUploadUrl : '<?=base_url();?>[Ck_upload PATH]/?type=image&path=work'
});
