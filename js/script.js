$(document).ready(function () {
  $(".category-item").click(function () {
    var catProducto = $(this).attr("category");
    console.log(catProducto);

    $(".product-item").hide();

    $(".product-item[category=" + catProducto + "]").show();
  });
  $(".category-item[category='todo']").click(function () {
    $(".product-item").show();
  });
});
 