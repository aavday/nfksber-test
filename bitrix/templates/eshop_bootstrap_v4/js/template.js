$(function () {
  $(".add-to-favorite").submit(function (e) {
    const btn = this.querySelector('button');
    const actionInput = this.querySelector('#action');
    e.preventDefault();

    $.ajax({
        url: "/ajax/favorites.php",
        type: "post",
        data: $(".add-to-favorite").serialize(),
        dataType: "json",
        success: function () {
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