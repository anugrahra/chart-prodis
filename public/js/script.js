// when document ready, show the graph
$(document).ready(function() {
  showGraph();
});

function showGraph() {
  {
    $.post("http://localhost/chart-prodis-v02/data",
    function(data) {
  
      let bulan = [];
      let produksi = [];
      let distribusi = [];
      let pemair = [];
      let nrw = [];
      let pac = [];
      let kaporit = [];
      let dosisPac = [];
      let dosisKaporit = [];
      let kebocoran = [];
    
      for (let i in data) {
        bulan.push(data[i].bulan);
        produksi.push(data[i].jumlah_produksi);
        distribusi.push(data[i].jumlah_distribusi);
        pemair.push(data[i].pemair);
        nrw.push(data[i].nrw);
        pac.push(data[i].pac);
        kaporit.push(data[i].kaporit);
        dosisPac.push(data[i].dosis_pac);
        dosisKaporit.push(data[i].dosis_kaporit);
        kebocoran.push(data[i].kebocoran);
      }
    
      let chartdata = {
        labels: bulan,
        datasets: [{
          label: 'Produksi (m3)',
          backgroundColor: '#FF7F00',
          borderColor: '#FF7F00',
          hoverBackgroundColor: '#CCCCCC',
          hoverBorderColor: '#666666',
          fill: false,
          data: produksi
        }, {
          label: 'Distribusi (m3)',
          backgroundColor: '#0000FF',
          borderColor: '#0000FF',
          hoverBackgroundColor: '#CCCCCC',
          hoverBorderColor: '#666666',
          fill: false,
          data: distribusi
        }, {
          label: 'Pemair (m3)',
          backgroundColor: '#00FF00',
          borderColor: '#00FF00',
          hoverBackgroundColor: '#CCCCCC',
          hoverBorderColor: '#666666',
          fill: false,
          data: pemair
        }, {
          label: 'Kebocoran (m3)',
          backgroundColor: '#000000',
          borderColor: '#000000',
          hoverBackgroundColor: '#CCCCCC',
          hoverBorderColor: '#666666',
          fill: false,
          data: nrw
        }]
      };
    
      let chartdataKimia = {
        labels: bulan,
        datasets: [{
          label: 'PAC (Kg)',
          backgroundColor: '#eed202',
          borderColor: '#FF7F00',
          hoverBackgroundColor: '#CCCCCC',
          hoverBorderColor: '#666666',
          fill: false,
          data: pac
        }, {
          label: 'Kaporit (Kg)',
          backgroundColor: '#8a8a8a',
          borderColor: '#0000FF',
          hoverBackgroundColor: '#CCCCCC',
          hoverBorderColor: '#666666',
          fill: false,
          data: kaporit
        }]
      };
    
      let chartdataDosis = {
        labels: bulan,
        datasets: [{
          label: 'Koagulan / PAC (mg/l)',
          backgroundColor: '#eed202',
          borderColor: '#FF7F00',
          hoverBackgroundColor: '#CCCCCC',
          hoverBorderColor: '#666666',
          fill: false,
          data: dosisPac
        }, {
          label: 'Disinfektan / Kaporit (mg/l)',
          backgroundColor: '#8a8a8a',
          borderColor: '#0000FF',
          hoverBackgroundColor: '#CCCCCC',
          hoverBorderColor: '#666666',
          fill: false,
          data: dosisKaporit
        }]
      };
    
      let chartdataBocor = {
        labels: bulan,
        datasets: [{
          label: 'Kebocoran (%)',
          backgroundColor: '#000000',
          borderColor: '#FF7F00',
          hoverBackgroundColor: '#CCCCCC',
          hoverBorderColor: '#666666',
          fill: false,
          data: kebocoran
        }]
      };
    
      let graphTarget = $("#graphCanvas");
      let lineGraph = new Chart(graphTarget, {
        type: 'bar',
        data: chartdata,
      });
    
      let graphTargetKimia = $("#graphCanvasKimia");
      let lineGraphKimia = new Chart(graphTargetKimia, {
        type: 'bar',
        data: chartdataKimia
      });
    
      let graphTargetDosis = $("#graphCanvasDosis");
      let lineGraphDosis = new Chart(graphTargetDosis, {
        type: 'bar',
        data: chartdataDosis
      });
    
      let graphTargetBocor = $("#graphCanvasBocor");
      let lineGraphTargetBocor = new Chart(graphTargetBocor, {
        type: 'bar',
        data: chartdataBocor,
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });
    });
  }
}

