var jq = document.createElement('script');
jq.src = "https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js";
document.getElementsByTagName('head')[0].appendChild(jq);
jQuery.noConflict();

function getLists(id = 1) {
  jQuery.ajax({
    url: "http://mailing.ecommercebrasil.com.br/cadastro/index?Cadastro_page=" + id + "&ajax=cadastro-grid",
    async: false,
    success: function(response) {
      var a = jQuery(response).find('td a');

      a.each(function() {
        console.log('link', jQuery(this).attr('href'));
        getFields(jQuery(this).attr('href'));
      });
    }
  });
}

function getFields(id = false) {
  if (id) {
    jQuery.ajax({
      url: "http://mailing.ecommercebrasil.com.br" + id,
      async: false,
      success: function(response) {
        var tds = jQuery(response).find('td');

        data = {
          nome: tds.eq(1).find('span').text(),
          email: tds.eq(2).find('span').text(),
          sexo: tds.eq(3).find('span').text(),
          telefone: tds.eq(4).find('span').text(),
          cidade: tds.eq(6).find('span').text(),
          estado: tds.eq(7).find('span').text(),
          empresa: tds.eq(9).find('span').text(),
          cargo: tds.eq(10).find('span').text(),
        };
        sendToDB(data);
      }
    });
  }
}

function sendToDB(data) {
  console.log(data);

  var url = "http://awesome.dev/mailing/mailings/add.json";

  jQuery.ajax({
    type: 'POST',
    url: url,
    data: data,
    success: function(data, textStatus, jqXHR) {
      console.log(data, textStatus, jqXHR);
    },
    async:false
  });
}

// 881 pages
for (var i = 21; i < 40; i++) {
    getLists(i);
}
alert('COMPLETE');
