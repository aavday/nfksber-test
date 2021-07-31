$(function () {
  $(".add-to-favorite").submit(function (e) {
    const btn = this.querySelector('button');
    const actionInput = this.querySelector('.action');
    e.preventDefault();
    const form = $(this);

    $.ajax({
        url: "/ajax/favorites.php",
        type: "post",
        data: form.serialize(),
        dataType: "json",
        success: function () {
          console.log(form.serialize());
          btn.classList.toggle('btn-primary');
          btn.classList.toggle('btn-danger');
          if (actionInput.value === 'remove') {
            actionInput.value = 'add';
            btn.innerText = 'Добавить в избранное';
          } else {
            actionInput.value = 'remove';
            btn.innerText = 'Удалить из избранного';
          }
        },
    });
  });
});