// graph by year
$('#select-tahun').on('change', function() {

  const tahun = $('#select-tahun').val();

  $.ajax({
    // ambil data dari url ini
    url: 'http://localhost/chart-prodis-v02/data/getdata',
    // yang sesuai dengan tahun
    data: {tahun : tahun},
    // kirimkan dengan method post
    method: 'post',
    // dengan tipe data json
    dataType: 'json',
    // ketika pengiriman sukses, jalankan fungsi berikut
    success: function (data) {

      $('#heading-tahun').html(tahun);

      let bulan = [];
      let produksi = [];
      let distribusi = [];
      let pemair = [];
      let nrw = [];
      let pac = [];
      let kaporit = [];
      let dosisPac = [];
      let dosisKaporit = [];
      let kebocoran = [];
    
      for (let i in data) {
        bulan.push(data[i].bulan);
        produksi.push(data[i].jumlah_produksi);
        distribusi.push(data[i].jumlah_distribusi);
        pemair.push(data[i].pemair);
        nrw.push(data[i].nrw);
        pac.push(data[i].pac);
        kaporit.push(data[i].kaporit);
        dosisPac.push(data[i].dosis_pac);
        dosisKaporit.push(data[i].dosis_kaporit);
        kebocoran.push(data[i].kebocoran);
      }
    
      let chartdata = {
        labels: bulan,
        datasets: [{
          label: 'Produksi (m3)',
          backgroundColor: '#FF7F00',
          borderColor: '#FF7F00',
          hoverBackgroundColor: '#CCCCCC',
          hoverBorderColor: '#666666',
          fill: false,
          data: produksi
        }, {
          label: 'Distribusi (m3)',
          backgroundColor: '#0000FF',
          borderColor: '#0000FF',
          hoverBackgroundColor: '#CCCCCC',
          hoverBorderColor: '#666666',
          fill: false,
          data: distribusi
        }, {
          label: 'Pemair (m3)',
          backgroundColor: '#00FF00',
          borderColor: '#00FF00',
          hoverBackgroundColor: '#CCCCCC',
          hoverBorderColor: '#666666',
          fill: false,
          data: pemair
        }, {
          label: 'Kebocoran (m3)',
          backgroundColor: '#000000',
          borderColor: '#000000',
          hoverBackgroundColor: '#CCCCCC',
          hoverBorderColor: '#666666',
          fill: false,
          data: nrw
        }]
      };
    
      let chartdataKimia = {
        labels: bulan,
        datasets: [{
          label: 'PAC (Kg)',
          backgroundColor: '#eed202',
          borderColor: '#FF7F00',
          hoverBackgroundColor: '#CCCCCC',
          hoverBorderColor: '#666666',
          fill: false,
          data: pac
        }, {
          label: 'Kaporit (Kg)',
          backgroundColor: '#8a8a8a',
          borderColor: '#0000FF',
          hoverBackgroundColor: '#CCCCCC',
          hoverBorderColor: '#666666',
          fill: false,
          data: kaporit
        }]
      };
    
      let chartdataDosis = {
        labels: bulan,
        datasets: [{
          label: 'Koagulan / PAC (mg/l)',
          backgroundColor: '#eed202',
          borderColor: '#FF7F00',
          hoverBackgroundColor: '#CCCCCC',
          hoverBorderColor: '#666666',
          fill: false,
          data: dosisPac
        }, {
          label: 'Disinfektan / Kaporit (mg/l)',
          backgroundColor: '#8a8a8a',
          borderColor: '#0000FF',
          hoverBackgroundColor: '#CCCCCC',
          hoverBorderColor: '#666666',
          fill: false,
          data: dosisKaporit
        }]
      };
    
      let chartdataBocor = {
        labels: bulan,
        datasets: [{
          label: 'Kebocoran (%)',
          backgroundColor: '#000000',
          borderColor: '#FF7F00',
          hoverBackgroundColor: '#CCCCCC',
          hoverBorderColor: '#666666',
          fill: false,
          data: kebocoran
        }]
      };
    
      let graphTarget = $("#graphCanvas");
      let lineGraph = new Chart(graphTarget, {
        type: 'bar',
        data: chartdata,
      });
    
      let graphTargetKimia = $("#graphCanvasKimia");
      let lineGraphKimia = new Chart(graphTargetKimia, {
        type: 'bar',
        data: chartdataKimia
      });
    
      let graphTargetDosis = $("#graphCanvasDosis");
      let lineGraphDosis = new Chart(graphTargetDosis, {
        type: 'bar',
        data: chartdataDosis
      });
    
      let graphTargetBocor = $("#graphCanvasBocor");
      let lineGraphTargetBocor = new Chart(graphTargetBocor, {
        type: 'bar',
        data: chartdataBocor,
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });
    }
  });
});

// auto input bulan tahun
const date = new Date(),
      month = date.getMonth()+1,
      year = date.getFullYear();

$('#input-tahun').val(year);
$('.footer-year').html(year);
$('#heading-tahun').html(year);


$("#input-bulan option").each(function(){
  if ($(this).data('bulan') == month) {
    $(this).attr("selected", "selected");
  }
});

$("#select-tahun option").each(function(){
  if ($(this).val() == year) {
    $(this).attr("selected", "selected");
  }
});

// smooth scrolling
$(document).ready(function(){
	$("a").on('click' , function(event){
		if (this.hash !== ""){
			event.preventDefault();

			var hash = this.hash;

			$('html, body').animate({
				scrollTop: $(hash).offset().top
        }, 

        1500, function(){
        window.location.hash = hash;
      });
    }
  });
});