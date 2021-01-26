<!--**********************************
            Footer start
        ***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright © Developed by <a href="https://www.akbara.ac.id/" target="_blank">Akbara Inovation Center</a> &amp; Designed by <a href="http://dexignlab.com/" target="_blank">DexignLab</a> 2020</p>
    </div>
</div>
<!--**********************************
            Footer end
        ***********************************-->

<!--**********************************
           Support ticket button start
        ***********************************-->

<!--**********************************
           Support ticket button end
        ***********************************-->


</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
        Scripts
    ***********************************-->
<!-- Required vendors -->
<script src="<?= base_url('assets/') ?>vendor/global/global.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/chart.js/Chart.bundle.min.js"></script>
<script src="<?= base_url('assets/') ?>js/custom.min.js"></script>
<script src="<?= base_url('assets/') ?>js/deznav-init.js"></script>
<!-- Apex Chart -->
<script src="<?= base_url('assets/') ?>vendor/apexchart/apexchart.js"></script>

<!-- Vectormap -->
<!-- Chart piety plugin files -->
<script src="<?= base_url('assets/') ?>vendor/peity/jquery.peity.min.js"></script>

<!-- Chartist -->
<script src="<?= base_url('assets/') ?>vendor/chartist/js/chartist.min.js"></script>

<!-- Dashboard 1 -->
<script src="<?= base_url('assets/') ?>js/dashboard/dashboard-1.js"></script>
<!-- Svganimation scripts -->
<script src="<?= base_url('assets/') ?>vendor/svganimation/vivus.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/svganimation/svg.animation.js"></script>

<!-- Select2 -->
<script src="<?= base_url('assets/v3'); ?>/plugins/select2/js/select2.full.min.js"></script>

<script>
    // set lokasi latitude dan longitude, lokasinya kota palembang 
    var mymap = L.map('mapid').setView([-7.561269, 110.82598], 13);
    //setting maps menggunakan api mapbox bukan google maps, daftar dan dapatkan token      
    L.tileLayer(
        'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibmFiaWxjaGVuIiwiYSI6ImNrOWZzeXh5bzA1eTQzZGxpZTQ0cjIxZ2UifQ.1YMI-9pZhxALpQ_7x2MxHw', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 20,
            id: 'mapbox/streets-v11', //menggunakan peta model streets-v11 kalian bisa melihat jenis-jenis peta lainnnya di web resmi mapbox
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'your.mapbox.access.token'
        }).addTo(mymap);


    // buat variabel berisi fugnsi L.popup 
    var popup = L.popup();

    // buat fungsi popup saat map diklik
    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("koordinatnya adalah " + e.latlng
                .toString()
            ) //set isi konten yang ingin ditampilkan, kali ini kita akan menampilkan latitude dan longitude
            .openOn(mymap);

        document.getElementById('latlong').value = e.latlng //value pada form latitde, longitude akan berganti secara otomatis
    }
    mymap.on('click', onMapClick); //jalankan fungsi
</script>

</body>

<!-- Mirrored from motaadmin.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jan 2021 01:54:44 GMT -->

</html>