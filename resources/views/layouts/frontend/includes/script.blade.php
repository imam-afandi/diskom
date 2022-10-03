<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.0/dist/index.bundle.min.js"></script>
<script src="{{ url('frontend/lib/wow/wow.min.js') }}"></script>
<script src="{{ url('frontend/lib/easing/easing.min.js') }}"></script>
<script src="{{ url('frontend/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ url('frontend/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ url('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{ url('frontend/lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ url('frontend/lib/lightbox/js/lightbox.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>

<!-- Template Javascript -->
<script src="{{ url('frontend/js/main.js') }}"></script>
<script>
    $(".popup").click(function () {
var $this = $(this);
var $iframe = $("<iframe>").attr("src", $this.data("link")).css({"width": 400, "height": 300});
var $title = $("<h1>").text($this.data("title"));
$("#video-view").html($title).append($iframe);
$iframe.wrap("<div class='class-video'>");
});
</script>