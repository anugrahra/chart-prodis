$(document).ready(function() {
  showGraph();
});

function showGraph() {
  {
    $.post("data.php",
      function(data) {
        console.log(data);
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
            label: 'NRW (m3)',
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
            backgroundColor: '#FF7F00',
            borderColor: '#FF7F00',
            hoverBackgroundColor: '#CCCCCC',
            hoverBorderColor: '#666666',
            fill: false,
            data: pac
          }, {
            label: 'Kaporit (Kg)',
            backgroundColor: '#0000FF',
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
            backgroundColor: '#FF7F00',
            borderColor: '#FF7F00',
            hoverBackgroundColor: '#CCCCCC',
            hoverBorderColor: '#666666',
            fill: false,
            data: dosisPac
          }, {
            label: 'Disinfektan / Kaporit (mg/l)',
            backgroundColor: '#0000FF',
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
            backgroundColor: '#FF7F00',
            borderColor: '#FF7F00',
            hoverBackgroundColor: '#CCCCCC',
            hoverBorderColor: '#666666',
            fill: false,
            data: kebocoran
          }]
        };

        let graphTarget = $("#graphCanvas");
        let lineGraph = new Chart(graphTarget, {
          type: 'line',
          data: chartdata,
        });

        let graphTargetKimia = $("#graphCanvasKimia");
        let lineGraphKimia = new Chart(graphTargetKimia, {
          type: 'line',
          data: chartdataKimia
        });

        let graphTargetDosis = $("#graphCanvasDosis");
        let lineGraphDosis = new Chart(graphTargetDosis, {
          type: 'line',
          data: chartdataDosis
        });

        let graphTargetBocor = $("#graphCanvasBocor");
        let lineGraphDosis = new Chart(graphTargetBocor, {
          type: 'line',
          data: chartdataBocor
        });

      });
  }
}

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