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
<script src="js/fbfpalbums.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/pongstagr.am.min.js"></script>
<script src="js/ycp.js"></script>

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


        // Setting fancybox
        $(".fbfppopup").fancybox({
            openEffect : 'fade',
            closeEffect : 'fade'
        });

        // Setting fbfpalbums
        $(".anu").fbfpalbums(
            fp = "744858075584501", // your username or id facebook fans page
            token = "EAACEdEose0cBAJ3mDd6XdhuIBZARYStiMyY6qgtfI2VM0ezfa2UjuAQIcwqQwjjOWjZCx8ABmY2hF4jJGnkN5hZBgitbZCCiEMAA3MP3nb3duxDet6UZAcZB3hglUME7IJvZBwBrhJE32XGwCF4aZBMRYUF9m2s3p9cNpL72ZBfjECwZDZD" // your facebook accessToken
        );

        // Instagram
        $('#profile').pongstgrm({
            accessId:     '3127861128',
            accessToken:  '3127861128.1677ed0.f6b92785be4f41d68691a2d826c0b7e0',
            show:             'profile',
            picture_size:     '100',                  // sets profile picture to 64x64 pixels, no need to add px
            profile_bg_img:   '/facebook/images/img-instagram.jpg', // image url
            profile_bg_color: '#d9534f'             // background color
        });
        $('#recent').pongstgrm({ 
            accessId:     '3127861128',
            accessToken:  '3127861128.1677ed0.f6b92785be4f41d68691a2d826c0b7e0',
            show: 'recent' 
        });
        $('#tag').pongstgrm({ 
            accessId:     '3127861128',
            accessToken:  '3127861128.1677ed0.f6b92785be4f41d68691a2d826c0b7e0',
            show: 'kyo1122' 
        });

        // Youtube
        ibacor_ycp(
            channels_name = 'UCxeibLYCcw3Uj894qfzrDhw', //example
            channels_title = 'TuanNguyen Channel',
            type = 'id', // type='forUsername' (by user) or type='id' (by channel)
            list_count = 50, // number of videos playlist
            autoplay = false, //true or false
            apikey = 'AIzaSyCDdp0sm-wBnfJcTkKORSemi04OQGYPO3o'
        );

        $(".btn-pref .btn").click(function () {
        $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
        $(this).removeClass("btn-default").addClass("btn-primary");   
    });

    });
</script>
