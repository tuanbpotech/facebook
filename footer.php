<!--post modal-->
<div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                Update Status
            </div>
            <div class="modal-body">
                <form class="form center-block">
                    <div class="form-group">
                        <textarea class="form-control input-lg" autofocus="" placeholder="What do you want to share?"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div>
                    <button class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">Post</button>
                    <ul class="pull-left list-inline"><li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li><li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
                </div>  
            </div>
        </div>
    </div>
</div>
<!-- script references -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/zoomable.js"></script>
<script src="js/scripts.js"></script>
<script src="js/masonry.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
 
        $(".owl-carousel").owlCarousel({

            navigation : false, 
            pagination: false,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true,
            autoPlay: true,

        });
 

        $('.avatar .img-responsive').zoomable({

            padding: '60px',
            bgcolor: 'hsl(0, 1%, 36%)',
            opacity: 0.9,
            blur:    '10px',
            speed:   300,
            border:  '7px solid #fff',
            radius:  '3px',
            shadow:  '0 0 23px #000'
          
        });
        //$fn.gallery(ToBoxWidth);
         $('.masonry').masonry({rowMinAspectRatio: 3.3, borderWidth: 4});



    });
</script>