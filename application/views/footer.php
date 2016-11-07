<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <div class="col-md-12">
            <div class="col-md-2">
                <img src="<?=base_url()?>assets/img/logo.png">
            </div>
			<div class="col-md-3">
				<i class="glyphicon glyphicon-map-marker" style="font-size: 20px; margin-bottom: 10px;"></i><br>
				DKM LUQMANUL HAKIM<br>Jl. Gegerkalong Hilir, Desa Ciwaruga, Jawa Barat 40012
			</div>
			<div class="col-md-3">
				<i class="glyphicon glyphicon-phone-alt" style="font-size: 20px; margin-bottom: 10px"></i><br>
				Telp  : 08723618xxxx<br>
				E-Mail: emrizal21@gmail.com
			</div>
			<div class="col-md-4">
				Didukung oleh:<br><br>
				<img src="<?=base_url()?>assets/img/logo_assalam.png" height="70px" title="Assalam POLBAN" />&emsp;<img src="<?=base_url()?>assets/img/polban.png" height="75px" title="POLBAN" />&emsp;<img src="<?=base_url()?>assets/img/ruki.png" height="70px" title="Ruki">
			</div>
        </div>
		<div class="col-md-12" style="margin-top: 20px;">
			
		</div>
    </div>
</section>

<!-- jQuery -->
<script src="<?=base_url()?>assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

<!-- Scrolling Nav JavaScript -->
<script src="<?=base_url()?>assets/js/jquery.easing.min.js"></script>
<script src="<?=base_url()?>assets/js/scrolling-nav.js"></script>
<script src='<?=base_url()?>assets/lib/moment.min.js'></script>

<script src='<?=base_url()?>assets/js/fullcalendar.min.js'></script>

<script>

//FOR CALENDAR
	
    $(document).ready(function() {
		
        $('#calendar').fullCalendar({
            theme: true,
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            //defaultDate: '2016-01-01',
            editable: false,
            eventLimit: true, // allow "more" link when too many events
            events: <?php print json_encode($tgl); ?>,
			eventClick:  function(event, jsEvent, view) {
				$('#modalTitle').html(event.title);
				$('#modalBody').html(event.description);
				$('#eventUrl').attr('href',event.url);
				$('#fullCalModal').modal();
			},
			eventMouseover: function(event){
				$(this).css('cursor','pointer');
				$(this).css('background-color','limegreen');
			},
			eventMouseout: function(event){
				$(this).css('background-color','#337ab7');
			}
        });
		
		
		
		
    });
	
	
</script>
<script>
	
	function call_modal(a){
			//alert(a);
			// Get the modal
			var modal = document.getElementById('ebookModal-'+a);
			
			// Get the button that opens the modal
			var btn = document.getElementById("r-ebook-"+a);
			
			//modal.style.display = "block";
			$('#ebookModal-'+a).modal();
			
			// Get the <span> element that closes the modal

			// When the user clicks on the button, open the modal
			//btn.onclick = function() {
				//modal.style.display = "block";
			//	$('#ebookModal-'+a'').modal();
			//}
		}
		
	function close_modal(a){
		var modal = document.getElementById('ebookModal-'+a);
		//var span = document.getElementsByClassName("close-modal");

		// When the user clicks on <span> (x), close the modal
		//span.onclick = function() {
			modal.style.display = "none";
		//}
	}		
		

		// When the user clicks anywhere outside of the modal, close it
		//window.onclick = function(event) {
		//	if (event.target == modal) {
		//		modal.style.display = "none";
		//	}
		//}
</script>
<script src="<?=base_url()?>assets/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });

        $(".pagination li").click(function(){
            $(".pagination li").removeClass("active");
            $(this).addClass("active");
            var page = $(this).val();
            $.ajax({
              type:'GET',
              url: "<?=base_url()?>main/getMateri/"+page,
              data: [],
              success: function(data){
                console.log(data);
                //$("#loading_sisa_stok").css('display','none');
                $("#content_materi").html(data);
            }
        });

        });
    });
</script>
</body>

</html>
