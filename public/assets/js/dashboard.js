ClassicEditor.create(document.querySelector("textarea"))
  .then((editor) => {
    console.log(editor);
  })
  .catch((error) => {
    console.error(error);
  });
