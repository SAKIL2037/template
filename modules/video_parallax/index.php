<?php
$upload = get_option('upload', $params['id']);

$h = get_option('height', $params['id']);
$autoplay = get_option('autoplay', $params['id']) == 'y';

if ($h == false) {
    if (isset($params['height'])) {
        $h = intval($params['height']);
    }
}
if ($autoplay == false) {
    if (isset($params['autoplay'])) {
        $autoplay = intval($params['autoplay']);
    }
}

if ($h == '') {
    $h = '500';
}

if ($autoplay == '0' OR $autoplay == '') {
    $autoplay = false;
} else {
    $autoplay = true;
}
?>

    <div class="container-fluid">
        <style>
            <?php print '#'.$params['id']; ?>
            .video-holder {
                height: <?php print $h; ?>px;
                overflow: hidden;
            }

            <?php print '#'.$params['id']; ?>
            .video-holder #video-background {
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                min-width: 100%;
                min-height: 100%;
                width: 100%;
                height: 100%;
                z-index: -100;
                background-size: cover;
                transition: 1s opacity;
                object-fit: cover;
                /*position: fixed;*/
            }

            <?php print '#'.$params['id']; ?>
            .video-holder .stopfade {
                opacity: .5;
            }

            <?php print '#'.$params['id']; ?>
            .video-holder .button-holder {
                display: block;
                position: absolute;
                width: 100%;
                text-align: center;
                cursor: pointer;
                z-index: 1;
                padding-top: <?php print ($h/2)-50; ?>px;
                height: <?php print $h; ?>px;
            }

            <?php print '#'.$params['id']; ?>
            .video-holder .button-holder button {
                background: none;
                border: 0;
                outline: none;
            }

            <?php print '#'.$params['id']; ?>
            .video-holder .button-holder button i {
                color: #fff;
                font-size: 100px;
            }

            <?php print '#'.$params['id']; ?>
            .video-holder .video-info {
                color: #fff;
                display: block;
                position: absolute;
                width: 100%;
                text-align: center;
                z-index: 1;
                padding-top: 100px;
            }

            @media screen and (max-width: 991px) {

            }

            @media screen and (max-width: 991px) {
            <?php print '#'.$params['id']; ?> .video-holder #video-background {
                position: relative;
            }

            <?php print '#'.$params['id']; ?> .video-holder {
                                                  height: auto;
                                              }

                .video-holder .video-info {
                    padding-top: 0px;
                }
            }
        </style>
        <script>
            $(document).ready(function () {
                var vid = document.querySelector("<?php print '#'.$params['id']; ?> #video-background");
                var pauseButton = document.querySelector("<?php print '#'.$params['id']; ?> .video-holder button");

                if(pauseButton == null){
                    return;
                }

                if (window.matchMedia('(prefers-reduced-motion)').matches) {
                    vid.removeAttribute("autoplay");
                    vid.pause();
                    pauseButton.innerHTML = '<i class="material-icons">play_circle_outline</i>';
                }

                function vidFade() {
                    vid.classList.add("stopfade");
                }

                <?php if ($autoplay == false): ?>vidFade();<?php endif; ?>


                vid.addEventListener('ended', function () {
                    // only functional if "loop" is removed
                    vid.pause();
                    // to capture IE10
                    vidFade();
                });

                pauseButton.addEventListener("click", function () {
                    vid.classList.toggle("stopfade");
                    if (vid.paused) {
                        vid.play();
                        pauseButton.innerHTML = '<i class="material-icons" style="visibility: hidden;">pause_circle_outline</i>';
                    } else {
                        vid.pause();
                        pauseButton.innerHTML = '<i class="material-icons">play_circle_outline</i>';
                    }
                })
            });
        </script>
        <div class=" video-holder">

            <?php if ($autoplay == true): ?>
                <div class="video-info">
                    <div class="edit" rel="video-info" field="module-video-parallax-<?php print $params['id']; ?>">
                        <span style="font-size: 62px; font-style: italic;">Summer Time</span>
                    </div>
                </div>
            <?php else: ?>
                <div class="button-holder">
                    <button>
                        <i class="material-icons">
                            <?php if ($autoplay == false): ?>play_circle_outline<?php endif; ?>
                            <?php if ($autoplay == true): ?>pause_circle_outline<?php endif; ?>
                        </i>
                    </button>
                </div>
            <?php endif; ?>

            <video poster="" id="video-background" playsinline muted loop <?php if ($autoplay == true): ?>autoplay<?php endif; ?>>
                <source src="<?php print $upload; ?>" type="video/mp4">
            </video>
        </div>
    </div>

<?php print lnotif('Upload Video'); ?>