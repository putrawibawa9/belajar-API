$.getJSON("data/pizza.json", function (data) {
  let menu = data.menu;
  $.each(menu, function (i, data) {
    $("#daftar-menu").append(
      '<div class="col-md-4"><div class="card" style="width: 18rem;"><img src="img/' +
        data.gambar +
        '" class="card-img-top" alt="..."><div class="card-body"><h2 class="card-title"></h2><h5 class="card-title">' +
        data.nama +
        '</h5><p class="card-text">' +
        data.deskripsi +
        "</p><h5>Rp." +
        data.harga +
        '</h5><a href="#" class="btn btn-primary">Gaskan</a></div></div></div>'
    );
  });
});

$(".nav-link").on("click", function () {
    $(".nav-link").removeClass("active");
    $(this).addClass("active");
  
    let kategori = $(this).html();
    $("h1").html(kategori);
  
    $.getJSON("data/pizza.json", function (data) {
      let menu = data.menu;
      let content = "";
  
      $.each(menu, function (i, data) {
        if (data.kategori == kategori.toLowerCase()) {
          content +=
            '<div class="col-md-4"><div class="card" style="width: 18rem;"><img src="img/' +
            data.gambar +
            '" class="card-img-top" alt="..."><div class="card-body"><h2 class="card-title"></h2><h5 class="card-title">' +
            data.nama +
            '</h5><p class="card-text">' +
            data.deskripsi +
            "</p><h5>Rp." +
            data.harga +
            '</h5><a href="#" class="btn btn-primary">Gaskan</a></div></div></div>';
        }
      });
  
      $("#daftar-menu").html(content);
  
      // Further code for processing 'menu' and updating the content
    }); // Closing parenthesis for $.getJSON
  }); // Closing parenthesis for .on("click")
  
